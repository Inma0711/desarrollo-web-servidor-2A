<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date' => '2024-01-18',
                'price' => 22,
                'train_id' => 1,
                'ticket_type_id' => 1
            ],
            [
                'date' => '2024-01-19',
                'price' => 20,
                'train_id' => 2,
                'ticket_type_id' => 2
            ],
            [
                'date' => '2024-01-20',
                'price' => 18,
                'train_id' => 3,
                'ticket_type_id' => 3
            ]
        ]);
    }
}
