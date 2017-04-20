<?php

use Illuminate\Database\Seeder;
use App\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::create([
            'title' => 'Abbey Road',
            'artist' => 'The Beatles',
            'year_released' => 1969,
        ]);

        Album::create([
            'title' => 'The Beatles',
            'artist' => 'The Beatles',
            'year_released' => 1968,
        ]);

        Album::create([
            'title' => 'Blonde on Blonde',
            'artist' => 'Bob Dylan',
            'year_released' => 1966,
        ]);

        Album::create([
            'title' => 'Blood on the Tracks',
            'artist' => 'Bob Dylan',
            'year_released' => 1975,
        ]);

        Album::create([
            'title' => 'Exile on Main Street',
            'artist' => 'The Rolling Stones',
            'year_released' => 1972,
        ]);

        Album::create([
            'title' => 'Highway 61 Revisited',
            'artist' => 'Bob Dylan',
            'year_released' => 1965,
        ]);

        Album::create([
            'title' => 'London Calling',
            'artist' => 'The Clash',
            'year_released' => 1980,
        ]);

        Album::create([
            'title' => 'Nevermind',
            'artist' => 'Nirvana',
            'year_released' => 1991,
        ]);

        Album::create([
            'title' => 'Pet Sounds',
            'artist' => 'The Beach Boys',
            'year_released' => 1966,
        ]);

        Album::create([
            'title' => 'Revolver',
            'artist' => 'The Beatles',
            'year_released' => 1966,
        ]);

        Album::create([
            'title' => 'Rubber Soul',
            'artist' => 'The Beatles',
            'year_released' => 1965,
        ]);

        Album::create([
            'title' => 'Sgt. Pepper\'s Lonely Hearts Club Band',
            'artist' => 'The Beatles',
            'year_released' => 1967,
        ]);

        Album::create([
            'title' => 'Thriller',
            'artist' => 'Michael Jackson',
            'year_released' => 1982,
        ]);

        Album::create([
            'title' => 'What\'s Going On',
            'artist' => 'Marvin Gaye',
            'year_released' => 1971,
        ]);

        Album::create([
            'title' => 'Yankee Hotel Foxtrot',
            'artist' => 'Wilco',
            'year_released' => 2002,
        ]);
    }
}
