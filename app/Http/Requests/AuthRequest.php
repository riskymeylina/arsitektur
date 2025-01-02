<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'email'=> 'required|email',
            'password' => 'required|min:6'
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'email is required',
            'email.email' => 'email is not valid',
            'password.required' => 'password is required',
            'password.min' => 'password must be at least 6 character'
        ];
    }
}
