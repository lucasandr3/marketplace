<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('category_product')->insert([
                'product_id' => $i + 1,
                'category_id' => $i + 1,
                'department_id' => $i + 1,
                'sub_division_id' => $i + 1,
            ]);
        }
    }
}
