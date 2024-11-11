<?php

namespace Database\Seeders;

use App\Models\Boarders;
use App\Models\Visitors;
use App\Models\BoarderLogHistories; // Import BoarderLogHistory model
use App\Models\VisitorLogHistories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed boarders and visitors
        Boarders::factory(5)->create();
        Visitors::factory(5)->create();
        
        // Seed boarder log histories
        BoarderLogHistories::factory(10)->create(); // Adjust the number as needed
        VisitorLogHistories::factory(10)->create();
    }
}
