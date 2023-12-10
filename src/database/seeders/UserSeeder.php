<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'User1',
                'email' => 'example1@com',
                'password' => Hash::make('password'),
                'role' => 'admin2',
                'club_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'User2',
                'email' => 'example2@com',
                'password' => Hash::make('password'),
                'role' => 'admin2',
                'club_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'User3',
                'email' => 'example3@com',
                'password' => Hash::make('password'),
                'role' => 'admin2',
                'club_id' => 2
            ],
            [
                'id' => 4,
                'name' => 'User4',
                'email' => 'example4@com',
                'password' => Hash::make('password'),
                'role' => 'admin1',
                'club_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'User5',
                'email' => 'example5@com',
                'password' => Hash::make('password'),
                'role' => 'admin1',
                'club_id' => 1
            ],
            [
                'id' => 6,
                'name' => 'User6',
                'email' => 'example6@com',
                'password' => Hash::make('password'),
                'role' => 'admin1',
                'club_id' => 2
            ],
            [
                'id' => 7,
                'name' => 'User7',
                'email' => 'example7@com',
                'password' => Hash::make('password'),
                'role' => 'admin1',
                'club_id' => 3
            ]
        ]);
    }
}
