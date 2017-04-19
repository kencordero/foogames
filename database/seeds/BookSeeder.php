<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'A Moveable Feast',
            'author' => 'Ernest Hemingway',
            'year_published' => 1964,
        ]);
    }
}
