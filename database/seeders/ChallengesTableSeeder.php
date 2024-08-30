<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChallengesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('challenges')->insert([
            [
                'title' => 'Lari 5 Km',
                'description' => 'Lakukan lari sejauh 5 kilometer tanpa henti.',
                'difficulty_level' => 'medium',
                'points' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Push Up 100 Repetisi',
                'description' => 'Lakukan push up sebanyak 100 repetisi dalam satu sesi latihan.',
                'difficulty_level' => 'hard',
                'points' => 75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Sit Up 30 Repetisi',
                'description' => 'Lakukan sit up sebanyak 30 repetisi dalam satu sesi latihan.',
                'difficulty_level' => 'easy',
                'points' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Bersepeda 10 Km',
                'description' => 'Nikmati perjalanan dengan bersepeda sejauh 10 kilometer.',
                'difficulty_level' => 'medium',
                'points' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Meditasi 30 Menit',
                'description' => 'Luangkan waktu 30 menit untuk meditasi dan relaksasi.',
                'difficulty_level' => 'easy',
                'points' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Minum 2 Liter Air',
                'description' => 'Minum setidaknya 2 liter air selama satu hari.',
                'difficulty_level' => 'easy',
                'points' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Yoga 1 Jam',
                'description' => 'Lakukan yoga selama 1 jam untuk menjaga fleksibilitas tubuh.',
                'difficulty_level' => 'medium',
                'points' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Pull Up 20 Repetisi',
                'description' => 'Lakukan pull up sebanyak 20 repetisi dalam satu sesi latihan.',
                'difficulty_level' => 'hard',
                'points' => 80,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Skipping 200 Kali',
                'description' => 'Lakukan skipping atau lompat tali sebanyak 200 kali.',
                'difficulty_level' => 'medium',
                'points' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Plank 5 Menit',
                'description' => 'Tahan posisi plank selama 5 menit tanpa henti.',
                'difficulty_level' => 'hard',
                'points' => 70,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
