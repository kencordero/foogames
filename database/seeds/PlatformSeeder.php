<?php

use Illuminate\Database\Seeder;
use App\Platform;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platform::create([
            'name' => 'Nintendo',
            'make' => 'Nintendo',
            'year_released' => 1985,
        ]);

        Platform::create([
            'name' => 'Windows',
            'make' => 'Microsoft',
            'year_released' => 1985,
        ]);

        Platform::create([
            'name' => 'Super Nintendo',
            'make' => 'Nintendo',
            'year_released' => 1991,
        ]);

        Platform::create([
            'name' => 'PlayStation',
            'make' => 'Sony',
            'year_released' => 1994,
        ]);

        Platform::create([
            'name' => 'Nintendo 64',
            'make' => 'Nintendo',
            'year_released' => 1995,
        ]);

        Platform::create([
            'name' => 'PlayStation 2',
            'make' => 'Sony',
            'year_released' => 2000,
        ]);

        Platform::create([
            'name' => 'XBOX',
            'make' => 'Microsoft',
            'year_released' => 2001,
        ]);

        Platform::create([
            'name' => 'GameCube',
            'make' => 'Nintendo',
            'year_released' => 2001,
        ]);

        Platform::create([
            'name' => 'XBOX 360',
            'make' => 'Microsoft',
            'year_released' => 2005,
        ]);

        Platform::create([
            'name' => 'PlayStation 3',
            'make' => 'Sony',
            'year_released' => 2006,
        ]);

        Platform::create([
            'name' => 'Wii',
            'make' => 'Nintendo',
            'year_released' => 2006,
        ]);

        Platform::create([
            'name' => 'iOS',
            'make' => 'Apple',
            'year_released' => 2007,
        ]);

        Platform::create([
            'name' => 'Android',
            'make' => 'Google',
            'year_released' => 2008,
        ]);
    }
}
