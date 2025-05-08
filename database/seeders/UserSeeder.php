<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 5 users, each with 3 stations
        User::factory()
            ->count(20)
            ->hasStations(3) // magic relationship method!
            ->create();
    }
}
