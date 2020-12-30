<?php

use Illuminate\Support\Facades\Route;


// ### Movies ###

// Get All Movies on index
Route::get('/', 'MoviesController@index')->name('movies.index');
// Get specific Movie
Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');

// ### People ###

// Get Actors
Route::get('/actors', 'ActorsController@index')->name('actors.index');
// Actors Pagination
Route::get('/actors/page/{page?}', 'ActorsController@index');
// Get Specific Actor
Route::get('/actors/{id}', 'ActorsController@show')->name('actors.show');

// Get Directors

// Get Specific Director

Route::get('/cards', function () {
    return view('cards');
});

// ### TV ###

// Get All TV Series
Route::get('/tv', 'TvController@index')->name('tv.index');
// Get specific tv series
Route::get('/tv/{id}', 'TvController@show')->name('tv.show');
