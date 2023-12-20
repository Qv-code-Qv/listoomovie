<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\movies\MoviesController;
use App\Http\Controllers\series\SeriesController;
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

/*Home*/

Route::group([], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

});

/*Movies*/
Route::group(['prefix' => 'movies'], function () {

    Route::get('/', [MoviesController::class, 'show'])->name('movies.movies');
});

Route::get('/movies_details', [MoviesController::class, 'show_details'])->name('movies.details_movies');

/*Series*/
Route::group(['prefix' => 'series'], function () {

    Route::get('/', [SeriesController::class, 'show'])->name('series.series');

});

Route::get('/series_details', [SeriesController::class, 'show_details'])->name('series.details_series');

