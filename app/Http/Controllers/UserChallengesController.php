<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Challenge;
use App\Models\UserChallenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserChallengesController extends Controller
{
    public function index()
    {
        $userId = 1; // Mendapatkan ID pengguna yang sedang login
        $today = Carbon::today(); // Mendapatkan tanggal hari ini
        
        // Mengambil tantangan pengguna untuk hari ini
        $userChallengesToday = UserChallenge::where('user_id', $userId)
            ->whereDate('created_at', $today)
            ->where('status', '!=', 'failed')
            ->get();

        // Jika tidak ada tantangan hari ini, tambahkan 5 tantangan baru secara acak
        if ($userChallengesToday->isEmpty()) {
            $challenges = Challenge::inRandomOrder()->limit(5)->get();
            
            foreach ($challenges as $challenge) {
                UserChallenge::create([
                    'user_id' => $userId,
                    'challenge_id' => $challenge->id,
                    'status' => 'pending',
                    'completed_at' => NULL,
                    'created_at' => $today,
                    'updated_at' => now(),
                ]);
            }

            // Refresh tantangan pengguna hari ini setelah penambahan
            $userChallengesToday = UserChallenge::where('user_id', $userId)
                ->whereDate('created_at', $today)
                ->where('status', '!=', 'failed')
                ->get();
        }

        // Mengubah status ke 'failed' jika 'completed_at' masih null dan sudah melewati satu hari
        UserChallenge::where('user_id', $userId)
            ->where('status', 'pending')
            ->where('completed_at', null)
            ->whereDate('created_at', '<', $today)
            ->update(['status' => 'failed']);

        return view('challenges.index', compact('userChallengesToday'));
    }

    public function complete(Request $request)
    {
        // Mendapatkan user yang sedang login
        $userId = 1;

        // Mencari tantangan berdasarkan user_id dan status "pending"
        $userChallenge = UserChallenge::where('user_id', $userId)
                                       ->where('status', 'pending')
                                       ->first();

        if ($userChallenge) {
            // Mengubah status menjadi 'completed' dan mengatur completed_at ke waktu sekarang
            $userChallenge->status = 'completed';
            $userChallenge->completed_at = now();
            $userChallenge->save();

            $points = $userChallenge->challenge->points;

            // Tambahkan points ke xp user
            $user = User::find($userId);
            $user->xp += $points;
            $user->save();

            return redirect()->route('challenges.index')->with('success', 'Tantangan berhasil diselesaikan!');
        }

        return redirect()->route('challenges.index')->with('error', 'Tidak ada tantangan yang bisa diselesaikan.');
    }
}
