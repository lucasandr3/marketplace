<?php

namespace Database\Seeders;

use App\Models\Supply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplies = [
            [
                'product_id' => 1,
                'name' => 'Jéssica e Diogo Padaria ME',
                'document' => '47.838.340/0001-50',
                'city' => 'Itapira - SP',
                'location' => 'http://fornecedor.com'
            ],
            [
                'product_id' => 2,
                'name' => 'Ryan e Yuri Ferragens ME',
                'document' => '89.130.945/0001-31',
                'city' => 'São João Del Rei - MG',
                'location' => 'http://fornecedor.com'
            ],
            [
                'product_id' => 3,
                'name' => 'Raimundo e Sarah Esportes ME',
                'document' => '83.798.224/0001-18',
                'city' => 'Colatina - ES',
                'location' => 'http://fornecedor.com'
            ],
            [
                'product_id' => 4,
                'name' => 'Heloisa e Marina Eletrônica ME',
                'document' => '53.965.866/0001-01',
                'city' => 'Manaus - AM',
                'location' => 'http://fornecedor.com'
            ],
            [
                'product_id' => 5,
                'name' => 'Sarah e Jaqueline Transportes ME',
                'document' => '68.497.174/0001-45',
                'city' => 'Teresina - PI',
                'location' => 'http://fornecedor.com'
            ],
            [
                'product_id' => 6,
                'name' => 'Tânia e Laís Locações de Automóveis Ltda',
                'document' => '94.479.127/0001-89',
                'city' => 'Rio de Janeiro - RJ',
                'location' => 'http://fornecedor.com'
            ],
            [
                'product_id' => 7,
                'name' => 'Yago e Bruna Entulhos ME',
                'document' => '80.698.717/0001-98',
                'city' => 'Jaciara - MT',
                'location' => 'http://fornecedor.com'
            ],
            [
                'product_id' => 8,
                'name' => 'Cecília e Rayssa Telecomunicações Ltda',
                'document' => '96.121.877/0001-00',
                'city' => 'Juazeiro do Norte - CE',
                'location' => 'http://fornecedor.com'
            ],
            [
                'product_id' => 9,
                'name' => 'Fernanda e Eduarda Informática ME',
                'document' => '06.520.367/0001-12',
                'city' => 'Campina Grande - PB',
                'location' => 'http://fornecedor.com'
            ],
            [
                'product_id' => 10,
                'name' => 'Gael e Isabelly Vidros Ltda',
                'document' => '72.169.400/0001-36',
                'city' => 'Goiânia - GO',
                'location' => 'http://fornecedor.com'
            ],
        ];

        for ($i = 0; $i < 10; $i++) {
            Supply::insert($supplies[$i]);
        }
    }
}
