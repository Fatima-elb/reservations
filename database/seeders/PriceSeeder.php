<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'type' => 'normal',
                'price' => 14.90,
                'description' => 'Ancien tarif normal',
                'start_Date' => '2020-01-01',
                'end_Date' => '2023-12-31', 
            ],

            [
                'type' => 'normal',
                'price' => 15.90,
                'description' => 'Prix normal actuel',
                'start_Date' => '2024-01-01',
                'end_Date' => '9999-12-31', 
            ],

            [
                'type' => 'enfants',
                'price' => 7.90,
                'description' => 'Tarif enfant < 12 ans',
                'start_Date' => '2020-01-01',
                'end_Date' => '9999-12-31', 
            ],
        ];

        DB::table('prices')->truncate();
        DB::table('prices')->insert($data);
    }
}
