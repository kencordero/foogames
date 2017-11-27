<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index') -> with([
            'movies' => $movies,
        ]);
    }

    public function get($id = null) {
        $movie = Movie::find($id);

        if (is_null($movie)) {
            Session::flash('message', 'Movie not found');
            return redirect('/movies');
        }

        return view('movies.get') -> with([
            'movie' => $movie,
        ]);
    }

    public function new() {
        return view('movies.new');
    }

    public function add() {
        return view('movies.add');
    }
}
