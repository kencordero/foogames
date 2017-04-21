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
        $albums = json_decode(file_get_contents(database_path().'/seedData/albums.json'), True);

        foreach ($albums as $title => $album) {
            Album::create([
                'title' => $title,
                'artist' => $album['artist'],
                'year_released' => $album['released']
            ]);
        }
    }
}
