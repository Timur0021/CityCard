<?php

namespace App\Http\Requests\TypeTicket;

use Illuminate\Foundation\Http\FormRequest;

class TypeTicketUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ticket_type' => 'required',
            'ticket_price' => 'required'
        ];
    }
}
