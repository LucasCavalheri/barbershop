<?php

namespace App\Http\Requests\Api\OpeningHour;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOpeningHourRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'opens_at' => 'sometimes|date_format:H:i',
            'closes_at' => 'sometimes|date_format:H:i|after:opens_at',
        ];
    }
}
