<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        $departments = [
            ['category_id' => 1, 'name_department' => 'Peças', 'slug' => 'pecas'],
            ['category_id' => 2, 'name_department' => 'Telas', 'slug' => 'telas'],
            ['category_id' => 3, 'name_department' => 'Chave Philips', 'slug' => 'chave-philips'],
            ['category_id' => 4, 'name_department' => 'Processadores', 'slug' => 'processadores'],
            ['category_id' => 5, 'name_department' => 'Teclados', 'slug' => 'teclados'],
            ['category_id' => 6, 'name_department' => 'Motores', 'slug' => 'motores'],
            ['category_id' => 7, 'name_department' => 'Refil', 'slug' => 'refil'],
            ['category_id' => 8, 'name_department' => 'Pneus', 'slug' => 'pneus'],
            ['category_id' => 9, 'name_department' => 'Placas Mães', 'slug' => 'placas-maes'],
            ['category_id' => 10, 'name_department' => 'Memorias', 'slug' => 'memorias'],
        ];

        for ($i = 0; $i < 10; $i++) {
            Department::insert($departments[$i]);
        }

//        foreach ($categories as $key => $category) {
//            $category->departments()->save($departments[$key]);
//        }
    }
}
