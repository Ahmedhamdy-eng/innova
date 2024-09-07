<?php

namespace App\Http\Controllers;

use App\Http\Requests\CareerRequest;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CareerController extends Controller
{
    public function store(CareerRequest $request)
    {
        $career = Career::query()->create($request->except('attachment'));

        $career->refresh()->addMedia($request->file('attachment'))->toMediaCollection('attachment');

        $this->sendEmail($request);
        alert()->success('Your Cv Sent Successfully', 'we will contact you soon.')->showConfirmButton('Confirm', '#3085d6');
        return redirect()->back();


    }

    private function sendEmail($request)
    {

        $htmlContent = "
            <h1>Dear Innova Manager,</h1>
            <p>A career request has been submitted by <strong>{$request['name']}</strong>.</p>
            <p><strong>Email:</strong> {$request['email']}</p>
            <p><strong>Address:</strong> {$request['address']}</p>
            <p><strong>State:</strong> {$request['state']}</p>
            <p><strong>City:</strong> {$request['city']}</p>
            <p><strong>Phone:</strong> {$request['phone']}</p>
            <p><strong>Job Vacancy:</strong> {$request['job_vacancy']}</p>
            <p>Best Regards,<br>Innova Healthcare Website</p>
        ";



        $url = "https://api.sendgrid.com/v3/mail/send";
        $headers = [
            'Authorization' => 'Bearer '.env("SEND_GRID_TOKEN"),
            'Content-Type' => 'application/json',
        ];

        // The email data
        $data = [
            "personalizations" => [
                [
                    "to" => [
                        ["email" => "innova@innovahealthcare.net"]
                    ]
                ]
            ],
            "from" => ["email" => "do-not-reply@innovahealthcare.net"],
            "subject" => "Career Request From Innova healthcare website",
            "content" => [
                [
                    "type" => "text/html", // Set content type to HTML
                    "value" => $htmlContent
                ]
            ],

        ];
        // Send the email via SendGrid API
        $response = Http::post($url, [
            'headers' => $headers,
            'json' => $data,
        ]);

    }

}
