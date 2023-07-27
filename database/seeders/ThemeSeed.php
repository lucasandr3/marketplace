<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            'user_id' => 1,
            'bg_logo' => 'skin1',
            'bg_header' => 'skin1',
            'bg_sidebar' => 'skin5'
        ]);
    }
}
