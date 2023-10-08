<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ShowController;


use App\Http\Controllers\ActorsController;
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

Route::get('/', [MoviesController::class,'index']);
Route::get('movies', [MoviesController::class,'index']);

Route::get('movies/{movie:id}', [MoviesController::class, 'show']);

Route::get('shows', [ShowController::class,'index']);
Route::get('shows/{show:id}', [ShowController::class, 'show']);
Route::get('Actors', [ActorsController::class,'index']);

Route::get('Actors/page/{page?}', [ActorsController::class,'index']);

Route::get('Actors/Actor/{id}', [ActorsController::class,'show']);