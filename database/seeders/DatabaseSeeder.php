<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserTableSeeder::class,
            ThemeSeed::class,
            StoreTableSeeder::class,
            CategoryTableSeeder::class,
            DepartmentSeeder::class,
            SubDivisionSeeder::class,
            BrandSeeder::class,
            ProductTableSeeder::class,
            ProductPhotoSeeder::class,
            CategoryProductSeeder::class,
            BrandProductSeeder::class,
            ProcessSeeder::class,
            SupplySeeder::class
        ]);
    }
}
