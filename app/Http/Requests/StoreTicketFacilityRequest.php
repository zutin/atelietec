<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketFacilityRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'facility_id' => ['required', 'exists:facilities,id'],
            'ticket_id' => ['required', 'exists:tickets,id'],
        ];
    }


    public function messages()
    {
        return [
            'facility_id.required' => 'Escolha uma unidade.',
            'facility_id.exists' => 'Unidade não encontrada.',
            'ticket_id.required' => 'Escolha uma situação.',
            'ticket_id.exists' => 'Situação não encontrada.',
        ];
    }
}
