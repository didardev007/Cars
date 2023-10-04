<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    public function run(): void
    {
        $years = range(2010, 2023);

        foreach ($years as $year)
            $obj = new Year();
            $obj->name = $year;
            $obj->save();
    }
}
