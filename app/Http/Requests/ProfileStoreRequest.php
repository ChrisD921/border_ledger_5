<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class ProfileStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => [
                'required',
                Rule::unique('users', 'email')->ignore(auth()->user()->id),
            ],
            'password' => 'required|confirmed',
            
        ];
    }


    public function messages()
    {
        return [
            'first_name.required' => ' First Name is required!',
            'first_name.max' => 'First Name cannot be longer than 255 characters!',
            'last_name.required' => ' Last Name is required!',
            'last_name.max' => 'Last Name cannot be longer than 255 characters!',
            'date_of_birth.required' => 'Date of Birth is required!',
            'date_of_birth.date' => 'Date of Birth must be in Date Format!',
            'email.required' => 'Email is required!',
            'email.unique' => 'That email has already been taken!',
            'password.required' => 'Password is required!',
            'password.confirmed' => ' The Password must match with the Password Confirmation!'
        ];
    }

    
}
