<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index');
    }

    public function get($title = null) {
        return view('books.get') -> with([
            'title' => $title,
        ]);
    }
}
