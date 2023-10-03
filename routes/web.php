<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\shows;

use App\Http\Controllers\Actors;
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

Route::get('/', [Home::class,'index']);
Route::get('movies', [MoviesController::class,'index']);

Route::get('movies/{movie:id}', [MoviesController::class, 'show']);

Route::get('shows', [shows::class,'index']);
Route::get('shows/{show:id}', [shows::class, 'show']);
Route::get('Actors', [Actors::class,'index']);