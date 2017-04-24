<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = json_decode(file_get_contents(database_path().'/seedData/authors.json'), True);

        foreach ($authors as $author) {
            Author::create([
                'first_name' => $author['first_name'],
                'last_name' => $author['last_name'],
            ]);
        }
    }
}
