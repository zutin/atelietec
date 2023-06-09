<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarrierRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
        ];
    }
}
