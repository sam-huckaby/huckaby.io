<?php

use App\Http\Controllers\GitHubController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('leaderboard', 'leaderboard')
    ->middleware(['auth'])
    ->name('leaderboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('redeem', [TagController::class, 'index'])
    ->middleware(['auth'])
    ->name('redeem');

Route::get('auth/github', [GitHubController::class, 'redirect'])->name('github.login');
Route::get('auth/github/callback', [GitHubController::class, 'callback']);

require __DIR__ . '/auth.php';
