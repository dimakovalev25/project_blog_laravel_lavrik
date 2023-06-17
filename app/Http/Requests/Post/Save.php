<?php

namespace App\Http\Requests\Post;

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
            'content' => 'required',
            'category_id' => 'required'
        ];
    }

    public function attributes()
    {

        return [
          'title' => 'TITLE!',
          'content' => 'CONTENT!'
        ];
    }

}
