<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BebidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bebidas')->insert([
            [
                'nombre' => 'Coca-Cola',
                'precio' => 2,
                'tipo' => 'Refresco'
            ],
            [
                'nombre' => 'Fanta',
                'precio' => 2,
                'tipo' => 'Refresco'
            ],
        ]);
    }
}
