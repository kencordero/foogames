<?php

use Illuminate\Database\Seeder;
use App/Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'The Beach Boys',
            'sortName' => 'Beach Boys, The',
        ]);

        Artist::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'The Beatles',
            'sortName' => 'Beatles, The',
        ]);

        Artist::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bob Dylan',
            'sortName' => 'Dylan, Bob',
        ]);


    }
}
