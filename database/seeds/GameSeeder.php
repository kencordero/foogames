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
        Game::create([
            'title' => 'The Elder Scrolls III: Morrowind',
            'year_released' => 2002,
        ]);

        Game::create([
            'title' => 'Final Fantasy VII',
            'year_released' => 1997,
        ]);

        Game::create([
            'title' => 'Grand Theft Auto IV',
            'year_released' => 2008
        ]);

        Game::create([
            'title' => 'The Legend of Zelda: Ocarina of Time',
            'year_released' => 1998,
        ]);

        Game::create([
            'title' => 'Metroid Prime',
            'year_released' => 2002,
        ]);

        Game::create([
            'title' => 'Super Mario Bros. 3',
            'year_released' => 1990,
        ]);
    }
}
