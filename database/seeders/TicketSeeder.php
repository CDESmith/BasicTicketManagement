<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();
        DB::table('tickets')->insert([
            'requester' => $faker->firstNameFemale() . " " . $faker->lastName(),
            'followers' => null,
            'assignee' => null,
            'subject' => $faker->sentence(),
            'description' => $faker->paragraph(),
            'status' => 'new',
            'type' => 'incident',
            'priority' => 'low',
            'tags' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
