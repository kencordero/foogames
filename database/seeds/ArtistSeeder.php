<?php

use Illuminate\Database\Seeder;
use App\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = json_decode(file_get_contents(database_path().'/seedData/artists.json'), True);

        foreach ($artists as $name => $artist) {
            Artist::create([
                'name' => $name,
                'sort_name' => $artist['sort_name'] ?? null,
            ]);
        }
    }
}
