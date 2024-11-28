<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solution>
 */
class SolutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'fee' => $this->faker->numberBetween(100000, 100000),
            'initialization_fee' => $this->faker->numberBetween(100000, 100000),
            'branch' => $this->faker->numberBetween(1, 50),
            'record_capacity' => $this->faker->numberBetween(1, 100)
        ];
    }
}
