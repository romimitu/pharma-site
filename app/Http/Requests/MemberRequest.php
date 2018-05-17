<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required',
            'details'=>'required',
            'designation'=>'required',
            'image'=>'image',
        ];
    }
}
