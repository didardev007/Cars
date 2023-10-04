<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BrandSeeder::class,
            ColorSeeder::class,
            LocationSeeder::class,
            YearSeeder::class,
        ]);

        \App\Models\Car::factory(100)->create();
    }
}
