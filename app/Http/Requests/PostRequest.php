<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post.name' => 'required|string|max:100',
            'post.comment' => 'required|string|max:4000',
            'post.prefecture' => 'required|string|max:4',
        ];
    }
}
