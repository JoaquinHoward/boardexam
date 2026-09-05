<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::view('/', 'welcome');

Route::view('/register', 'register')->name('register.index');
Route::view('/login', 'login')->name('login.index');