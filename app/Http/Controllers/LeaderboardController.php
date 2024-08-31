<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect(route('login'))->with("error", "Anda harus login terlebih dahulu.");
        }
        $users = User::orderBy('xp', 'desc')->get();

        return view('leaderboard.index', compact('users'));
    }
}
