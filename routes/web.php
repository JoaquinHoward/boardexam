<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NurseController;
use App\Http\Controllers\PharmacyController;

Route::view('/', 'welcome');

Route::view('/nurse', 'nurse.nurse');
Route::view('/pharmacy', 'pharmacy.pharmacy');

Route::get('/nurse/review', [NurseController::class, 'index']);
Route::get('/pharmacy/review', [PharmacyController::class, 'index']);

