<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cancions')->insert([
            [
                'titulo_cancion' => 'Ave Maria',
                'duracion' => 140,
                'genero_cancion' => 'Balada latina',
                'artista_id' => 1
            ],
            [
                'titulo_cancion' => 'Perdona si te olvido',
                'duracion' => 132,
                'genero_cancion' => 'Balada latina',
                'artista_id' => 2
            ],
            [
                'titulo_cancion' => 'Lady Madrid',
                'duracion' => 120,
                'genero_cancion' => 'Balada',
                'artista_id' => 3
            ]
        ]);
    }
}
