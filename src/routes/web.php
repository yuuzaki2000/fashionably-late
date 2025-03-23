<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);

Route::get('/admin', [ContactController::class, 'admin']);
Route::post('/categories', [CategoryController::class, 'store']);

Route::post('/thanks', [ContactController::class, 'store']);

Route::post('/admin', [ContactController::class, 'search']);



