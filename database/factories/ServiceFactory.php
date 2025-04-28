<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Barbershop;
use App\Models\Service;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'barbershop_id' => Barbershop::factory(),
            'name' => fake()->name(),
            'duration' => fake()->numberBetween(-10000, 10000),
            'price' => fake()->randomFloat(0, 0, 9999999999.),
        ];
    }
}
