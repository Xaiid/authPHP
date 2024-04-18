<?php

use Illuminate\Support\Facades\Route;
use App\Models\Member;

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/members', function() { 
    return Member::all();
});
