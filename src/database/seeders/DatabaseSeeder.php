<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Club;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        $this->call([
            ClubSeeder::class,
            UsersSeeder::class,
            ContentsSeeder::class,
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            ClubSeeder::class,
            UserSeeder::class,
            ImageSeeder::class,
>>>>>>> 19f22c236302587086dce6aa80241537e2977c4d
        ]);
    }
}
