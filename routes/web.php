<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\BookController::class, 'home']);

Route::get('/categories/{idCategory}', [\App\Http\Controllers\BookController::class, 'categoryView']);

Route::get('/contact', [\App\Http\Controllers\BookController::class, 'contact']);

Route::get('/details/{id}', [\App\Http\Controllers\BookController::class, 'details']);
