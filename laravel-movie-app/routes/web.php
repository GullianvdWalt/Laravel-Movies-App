<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;


// Get Movies
Route::get('/', [MoviesController::class, 'index']);
// Get Movie
//Route::get('/movies/{id}', [MoviesController::class, 'show']);
Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');
