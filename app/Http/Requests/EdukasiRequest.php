<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EdukasiRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'judul' => [
                'required',
                'string',
                'max:200'
            ],
            'gambar' => [
                'nullable',
                'mimes:jpeg,jpg,png,WEBP'
            ],
            'deskripsi' => [
                'required',
            ],
        ];

        return $rules;
    }
}
