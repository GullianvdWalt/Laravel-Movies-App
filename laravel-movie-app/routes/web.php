<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;


// Get Movies
Route::get('/', 'MoviesController@index')->name('movies.index');
// Get Movie
Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');
