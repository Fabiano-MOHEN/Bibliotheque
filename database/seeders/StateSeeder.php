<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::query()->create(["name" => "Neuf"]);
        State::query()->create(["name" => "Excellent"]);
        State::query()->create(["name" => "Moyen"]);
    }
}
