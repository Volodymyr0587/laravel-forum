<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register/index', [RegisterController::class, 'index']);
Route::post('register/save', [RegisterController::class, 'save']);

Route::get('/login/index', [LoginController::class, 'index']);
Route::post('/login/checkErrors', [LoginController::class, 'checkErrors']);
Route::get('/logout', [LoginController::class, 'logout']);
