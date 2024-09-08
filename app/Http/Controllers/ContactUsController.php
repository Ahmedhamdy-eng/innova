<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\Suggestion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;

class ContactUsController extends Controller
{
    public function store(ContactUsRequest $request): RedirectResponse
    {
        Suggestion::query()->create(request()->all());
        alert()->success('Your Message Sent Successfully', 'we will contact you soon.')->showConfirmButton('Confirm', '#3085d6');
        $this->sendEmail($request);
        return redirect()->back();


    }

    private function sendEmail($request)
    {
        $url = "https://api.sendgrid.com/v3/mail/send";
        $headers = [
            'Authorization' => 'Bearer ' . env("SEND_GRID_TOKEN"),
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
                        'name' => $request->input('full_name'),
                        'email' => $request->input('email'),
                        'phone' => $request->input('phone'),
                        'message' => $request->input('message'),
                    ],
                ],
            ],
            'template_id' => env('SENDGRID_CONTACT_REQUEST_TEMPLATE_ID'), // Your dynamic template ID from the .env file

        ];
        // Send the email via SendGrid API
        $response = Http::post($url, [
            'headers' => $headers,
            'json' => $data,
        ]);

    }

}
