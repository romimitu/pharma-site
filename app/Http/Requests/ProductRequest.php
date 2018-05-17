<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'trade_name'=>'required',
            'generic_name'=>'required',
            'therapeutic_class'=>'required',
            'indication'=>'required',
        ];
    }
}
