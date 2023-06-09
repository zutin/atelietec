<?php

namespace App\Rules;

use App\Models\Carrier;
use Illuminate\Contracts\Validation\Rule;

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
