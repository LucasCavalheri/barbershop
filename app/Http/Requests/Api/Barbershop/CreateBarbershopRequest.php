<?php

namespace App\Http\Requests\Api\Barbershop;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateBarbershopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        /** @var \App\Models\User */
        $user = Auth::user();
        return $user->role === 'barber';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'phones' => 'required|array|min:1', // Deve ser um array com pelo menos 1 número
            'phones.*' => 'required|string|max:20', // Cada número deve ser uma string de até 20 caracteres
        ];
    }
}
