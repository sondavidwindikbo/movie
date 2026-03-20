<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'doejon@gmail.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@gmail.com',
                'password' => Hash::make('password456')
            ],
            [
                'name' => 'Michael Lee',
                'email' => 'michael@gmail.com',
                'password' => Hash::make('password789')
            ]
        ];

        DB::table('users')->insert($users);
    }
}