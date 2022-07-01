<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'question_name' => $this->faker->word(),
            'question' => $this->faker->realText(100),
            'expected_result' => $this->faker->realText(100),
            'collection' => $this->faker->randomElement(['ARRAY','LOOP']),
        ];
    }
}
