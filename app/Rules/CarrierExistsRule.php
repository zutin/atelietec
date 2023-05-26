<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Carrier;

class CarrierExistsRule implements Rule
{
    public function passes($attribute, $value)
    {
        return Carrier::where('id', $value)->exists();
    }

    public function message()
    {
        return 'A operadora selecionada é inválida.';
    }
}
