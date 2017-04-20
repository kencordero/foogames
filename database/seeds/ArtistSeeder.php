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
        Artist::create([
            'name' => 'The Beach Boys',
            'sort_name' => 'Beach Boys, The',
        ]);

        Artist::create([
            'name' => 'The Beatles',
            'sort_name' => 'Beatles, The',
        ]);

        Artist::create([
            'created_at' => date("Y-m-d H:i:s"),
            'name' => 'Bob Dylan',
            'sort_name' => 'Dylan, Bob',
        ]);


    }
}
