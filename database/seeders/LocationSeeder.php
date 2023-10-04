<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            'Asgabat',
            'Ahal',
            'Balkan',
            'Dasoguz',
            'Lebap',
            'Mary',
        ];

        foreach ($locations as $location)
            $obj = new Location();
            $obj->name = $location;
            $obj->save();
    }
}
