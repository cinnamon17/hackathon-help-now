<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => fake()->sentence,
            'descripcion' => fake()->sentence,
            'localizacion' => fake()->address,
            'verified' => false,
            'organizador' => 'ONG',
            'personas_inscritas' => fake()->numberBetween(10,16),
            'img' => fake()->imageUrl()

        ];
    }
}
