<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductPhotos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = Product::all();

        /*
         * 'image' => fake()->randomElement([
                    'public/assets/images/bomba1.png',
                    'public/assets/images/bomba2.png',
                    'public/assets/images/bomba3.png',
                    'public/assets/images/bomba4.png',
                    'public/assets/images/produto1.png',
                    'public/assets/images/produto2.png',
                    'public/assets/images/produto3.png',
                    'public/assets/images/produto4.png',
                    'public/assets/images/produto5.png',
                ]),
         */

        foreach ($produtos as $produto) {
            ProductPhotos::create([
                'product_id' => $produto->id,
                'image' => fake()->randomElement([
                    'stores/produtos/bomba1.png',
                    'stores/produtos/bomba2.png',
                    'stores/produtos/bomba3.png',
                    'stores/produtos/bomba4.png',
                    'stores/produtos/produto1.png',
                    'stores/produtos/produto2.png',
                    'stores/produtos/produto3.png',
                    'stores/produtos/produto4.png',
                    'stores/produtos/produto5.png',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
