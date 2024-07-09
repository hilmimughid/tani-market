<?php

namespace App\Http\Requests;

use App\Models\Produk;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBeliRequest extends FormRequest
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
            'jumlah' => [
                'required',
                'min:1',
                function ($attribute, $value, $fail) {
                    $produk = Produk::find($this->produk_id);
                    if ($value > $produk->stok) {
                        $fail('Jumlah melebihi stok yang tersedia');
                    }
                },
            ],
            'alamat' => 'required|max:254',
        ];
    }

    public function messages(): array
    {
        return [
            'jumlah.required' => 'Jumlah pesanan harus diisi',
            'jumlah.min' => 'Jumlah pesanan harus lebih dari 0',
            'jumlah.exists' => 'Jumlah melebihi stok yang tersedia',
            'alamat.required' => 'Alamat tujuan harus diisi',
            'alamat.max' => 'Alamat maksimal 254 karakter',
        ];
    }
}
