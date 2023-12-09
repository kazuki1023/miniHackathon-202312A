<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('club')->insert([
            [
                'name' => 'tla',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'バロニー',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'エーデルロイテ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
