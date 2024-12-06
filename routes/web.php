<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [RegisterController::class,'login'])->name('login');
Route::get('/register', [RegisterController::class,'register'])->name('register');
Route::get('/profile', [RegisterController::class,'profile'])->name('profile');

Route::get('/chat', [ChatController::class,'profile'])->name('chat');

