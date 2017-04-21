<?php

use Illuminate\Database\Seeder;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = json_decode(file_get_contents(database_path().'/seedData/games.json'), True);

        foreach ($games as $title => $game) {
            Game::create([
                'title' => $title,
                'year_released' => $game['released'],
                'image_url' => $game['cover'],
            ]);
        }
    }
}
