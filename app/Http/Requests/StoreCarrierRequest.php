<?php

namespace App\Http\Requests;

use App\Models\{
    User,
    Facility,
    Carrier,
};
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\CarrierExistsRule;

class StoreCarrierRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
        ];
    }


    public function messages(){
        return [
            'name.required' => 'O campo nome é obrigatório',
        ];
    }
}
