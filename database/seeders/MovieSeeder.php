<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies =[
        ['name' => 'Inception', 'slug' => 'inception'],
        ['name' => 'Interstellar', 'slug' => 'interstellar'],
        ['name' => 'The Dark Knight', 'slug' => 'the-dark-knight'],
        ['name' => 'Avengers: Endgame', 'slug' => 'avengers-endgame'],
        ['name' => 'Parasite', 'slug' => 'parasite'],
        ];

        DB::table('movies')->insert(array_map(function($movie) {
            return array_merge($movie,[
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }, $movies));
    }
}
