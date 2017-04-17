<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        return view('music.index');
    }

    public function get($title = null) {
        return view('music.get') -> with([
            'title' => $title,
        ]);
    }
}
