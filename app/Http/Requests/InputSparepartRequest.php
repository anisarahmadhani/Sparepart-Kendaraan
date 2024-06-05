<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputSparepartRequest extends FormRequest
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
            'kode_sparepart' => 'required',
            'nama_sparepart' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'id_suplier' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'kode_sparepart.required' => 'Data harus diisi',
            'nama_sparepart.required' => 'Data harus diisi',
            'deskripsi.required' => 'Data harus diisi',
            'harga.required' => 'Data harus diisi',
            'stok.required' => 'Data harus diisi',
            'id_suplier.required' => 'Data harus diisi',
        ];
    }
}
