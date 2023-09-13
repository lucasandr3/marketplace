<?php

namespace Database\Seeders;

use App\Models\Process;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplies = [
            [
                'product_id' => 1,
                'number' => '001/2023',
                'homologation_date' => fake()->dateTime(),
                'organ' => 'Araguari - MG',
                'location' => 'http://processo.com'
            ],
            [
                'product_id' => 2,
                'number' => '039/2023',
                'homologation_date' => fake()->dateTime(),
                'organ' => 'São João Del Rei - MG',
                'location' => 'http://processo.com'
            ],
            [
                'product_id' => 3,
                'number' => '045/2022',
                'homologation_date' => fake()->dateTime(),
                'organ' => 'Colatina - ES',
                'location' => 'http://processo.com'
            ],
            [
                'product_id' => 4,
                'number' => '457/21/2023',
                'homologation_date' => fake()->dateTime(),
                'organ' => 'Manaus - AM',
                'location' => 'http://processo.com'
            ],
            [
                'product_id' => 5,
                'number' => '300/2023',
                'homologation_date' => fake()->dateTime(),
                'organ' => 'Teresina - PI',
                'location' => 'http://processo.com'
            ],
            [
                'product_id' => 6,
                'number' => '756/2023',
                'homologation_date' => fake()->dateTime(),
                'organ' => 'Rio de Janeiro - RJ',
                'location' => 'http://processo.com'
            ],
            [
                'product_id' => 7,
                'number' => '56/2023',
                'homologation_date' => fake()->dateTime(),
                'organ' => 'Jaciara - MT',
                'location' => 'http://processo.com'
            ],
            [
                'product_id' => 8,
                'number' => '1245/2023',
                'homologation_date' => fake()->dateTime(),
                'organ' => 'Juazeiro do Norte - CE',
                'location' => 'http://processo.com'
            ],
            [
                'product_id' => 9,
                'number' => '55/2023',
                'homologation_date' => fake()->dateTime(),
                'organ' => 'Campina Grande - PB',
                'location' => 'http://processo.com'
            ],
            [
                'product_id' => 10,
                'number' => '65/2023',
                'homologation_date' => fake()->dateTime(),
                'organ' => 'Goiânia - GO',
                'location' => 'http://processo.com'
            ],
        ];

        for ($i = 0; $i < 10; $i++) {
            Process::insert($supplies[$i]);
        }
    }
}
