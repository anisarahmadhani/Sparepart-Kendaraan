<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPelangganRequest extends FormRequest
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
            'nama_pelanggan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'telpon' => 'required|min:10|max:15',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'nama_pelanggan.required' => 'Data harus diisi',
            'jenis_kelamin.required' => 'Data harus diisi',
            'alamat.required' => 'Data harus diisi',
            'telpon.required' => 'Data harus diisi',
            'telpon.min' => 'Minimal 10 digit',
            'telpon.max' => 'Maximal 15 digit',
            'email.required' => 'Data harus diisi',
            'email.email' => 'Data harus berformat email',
        ];
    }
}
