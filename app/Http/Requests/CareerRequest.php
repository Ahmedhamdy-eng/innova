<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            "name"=> ["required", "max:2"],
            "email"=> ["required", 'email'],
            "address"=> ["required", 'max:255'],
            "state"=> ["required", 'max:255'],
            "city"=> ["required", 'max:255'],
            "phone"=> ["required", 'max:255'],
            "job_vacancy"=> ["required", 'max:255'],
            "attachment"=> ["required"],
        ];
    }
}

