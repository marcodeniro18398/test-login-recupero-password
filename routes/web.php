<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage')->middleware('verified');
// rotte profilo con user controller 
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');