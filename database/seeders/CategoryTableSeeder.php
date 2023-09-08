<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        \App\Models\Category::factory(40)->create();
        for ($i = 0; $i < 40; $i++) {
            Category::insert([
                'name_category' => fake()->name(),
                'slug' => fake()->slug()
            ]);
        }
    }
}
