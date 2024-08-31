<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\UserChallengesController;
use App\Http\Controllers\HomeController;

Route::get('/challenges', [UserChallengesController::class, 'index'])->name('challenges.index');

Route::get('/home', [HomeController::class, 'index'])->name('home.home');
Route::post('/challenges/done', [UserChallengesController::class, 'complete']);

