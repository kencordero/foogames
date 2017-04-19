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
Route::get('/books/all', 'BookController@getAllBooks');
Route::get('/books/authors/all', 'BookController@getAllAuthors');
Route::get('/books/searchByTitle/{title}', 'BookController@searchBookByTitle');

Route::get('/games', 'GameController@index');
Route::get('/games/all', 'GameController@getAllGames');
Route::get('/games/platforms', 'GameController@getAllPlatforms');
Route::get('/games/searchByTitle/{title}', 'GameController@searchGameByTitle');

Route::get('/movies', 'MovieController@index');
Route::get('/movies/searchByTitle/{title}', 'MovieController@searchMovieByTitle');

Route::get('/music', 'MusicController@index');
Route::get('/music/artists', 'MusicController@getAllArtists');
Route::get('/music/albums', 'MusicController@getAllAlbums');
Route::get('/music/artists/searchByName/{name}', 'MusicController@searchArtistByName');
Route::get('/music/albums/searchByTitle/{title}', 'MusicController@searchAlbumByTitle');
