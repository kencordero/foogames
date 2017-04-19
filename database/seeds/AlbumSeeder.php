<?php

use Illuminate\Database\Seeder;
use App/Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString();
            'title' => 'Blonde on Blonde',
            'artist' => 'Bob Dylan',
            'year_released' => 1966,
        ]);

        Album::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString();
            'title' => 'Pet Sounds',
            'artist' => 'The Beach Boys',
            'year_released' => 1966,
        ]);

        Album::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString();
            'title' => 'Sgt. Pepper\'s Lonely Hearts Club Band',
            'artist' => 'The Beatles',
            'year_released' => 1967,
        ]);
    }
}
