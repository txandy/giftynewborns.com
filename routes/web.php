<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');


Route::middleware('guest')->group(function () {
    Route::get('register', \App\Http\Controllers\Auth\RegistrationController::class)->name('register');
    Route::post('register', \App\Http\Controllers\Auth\StoreRegistrationController::class)->name('register.store');
});
