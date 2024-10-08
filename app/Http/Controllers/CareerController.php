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
        $url = "https://api.sendgrid.com/v3/mail/send";
        $headers = [
            'Authorization' => 'Bearer '.env("SEND_GRID_TOKEN"),
            'Content-Type' => 'application/json',
        ];

        // The email data
        $data = [
            'from' => [
                'email' => 'do-not-reply@innovahealthcare.net',
            ],
            'personalizations' => [
                [
                    'to' => [
                        [
                            'email' => 'innova@innovahealthcare.net', // The recipient email
                        ],
                    ],
                    'dynamic_template_data' => [
                        'name' => $request->input('name'),
                        'email' => $request->input('email'),
                        'address' => $request->input('address'),
                        'state' => $request->input('state'),
                        'city' => $request->input('city'),
                        'phone' => $request->input('phone'),
                        'job_vacancy' => $request->input('job_vacancy'),
                    ],
                ],
            ],
            'template_id' => env('SENDGRID_CAREER_REQUEST_TEMPLATE_ID'), // Your dynamic template ID from the .env file

        ];
        // Send the email via SendGrid API
        $response = Http::post($url, [
            'headers' => $headers,
            'json' => $data,
        ]);

    }

}
