<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [RegisterController::class,'login'])->name('login');
Route::get('/register', [RegisterController::class,'register'])->name('register');
Route::post('/register-user', [UserController::class,'registerUser'])->name('register-user');

Route::post('/login-user', [UserController::class,'loginUser'])->name('login-user');
Route::post('/logout', [UserController::class,'logoutUser'])->name('logout');


Route::get('/profile', [RegisterController::class,'profile'])->name('profile');

Route::get('/chat', [ChatController::class,'index'])->name('chat');

