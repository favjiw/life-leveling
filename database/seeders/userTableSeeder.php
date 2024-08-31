<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'jiwa',
                'email' => 'jiwa@gmail.com',
                'password' => hash::make('j12345'),
                'xp' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
