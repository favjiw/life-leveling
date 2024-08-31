<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthManager;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\UserChallengesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderboardController;

Route::get('/', [AuthManager::class, 'login']);

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');

//user challenges
Route::get('/challenges', [UserChallengesController::class, 'index'])->name('challenges.index');
Route::post('/challenges/done', [UserChallengesController::class, 'complete']);

//leaderboard
Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard');

