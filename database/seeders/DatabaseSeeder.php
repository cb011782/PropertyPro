<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Broker;
use App\Models\client;
use App\Models\Properties;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        User::factory(10)->create();
        Properties::factory(10)->create();
        Agent::factory(10)->create();
        Broker::factory(10)->create();
        Client::factory(10)->create();
    }
}
