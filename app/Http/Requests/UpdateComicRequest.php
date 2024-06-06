<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UpdateComicRequest extends FormRequest
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
        if (Str::startsWith($this->thumb, 'https://')) {
            $validation = 'url';
        } else {
            $validation = 'image|max:1024';
        }

        return [
            'title' => 'required|min:8|max:100',
            'description' => 'required|min:40|max:2000',
            //'thumb' => 'required|image|max:500',
            'thumb' => 'required|'.$validation,
            'price' => 'nullable|numeric',
            'series' => 'nullable|min:5|max:30',
            'sale_date' => 'nullable',
            'type' => 'nullable|min:5|max:30',
        ];
    }
}
