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
            'nama' => 'required|max:200|unique:produk,nama',
            'gambar' => 'required|mimes:jpeg,png,jpg,svg|max:2048',
            'kategori_id' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'deskripsi' => 'max:2000',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama produk wajib diisi',
            'nama.max' => 'Nama produk maksimal 200 karakter',
            'nama.unique' => 'Nama produk sudah dipakai',
            'gambar.required' => 'Gambar produk wajib diisi',
            'gambar.mimes' => 'Gambar produk harus berupa file: jpeg, png, jpg, svg',
            'gambar.max' => 'Ukuran gambar produk maksimal 2MB',
            'kategori_id.required' => 'Kategori produk wajib diisi',
            'stok.required' => 'Stok produk wajib diisi',
            'harga.required' => 'Harga produk wajib diisi',
            'deskripsi.max' => 'Deskripsi produk maksimal 2000 karakter',
        ];
    }
}
