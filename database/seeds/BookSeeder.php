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
        $books = json_decode(file_get_contents(database_path().'/seedData/books.json'), True);

        foreach ($books as $title => $book) {
            Book::create([
                'title' => $title,
                'author' => $book['author'],
                'year_published' => $book['year_published'] ?? null,
                'image_url' => $book['image_url'] ?? null,
            ]);
        }
    }
}
