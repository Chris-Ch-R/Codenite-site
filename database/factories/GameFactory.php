<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'paticipants' => $this->faker->numberBetween(1,20),
            'mode' => $this->faker->randomElement(['PLAYER','TEACHER']),
            'session' => $this->faker->boolean(),
        ];
    }
}
