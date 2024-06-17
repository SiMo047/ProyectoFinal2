<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'n_telefono' => $this->faker->phoneNumber,
            'n_personas' => $this->faker->numberBetween(1, 10),
            'fecha' => $this->faker->date(),
            'hora' => $this->faker->time(),
            'zona' => $this->faker->randomElement(['Terraza', 'Salón']),
        ];
    }
}
