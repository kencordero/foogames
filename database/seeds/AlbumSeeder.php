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
                'record_label' => $album['record_label'] ?? null,
                'year_released' => $album['year_released'] ?? null,
                'image_url' => $album['image_url'] ?? null,
            ]);
        }
    }
}
