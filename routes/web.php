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

Route::get('/games/tetris', function() {
    return 'Tetris is the bestis!';
});

Route::get('/games/{title}', function($title = '') {
    if ($title == '') {
      return 'Your request did not include a title.';
    }
    else {
      return 'Results for the book: '.$title;
    }
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', function() {
    return view('games');
});
