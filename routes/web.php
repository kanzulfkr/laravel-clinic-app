<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('dashboard');
    })->name('home');

    Route::resource('users', UserController::class);
    //doctors
    Route::resource('doctors', DoctorController::class);
});
