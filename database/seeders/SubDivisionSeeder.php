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
        $divisions = [
            ['department_id' => 1, 'category_id' => 1, 'name_division' => 'Adaptador', 'slug' => 'adaptador'],
            ['department_id' => 2, 'category_id' => 2, 'name_division' => '15 Polegadas', 'slug' => '15-polegadas'],
            ['department_id' => 3, 'category_id' => 3, 'name_division' => 'Chave 15', 'slug' => 'chave-15'],
            ['department_id' => 4, 'category_id' => 4, 'name_division' => 'AMD', 'slug' => 'amd'],
            ['department_id' => 5, 'category_id' => 5, 'name_division' => 'LogTech', 'slug' => 'logtech'],
            ['department_id' => 6, 'category_id' => 6, 'name_division' => 'Honda', 'slug' => 'honda'],
            ['department_id' => 7, 'category_id' => 7, 'name_division' => 'Tinta Azul', 'slug' => 'tinta-azul'],
            ['department_id' => 8, 'category_id' => 8, 'name_division' => 'Aro 16', 'slug' => 'aro-16'],
            ['department_id' => 9, 'category_id' => 9, 'name_division' => 'Socket 775', 'slug' => 'socket-775'],
            ['department_id' => 10, 'category_id' => 10, 'name_division' => '8GB', 'slug' => '8gb'],
        ];

        for ($i = 0; $i < 10; $i++) {
            SubDivision::insert($divisions[$i]);
        }
    }
}
