<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGame extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => 'required|max:500',
            'long_description' => 'required|max:2000',
            'genre_id' => 'required',
            'price' => 'required|max:1000000000',
            'image' => 'required|mimes:jpg|max:100',
            'trailer_video' => 'required|mimes:webm|max:100000',
        ];
    }
}
