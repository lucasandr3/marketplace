<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Department;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubDivision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 40; $i++) {
            SubDivision::insert([
                'department_id' => $i + 1,
                'category_id' => $i + 1,
                'name_division' => fake()->name(),
                'slug' => fake()->slug(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
