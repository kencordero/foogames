<?php

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
Route::get('/', 'MainController@index');

Route::get('/books', 'BookController@index');
Route::get('/books/{title}', 'BookController@get');

Route::get('/games', 'GameController@index');
Route::get('/games/{title}', 'GameController@get');

Route::get('/movies', 'MovieController@index');
Route::get('/movies/{title}', 'MovieController@get');

Route::get('/music', 'MusicController@index');
Route::get('/music/{title}', 'MusicController@get');
