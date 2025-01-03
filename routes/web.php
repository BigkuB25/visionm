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

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::get('/solution', [App\Http\Controllers\MainController::class, 'solution']);
Route::get('/service', [App\Http\Controllers\MainController::class, 'service']);
Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact']);
Route::get('/about', [App\Http\Controllers\MainController::class, 'about']);
Route::get('/lang/{locale}', [App\Http\Controllers\MainController::class, 'lang']);
