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

class StoreFacilityRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'designation' => ['max:255'],
            'carrier_id' => ['required', new CarrierExistsRule],
        ];
    }


    public function messages(){
        return [
            'name.required' => 'O campo nome é obrigatório',
            'address.required' => 'O campo endereço é obrigatório',
            'carrier_id.required' => 'A operadora selecionada é inválida',
        ];
    }
}
