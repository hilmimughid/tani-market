<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email, ' . $this->user->id,
            'password' => 'required|string|min:8',
            'no_hp' => 'required|string|regex:/^[0-9]{10,15}$/|unique:users,no_hp, ' . $this->user->id,
            'role' => 'required|in:Customer,Admin',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama harus diisi',
            'nama.string' => 'Nama harus berupa string',
            'nama.max' => 'Nama maksimal 255 karakter',
            'email.required' => 'Email harus diisi',
            'email.string' => 'Email harus berupa string',
            'email.email' => 'Email harus berupa email',
            'email.max' => 'Email maksimal 255 karakter',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.string' => 'Password harus berupa string',
            'password.min' => 'Password minimal 8 karakter',
            'no_hp.required' => 'Nomor HP harus diisi',
            'no_hp.string' => 'Nomor HP harus berupa string',
            'no_hp.regex' => 'Nomor HP harus berupa angka dan minimal 10 karakter',
            'no_hp.unique' => 'Nomor HP sudah terdaftar',
            'role.required' => 'Role harus diisi',
            'role.in' => 'Role harus Customer atau Admin',
        ];
    }
}
