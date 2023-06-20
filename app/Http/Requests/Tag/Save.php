<?php

namespace App\Http\Requests\Tag;

use Illuminate\Foundation\Http\FormRequest;

class Save extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:1|max:110|unique:tags',
            'url' => 'required|min:1|max:110',
            'description' => 'required|min:1|max:250'
        ];
    }
}
