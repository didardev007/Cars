<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            'BMW',
            'Audi',
            'Toyota',
            'Nissan',
            'Mercedes-Benz',
            'Kia',
            'Hyundai',
            'Lexus',
            'Mini',
            'Opel',
            'Lada',
        ];

        foreach ($brands as $brand)
            $obj = new Brand();
            $obj->name = $brand;
            $obj->save();
    }
}
