<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artistas')->insert([
        [
            'nombre_artista' => 'David Bisbal',
            'genero_artista' => 'Hombre'
        ],
        [
            'nombre_artista' => 'David Bustamante',
            'genero_artista' => 'Hombre'
        ],
        [
            'nombre_artista' => 'Nerea Rodriguez',
            'genero_artista' => 'Mujer'
        ]
        ]);
    }
}
