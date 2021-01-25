<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ChartsController;
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

Route::get('/', [HomeController::class, 'welcome'])->name('/');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);


Route::resource('player', PlayerController::class)->middleware('auth:sanctum');
Route::resource('game', GameController::class)->middleware('auth:sanctum');

/* Charts Routes*/
Route::get('/games_played_by_year', [ChartsController::class, 'gamesPlayedByYear']);
Route::get('/top_scores', [ChartsController::class, 'topScores']);
Route::get('/worst_scores', [ChartsController::class, 'worstScores']);
Route::get('/scores_by_year', [ChartsController::class, 'scoresByYear']);
Route::get('/ranking_by_year', [ChartsController::class, 'rankingByYear']);
