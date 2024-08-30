<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChallengeController extends Controller
{
    public function index()
    {
        DB::statement("SET SQL_MODE=''");
        $challenge = DB::table('challenges')
                ->select('challenges.id', 'challenges.title', 'challenges.description', 'challenges.difficulty_level', 'challenges.created_at', 'challenges.updated_at')
                ->get();
        return view('challenges.challenges', compact('challenge'));
    }
}
