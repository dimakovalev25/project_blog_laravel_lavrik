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
            'category_id' => 'required',
            'tags' => 'required|array|min:1'
        ];
    }

    public function messages()
    {
        return [
            'tags.required' => 'add min 1 tag'
        ];
    }

    public function attributes()
    {

        return [
          'title' => 'title!',
          'content' => 'content!'
        ];
    }

}
