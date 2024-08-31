<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserChallenge;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $userId = 2;

        // Menghitung total tantangan hari ini yang berstatus pending
        $todayPendingCount = UserChallenge::where('user_id', $userId)
                            ->where('status', 'pending')
                            ->whereDate('created_at', now()->toDateString())
                            ->count();

        // Menghitung total tantangan yang diselesaikan minggu ini
        $challengesCompletedThisWeek = UserChallenge::where('user_id', $userId)
                                    ->where('status', 'completed')
                                    ->whereBetween('completed_at', [now()->startOfWeek(), now()->endOfWeek()])
                                    ->count();

        // Mengambil total XP dari user yang sedang login
        $totalXp = User::where('id', $userId)->value('xp');

        return view('home.home', compact('todayPendingCount', 'challengesCompletedThisWeek', 'totalXp'));
    }
}
