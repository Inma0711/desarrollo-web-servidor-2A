<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'Talgo',
                'passengers' => 100,
                'year' => 2020,
                'train_type_id' => 1
            ],
            [
                'name' => 'Trenhotel',
                'passengers' => 50,
                'year' => 2005,
                'train_type_id' => 2
            ],
            [
                'name' => 'Altaria',
                'passengers' => 136,
                'year' => 2024,
                'train_type_id' => 3
            ],
        ]);
    }
}
