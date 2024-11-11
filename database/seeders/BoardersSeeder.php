<?php

namespace Database\Seeders;

use App\Models\Boarders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Boarders::factory(5)->create();
    }
}
