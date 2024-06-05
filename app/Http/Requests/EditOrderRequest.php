<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditOrderRequest extends FormRequest
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
            'id_pelanggan' => 'required',
            'id_sparepart' => 'required',
            'tgl_order' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'id_pelanggan.required' => 'Data harus diisi',
            'id_sparepart.required' => 'Data harus diisi',
            'tgl_order.required' => 'Data harus diisi',
            'jumlah.required' => 'Data harus diisi',
            'total_harga.required' => 'Data harus diisi',
        ];
    }
}
