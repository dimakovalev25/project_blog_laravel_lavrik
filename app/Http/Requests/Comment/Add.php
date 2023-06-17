<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class Add extends FormRequest
{
   public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'content' => 'required|min:1|max:100',
            'id' => 'required|integer',
            'for' => 'required|in:post,video',
          ];
    }
}
