<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\Barbershop;
use App\Models\Service;
use App\Models\User;
use App\Models\UserAsClientUserAsBarberBarbershopService;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'client_id' => User::factory(),
            'barber_id' => User::factory(),
            'barbershop_id' => Barbershop::factory(),
            'service_id' => Service::factory(),
            'start_time' => fake()->dateTime(),
            'end_time' => fake()->dateTime(),
            'status' => fake()->randomElement(["pending","confirmed","canceled"]),
            'user_as_client_user_as_barber_barbershop_service_id' => UserAsClientUserAsBarberBarbershopService::factory(),
        ];
    }
}
