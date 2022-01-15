<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGame extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|unique:games',
            'description' => 'required|max:500',
            'long_description' => 'required|max:2000',
            'genre_id' => 'required',
            'developer' => 'required',
            'publisher' => 'required',
            'price' => 'required|max:1000000000',
            'image' => 'required|mimes:jpg|max:100',
            'trailer_video' => 'required|mimes:webm|max:100000',
        ];
    }
}
