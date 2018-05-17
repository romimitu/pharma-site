<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=>'required',
            'details'=>'required',
            'image1'=>'image',
        ];
    }
}
