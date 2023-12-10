<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
>>>>>>> 19f22c236302587086dce6aa80241537e2977c4d

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
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
=======
        DB::table('clubs')->insert([
            [
                'id' => 1,
                'name' => 'Club1',
                'frequency' => '週に1回',
                'place' => '東京都',
                'gender_ratio_array' => json_encode([28,42]),
                'department_ratio_array' => json_encode([5,5,10,10,20,20]),
                'instagram_url' => 'https://www.instagram.com/',
                'twitter_url' => 'https://twitter.com/',
                'line_url' => 'https://line.me/ja/'
            ],
            [
                'id' => 2,
                'name' => 'Club2',
                'frequency' => '週に2回',
                'place' => '河川敷',
                'gender_ratio_array' => json_encode([28,42]),
                'department_ratio_array' => json_encode([10,0,10,15,15,20]),
                'instagram_url' => 'https://www.instagram.com/',
                'twitter_url' => 'https://twitter.com/',
                'line_url' => 'https://line.me/ja/'
            ],
            [
                'id' => 3,
                'name' => 'Club3',
                'frequency' => '週に2回',
                'place' => '多摩川',
                'gender_ratio_array' => json_encode([38,32]),
                'department_ratio_array' => json_encode([5,5,5,15,10,30]),
                'instagram_url' => 'https://www.instagram.com/',
                'twitter_url' => 'https://twitter.com/',
                'line_url' => 'https://line.me/ja/'
            ]
>>>>>>> 19f22c236302587086dce6aa80241537e2977c4d
        ]);
    }
}
