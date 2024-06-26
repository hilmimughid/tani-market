<?php

namespace App\Http\Requests\Produk;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdukRequest extends FormRequest
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
            'nama' => 'required|max:200',
            'gambar' => 'required|mimes:jpeg,png,jpg,svg|max:2048',
            'kategori_id' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'deskripsi' => 'max:2000',
        ];
    }
}
