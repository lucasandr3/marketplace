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
        $categories = [
            ['name_category' => 'Notebooks', 'slug' => 'notebooks'],
            ['name_category' => 'Computadores', 'slug' => 'computadores'],
            ['name_category' => 'Cameras', 'slug' => 'cameras'],
            ['name_category' => 'Eletrônicos', 'slug' => 'eletronicos'],
            ['name_category' => 'Audio', 'slug' => 'audio'],
            ['name_category' => 'Telefones', 'slug' => 'telefones'],
            ['name_category' => 'Acessórios', 'slug' => 'acessorios'],
            ['name_category' => 'Administrativo', 'slug' => 'administrativo'],
            ['name_category' => 'Agrícola', 'slug' => 'agricola'],
            ['name_category' => 'Automotivo', 'slug' => 'automotivo'],

        ];
        for ($i = 0; $i < 10; $i++) {
            Category::insert($categories[$i]);
        }
    }
}
