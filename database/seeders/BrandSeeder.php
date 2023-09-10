<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        \App\Models\Brand::factory(10)->create();
        $brands = [
            ['name_brand' => 'Samsung', 'slug' => 'samsung'],
            ['name_brand' => 'LG', 'slug' => 'lg'],
            ['name_brand' => 'Philips', 'slug' => 'philips'],
            ['name_brand' => 'Apple', 'slug' => 'apple'],
            ['name_brand' => 'Dell', 'slug' => 'dell'],
            ['name_brand' => 'Toshiba', 'slug' => 'toshiba'],
            ['name_brand' => 'Bic', 'slug' => 'bic'],
            ['name_brand' => 'Carter', 'slug' => 'carter'],
            ['name_brand' => 'Asus', 'slug' => 'asus'],
            ['name_brand' => 'Kingstom', 'slug' => 'kingstom'],
        ];
        for ($i = 0; $i < 10; $i++) {
            Brand::insert($brands[$i]);
        }
    }
}
