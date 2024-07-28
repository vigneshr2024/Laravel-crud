<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordResetTokenController;
use App\Http\Controllers\SessionController;

Route::resource('users', UserController::class);
Route::resource('password_reset_tokens', PasswordResetTokenController::class);
Route::resource('sessions', SessionController::class);
