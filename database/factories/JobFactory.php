<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'offer' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'description' => $this->faker->realText($maxNbChars = 200),
            'status' => $this->faker->ramdomElement(["In progress", "Completed"]),
        ];
    }
}
