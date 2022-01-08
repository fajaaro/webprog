<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name' => 'required',
            'current_password' => 'required|alpha_num|min:6',
            'new_password' => 'nullable|alpha_num|min:6',
            'new_password_confirmation' => 'nullable|alpha_num|min:6|same:new_password',
            'avatar' => 'nullable|mimes:jpg,png|max:100',
        ];
    }
}
