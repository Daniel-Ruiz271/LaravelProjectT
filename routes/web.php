<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PlayerDashboardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameMatchController;
use App\Http\Controllers\AdminBracketController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [LoginController::class, 'redirectAfterLogin'])
    ->middleware(['auth'])
    ->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('games', GameController::class);
    Route::resource('tournaments', TournamentController::class);
    Route::resource('players', PlayerController::class);
    Route::resource('matches', GameMatchController::class);
    
    Route::get('/admin/brackets', [AdminBracketController::class, 'index'])->name('admin.brackets.index');
    Route::get('/admin/brackets/{id}', [AdminBracketController::class, 'show'])->name('admin.brackets.show');

});

Route::middleware(['auth', 'role:jugador'])->group(function () {
   Route::get('/player/dashboard', [PlayerDashboardController::class, 'index'])->name('player.dashboard');
    
});



require __DIR__.'/auth.php';
