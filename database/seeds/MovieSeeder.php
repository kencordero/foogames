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
        Movie::create([
           'title' => 'Casablanca',
            'director' => 'Michael Curtiz',
            'year_released' => 1942,
        ]);

        Movie::create([
            'title' => 'Citizen Kane',
            'director' => 'Orson Welles',
            'year_released' => 1941,
        ]);

        Movie::create([
            'title' => 'The Godfather',
            'director' => 'Francis Ford Coppola',
            'year_released' => 1971,
        ]);

        Movie::create([
            'title' => 'Raiders of the Lost Ark',
            'director' => 'Steven Spielberg',
            'year_released' => 1981,
        ]);

        Movie::create([
            'title' => 'Star Wars',
            'director' => 'George Lucas',
            'year_released' => 1977,
        ]);
    }
}
