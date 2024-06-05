<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputSuplierRequest extends FormRequest
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
            'nama_suplier' => 'required',
            'alamat' => 'required',
            'telpon' => 'required|min:10|max:15',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'nama_suplier.required' => 'Data harus diisi',
            'alamat.required' => 'Data harus disi',
            'telpon.required' => 'Data harus disi',
            'telpon.min' => 'Minimal 10 angka',
            'telpon.max' => 'Maximal 15 angka',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Inputan harus berupa email',
        ];
    }


    
}
