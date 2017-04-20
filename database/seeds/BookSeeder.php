<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**

        Book::create([
            'created_at' => date("Y-m-d H:i:s"),
            'title' => '',
            'author' => '',
            'year_published' => 0,
        ]);

     */
    public function run()
    {
        Book::create([
            'title' => 'The Corrections',
            'author' => 'Jonathan Franzen',
            'year_published' => 2001,
        ]);

        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'year_published' => 1925,
        ]);


        Book::create([
            'title' => 'A Moveable Feast',
            'author' => 'Ernest Hemingway',
            'year_published' => 1964,
        ]);

        Book::create([
            'title' => 'The Road',
            'author' => 'Cormac McCarthy',
            'year_published' => 2006,
        ]);

    }
}

