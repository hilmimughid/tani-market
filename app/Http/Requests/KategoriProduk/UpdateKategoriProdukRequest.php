<?php

namespace App\Http\Requests\KategoriProduk;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKategoriProdukRequest extends FormRequest
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
            'nama' => 'required|unique:kategori_produk,nama,' . $this->kategori_produk->id,
            'deskripsi' => 'max:200',
        ];
    }
}
