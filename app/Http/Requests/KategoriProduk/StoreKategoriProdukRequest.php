<?php

namespace App\Http\Requests\KategoriProduk;

use Illuminate\Foundation\Http\FormRequest;

class StoreKategoriProdukRequest extends FormRequest
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
            'nama' => 'required|max:200|unique:kategori_produk,nama',
            'deskripsi' => 'max:200',
        ];
    }
}
