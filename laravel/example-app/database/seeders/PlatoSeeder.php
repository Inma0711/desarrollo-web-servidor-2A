<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('platos')->insert([
        [
            'nombre' => 'Pulpo',
            'precio' => 8,
            'tipo_plato_id' => 1,
        ],
        [
            'nombre' => 'Calamares',
            'precio' => 7,
            'tipo_plato_id' => 3,
        ],
    ]);
       
    }
}
