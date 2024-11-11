<?php

namespace Database\Factories;

use App\Models\BoarderLogHistories;
use App\Models\Boarders; // Import Boarders model
use Illuminate\Database\Eloquent\Factories\Factory;

class BoarderLogHistoriesFactory extends Factory
{
    protected $model = BoarderLogHistories::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'boarder_id' => Boarders::inRandomOrder()->first()->school_id, // Get a random boarder ID
            'status' => $this->faker->randomElement(['Checked In', 'Checked Out']),
            'time_stamp' => $this->faker->dateTimeThisYear(),
            'reason' => $this->faker->sentence(),
        ];
    }
}
