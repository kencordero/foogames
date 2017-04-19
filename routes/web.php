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
Route::get('/games/platforms', 'GameController@getPlatforms');
Route::get('/games/{title}', 'GameController@getGame');

Route::get('/movies', 'MovieController@index');
Route::get('/movies/{title}', 'MovieController@get');

Route::get('/music', 'MusicController@index');
Route::get('/music/artists', 'MusicController@getArtists');
Route::get('/music/albums', 'MusicController@getAlbum');
Route::get('/music/artists/{name}', 'MusicController@getArtist');
Route::get('/music/albums/{title}', 'MusicController@getAlbum');
