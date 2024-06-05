<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
           'email' => 'required|email',
           'password' => 'required|min:8|max:20' 
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Data harus diisi',
            'email.email' => 'Data harus diisi dengan format email',
            'password.required' => 'Data harus diisi',
            'password.min' => 'Isikan password minimal 8 karakter',
            'password.max' => 'Isikan password maximal 20 karakter',
        ];
    }
}
