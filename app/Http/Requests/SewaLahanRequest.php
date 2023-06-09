<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SewaLahanRequest extends FormRequest
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
            'namapemilik' => [
                'required',
                'string',
                'max:200'
            ],
            'namalahan' => [
                'required',
                'string',
                'max:100'
            ],
            'luas' => [
                'required',
                'string',
                'max:100'
            ],
            'durasi' => [
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
            'hargasewa' => [
                'required',
                'string',
                'max:200'
            ]
        ];

        return $rules;
    }
}
