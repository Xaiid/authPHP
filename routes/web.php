<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // API
    Route::get('/member', [MemberController::class, 'index']);
    Route::get('/member', [MemberController::class, 'create'])->name('member.create');
    Route::post('/member', [MemberController::class, 'store'])->name('member.store');

    
});

require __DIR__.'/auth.php';
