<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'id' => 1,
                'club_id' => 1,
                'image_url' => 'image1.jpg'
            ],
            [
                'id' => 2,
                'club_id' => 1,
                'image_url' => 'image2.jpg'
            ],
            [
                'id' => 3,
                'club_id' => 1,
                'image_url' => 'image3.jpg'
            ],
            [
                'id' => 4,
                'club_id' => 2,
                'image_url' => 'image4.jpg'
            ],
            [
                'id' => 5,
                'club_id' => 2,
                'image_url' => 'image5.jpg'
            ],
            [
                'id' => 6,
                'club_id' => 2,
                'image_url' => 'image6.jpg'
            ],
            [
                'id' => 7,
                'club_id' => 3,
                'image_url' => 'image7.jpg'
            ],
            [
                'id' => 8,
                'club_id' => 3,
                'image_url' => 'image8.jpg'
            ]
        ]);
    }
}
