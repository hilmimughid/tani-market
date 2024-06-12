<?php

namespace App\Http\Requests\Slideshow;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSlideshowRequest extends FormRequest
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
            'gambar' => 'mimes:jpeg,png,jpg,svg|max:2048',
            'urutan' => 'required',
        ];
    }
}
