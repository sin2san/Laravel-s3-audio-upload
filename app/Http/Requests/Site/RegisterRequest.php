<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {

    public function rules()
    {
        return [
            'first_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Please enter the first name',
            'email.required' => 'Please enter the email address',
            'email.email' => 'Please enter a valid email address',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
