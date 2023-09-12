<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\RegisterController;

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

Route::get('/topic/create', [TopicController::class, 'create']);
Route::post('/topic/save', [TopicController::class, 'save']);
Route::get('/', [TopicController::class, 'index']);
Route::get('/topic/index', [TopicController::class, 'index']);
Route::get('/topic/detail/{id}', [TopicController::class, 'detail']);
Route::post('/reply/save', [TopicController::class, 'replySave']);
