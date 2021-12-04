<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
