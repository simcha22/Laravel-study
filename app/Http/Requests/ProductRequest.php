<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'requierd|string|min:4',
            'price' => 'requierd|numeric',
            'information' => 'requierd'
        ];
    }
}
