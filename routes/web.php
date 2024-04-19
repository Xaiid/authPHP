<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', function () {
        return view('welcome');
    });

    // API
    Route::get('/member', [MemberController::class, 'index']);
    Route::post('/member', [MemberController::class, 'create']);

    
});

require __DIR__.'/auth.php';
