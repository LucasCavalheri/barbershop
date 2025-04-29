<?php

namespace App\Http\Requests\Api\Appointment;

use Illuminate\Foundation\Http\FormRequest;

class CreateAppointmentRequest extends FormRequest
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
    public function rules()
    {
        return [
            'barbershop_id' => 'required|exists:barbershops,id',
            'service_id' => 'required|exists:services,id',
            'start_time' => 'required|date|after_or_equal:now',
        ];
    }
}
