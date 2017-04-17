<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index');
    }

    public function get($title = null) {
        return view('movies.get') -> with([
            'title' => $title,
        ]);
    }
}
