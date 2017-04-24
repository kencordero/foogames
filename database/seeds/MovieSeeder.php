<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = json_decode(file_get_contents(database_path().'/seedData/movies.json'), True);

        foreach ($movies as $title => $movie) {
            Movie::create([
                'title' => $title,
                'director' => $movie['director'] ?? null,
                'year_released' => $movie['year_released'] ?? null,
                'image_url' => $movie['image_url'] ?? null,
            ]);
        }
    }
}
