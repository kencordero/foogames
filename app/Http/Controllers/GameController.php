<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('games.index');
    }

    public function get($title = null) {
        return view('games.get') -> with([
            'title' => $title,
        ]);
    }
}
