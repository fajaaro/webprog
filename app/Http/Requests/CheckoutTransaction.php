<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutTransaction extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'card_name' => 'required|min:6',
            'card_number' => 'required|min:19|max:19',
            'card_exp_month' => 'required|numeric|min:1|max:12',
            'card_exp_year' => 'required|numeric|min:2021|max:2050',
            'card_cvc' => 'required|min:3|max:4',
            'country_id' => 'required',
            'zip_code' => 'required|numeric',
        ];
    }
}
