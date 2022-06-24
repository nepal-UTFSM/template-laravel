<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

Route::get('users/me', [UserController::class, 'me'])->name('users.me');
Route::resource('users', UserController::class);
