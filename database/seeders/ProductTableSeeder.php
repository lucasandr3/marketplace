<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPhotos;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        $products = [
            [
                'store_id' => 1,
                'name' => 'VAIO Fit Laptop - Windows 8 SVF14322CXW',
                'description' => fake()->sentence(),
                'body' => fake()->paragraph(5, true),
                'price' => fake()->randomFloat(2, 1, 5000),
                'slug' => 'vaio-fit-laptop-windows-8-svf14322cxw',
                'in_stock' => fake()->randomDigitNotZero(),
                'sale' => fake()->boolean(),
                'bestseller' => fake()->boolean(),
                'new' => fake()->boolean()
            ],
            [
                'store_id' => 2,
                'name' => 'CPU intel core i5',
                'description' => fake()->sentence(),
                'body' => fake()->paragraph(5, true),
                'price' => fake()->randomFloat(2, 1, 5000),
                'slug' => 'cpu-intel-core-i5',
                'in_stock' => fake()->randomDigitNotZero(),
                'sale' => fake()->boolean(),
                'bestseller' => fake()->boolean(),
                'new' => fake()->boolean()
            ],
            [
                'store_id' => 3,
                'name' => 'HP Scanner 2910P',
                'description' => fake()->sentence(),
                'body' => fake()->paragraph(5, true),
                'price' => fake()->randomFloat(2, 1, 5000),
                'slug' => 'hp-scanner-2910p',
                'in_stock' => fake()->randomDigitNotZero(),
                'sale' => fake()->boolean(),
                'bestseller' => fake()->boolean(),
                'new' => fake()->boolean()
            ],
            [
                'store_id' => 4,
                'name' => 'Galaxy Tab GT-P5210 16GB',
                'description' => fake()->sentence(),
                'body' => fake()->paragraph(5, true),
                'price' => fake()->randomFloat(2, 1, 5000),
                'slug' => 'galaxy-tab-gt-p5210-16gb',
                'in_stock' => fake()->randomDigitNotZero(),
                'sale' => fake()->boolean(),
                'bestseller' => fake()->boolean(),
                'new' => fake()->boolean()
            ],
            [
                'store_id' => 5,
                'name' => 'iPod touch 5th generation 64GB',
                'description' => fake()->sentence(),
                'body' => fake()->paragraph(5, true),
                'price' => fake()->randomFloat(2, 1, 5000),
                'slug' => 'ipod-touch-5th-generation-64bg',
                'in_stock' => fake()->randomDigitNotZero(),
                'sale' => fake()->boolean(),
                'bestseller' => fake()->boolean(),
                'new' => fake()->boolean()
            ],
            [
                'store_id' => 6,
                'name' => 'Monitor full HD multi-Touch',
                'description' => fake()->sentence(),
                'body' => fake()->paragraph(5, true),
                'price' => fake()->randomFloat(2, 1, 5000),
                'slug' => 'monitor-full-hd-multi-touch',
                'in_stock' => fake()->randomDigitNotZero(),
                'sale' => fake()->boolean(),
                'bestseller' => fake()->boolean(),
                'new' => fake()->boolean()
            ],
            [
                'store_id' => 7,
                'name' => 'cinemizer OLED 3D virtual reality TV Video',
                'description' => fake()->sentence(),
                'body' => fake()->paragraph(5, true),
                'price' => fake()->randomFloat(2, 1, 5000),
                'slug' => 'cinemizer-oled-3d-virtual-reality-tv-video',
                'in_stock' => fake()->randomDigitNotZero(),
                'sale' => fake()->boolean(),
                'bestseller' => fake()->boolean(),
                'new' => fake()->boolean()
            ],
            [
                'store_id' => 8,
                'name' => 'kardon BDS 7772/120 integrated 3D',
                'description' => fake()->sentence(),
                'body' => fake()->paragraph(5, true),
                'price' => fake()->randomFloat(2, 1, 5000),
                'slug' => 'kardon-bds-7772/120-integrated-3d',
                'in_stock' => fake()->randomDigitNotZero(),
                'sale' => fake()->boolean(),
                'bestseller' => fake()->boolean(),
                'new' => fake()->boolean()
            ],
            [
                'store_id' => 9,
                'name' => 'LC-70UD1U 70 class aquos 4K ultra HD',
                'description' => fake()->sentence(),
                'body' => fake()->paragraph(5, true),
                'price' => fake()->randomFloat(2, 1, 5000),
                'slug' => 'lc-70ud1u-70-class-aquos-4k-ultra-hd',
                'in_stock' => fake()->randomDigitNotZero(),
                'sale' => fake()->boolean(),
                'bestseller' => fake()->boolean(),
                'new' => fake()->boolean()
            ],
            [
                'store_id' => 10,
                'name' => 'PowerShot elph 16MP digital camera',
                'description' => fake()->sentence(),
                'body' => fake()->paragraph(5, true),
                'price' => fake()->randomFloat(2, 1, 5000),
                'slug' => 'powershot-elph-16mp-digital-camera',
                'in_stock' => fake()->randomDigitNotZero(),
                'sale' => fake()->boolean(),
                'bestseller' => fake()->boolean(),
                'new' => fake()->boolean()
            ]
        ];

        for ($i = 0; $i < 10; $i++) {
            Product::insert($products[$i]);
        }

//        foreach ($categories as $category) {
//            $category->products()->save(Product::factory()->make());
//        }
    }
}
