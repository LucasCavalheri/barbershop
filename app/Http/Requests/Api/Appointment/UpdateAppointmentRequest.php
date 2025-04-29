<?php

namespace App\Http\Requests\Api\Appointment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'start_time' => 'sometimes|date|after_or_equal:now',
            'end_time' => 'sometimes|date|after:start_time',
        ];
    }
}
