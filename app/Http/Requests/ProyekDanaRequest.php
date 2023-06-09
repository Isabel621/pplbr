<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyekDanaRequest extends FormRequest
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
            'namaproyek' => [
                'required',
                'string',
                'max:200'
            ],
            'profit' => [
                'required',
                'string',
                'max:100'
            ],
            'tenor' => [
                'required',
                'string',
                'max:100'
            ],
            'gambar' => [
                'nullable',
                'mimes:jpeg,jpg,png,WEBP'
            ],
            'deskripsi' => [
                'required',
            ],
            'limit' => [
                'required',
                'string',
                'max:10'
            ],
            'dana' => [
                'required',
                'string',
                'max:200'
            ]
        ];

        return $rules;
    }
}
