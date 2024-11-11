<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitors>
 */
class VisitorsFactory extends Factory
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
            'birthday' => $this->faker->date(),
            'age' => $this->faker->numberBetween(18, 30),
            'sex' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'address' => $this->faker->address(),
            'contact_info' => $this->faker->phoneNumber(),
            'visitor_type' => $this->faker->randomElement(['Student', 'Parents', 'Other']),
        ];
    }
}