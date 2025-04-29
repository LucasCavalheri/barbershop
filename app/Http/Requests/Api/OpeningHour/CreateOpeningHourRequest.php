<?php

namespace App\Http\Requests\Api\OpeningHour;

use Illuminate\Foundation\Http\FormRequest;

class CreateOpeningHourRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'day_of_week' => 'required|integer|between:0,6', // 0 = Domingo, 6 = Sábado
            'opens_at' => 'required|date_format:H:i',
            'closes_at' => 'required|date_format:H:i|after:opens_at',
        ];
    }
}
