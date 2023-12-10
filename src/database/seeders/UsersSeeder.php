<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
                'name' => 'ユーザー1',
                'email' => 'admin1@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 1,
                'club_id' => 1,
            ],
            [
                'name' => 'ユーザー2',
                'email' => 'admin2@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 2,
                'club_id' => 1,
            ],
            [
                'name' => 'ユーザー3',
                'email' => 'user3@example.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 1,
                'club_id' => 2,
            ],
        ]);
        
    }
}
