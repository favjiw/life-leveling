<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserChallenge;
use App\Models\Challenge;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserChallengesController extends Controller
{
    public function index()
    {
        $userId = 1; // Mengambil ID pengguna yang sedang login

        // Update status 'pending' ke 'failed' jika completed_at masih NULL dan sudah melewati 1 hari
        UserChallenge::where('user_id', $userId)
            ->where('status', 'pending')
            ->whereNull('completed_at')
            ->where('created_at', '<', Carbon::today())
            ->update(['status' => 'failed']);

        // Periksa apakah user sudah memiliki challenge untuk hari ini
        $todayChallenges = UserChallenge::where('user_id', $userId)
            ->whereDate('created_at', Carbon::today())
            ->count();

        // Jika user belum memiliki challenge untuk hari ini
        if ($todayChallenges == 0) {
            $randomChallenges = Challenge::inRandomOrder()->take(5)->get(); // Ambil 5 tantangan acak

            foreach ($randomChallenges as $challenge) {
                UserChallenge::create([
                    'user_id' => $userId,
                    'challenge_id' => $challenge->id,
                    'status' => 'pending',
                    'completed_at' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }

        // Mengambil semua tantangan pengguna untuk ditampilkan
        $userChallenges = UserChallenge::where('user_challenges.user_id', $userId)
            ->join('challenges', 'user_challenges.challenge_id', '=', 'challenges.id')
            ->select('user_challenges.*', 'challenges.title', 'challenges.points')
            ->get();

        return view('challenges.index', compact('userChallenges'));
    }
}
