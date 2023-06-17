<?php

namespace App\Http\Requests\Video;

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
            'title' => 'required|min:2|max:100',
            'url'=>'required'
        ];
    }
}
