<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepotRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'branch'=>'required',
            'address'=>'required',
            'address'=>'phone',
        ];
    }
}
