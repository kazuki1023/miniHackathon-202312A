<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('contents')->insert([
            [
                'instagram' => 'instagram_user_1',
                'twitter' => 'twitter_user_1',
                'line' => 'line_user_1',
                'male' => 1,
                'female' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'instagram' => 'instagram_user_2',
                'twitter' => 'twitter_user_2',
                'line' => 'line_user_2',
                'male' => 3,
                'female' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'instagram' => 'instagram_user_3',
                'twitter' => 'twitter_user_3',
                'line' => 'line_user_3',
                'male' => 2,
                'female' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        \DB::table('details')->insert([
            [
                'place' => 'セントラルテニスコート',
                'time' => '週2回 10:00 - 12:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'place' => 'シティパークテニスクラブ',
                'time' => '週2回 11:00 - 12:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'place' => 'グリーンバレーテニスセンター',
                'time' => '週3回 17:00 - 19:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
        \DB::table('faculties')->insert([
            [
                'rikou' => 10,
                'kei' => 20,
                'shou' => 30,
                'bun' => 40,
                'hou' => 50,
                'sfc' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rikou' => 15,
                'kei' => 25,
                'shou' => 35,
                'bun' => 45,
                'hou' => 55,
                'sfc' => 65,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rikou' => 20,
                'kei' => 30,
                'shou' => 40,
                'bun' => 50,
                'hou' => 60,
                'sfc' => 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        \DB::table('images')->insert([
            [
                'first' => 'first_value_1',
                'second' => 'second_value_1',
                'third' => 'third_value_1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first' => 'first_value_2',
                'second' => 'second_value_2',
                'third' => 'third_value_2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first' => 'first_value_3',
                'second' => 'second_value_3',
                'third' => 'third_value_3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
