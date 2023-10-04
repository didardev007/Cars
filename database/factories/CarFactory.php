<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    public function definition(): array
    {
        $brand = DB::table('brands')->inRandomOrder()->first();
        $location = DB::table('locations')->inRandomOrder()->first();
        $year = DB::table('years')->inRandomOrder()->first();
        $color = DB::table('colors')->inRandomOrder()->first();
        return [
            'brand_id' => $brand->id,
            'location_id' => $location->id,
            'year_id' => $year->id,
            'color_id' => $color->id,
            'swap' => fake()->boolean(5),
            'price' => rand(50, 500),
            'phone' => fake()->phoneNumber,
        ];
    }
}
