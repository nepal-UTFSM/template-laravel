<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('login', 'auth.login')->name("auth.login");
Route::post('login', [AuthController::class, 'login'])->middleware('web')->name("auth.authenticate");
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth')->name("auth.logout");
