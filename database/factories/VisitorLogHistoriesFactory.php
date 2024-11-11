<?php

namespace Database\Factories;

use App\Models\Visitors;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitor_log_histories>
 */
class VisitorLogHistoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'visitor_id' => Visitors::inRandomOrder()->first()->id, // Get a random boarder ID
            'status' => $this->faker->randomElement(['Checked In', 'Checked Out']),
            'time_stamp' => $this->faker->dateTimeThisYear(),
            'purpose' => $this->faker->sentence(),
        ];
    }
}
