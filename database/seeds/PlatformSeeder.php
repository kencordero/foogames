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
        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Nintendo',
            'make' => 'Nintendo',
            'year_released' => 1985,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Windows',
            'make' => 'Microsoft',
            'year_released' => 1985,
        ])

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Super Nintendo',
            'make' => 'Nintendo',
            'year_released' => 1991,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'PlayStation',
            'make' => 'Sony',
            'year_released' => 1994,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Nintendo 64',
            'make' => 'Nintendo',
            'year_released' => 1995,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'PlayStation 2',
            'make' => 'Sony',
            'year_released' => 2000,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'XBOX',
            'make' => 'Microsoft',
            'year_released' => 2001,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'GameCube',
            'make' => 'Nintendo',
            'year_released' => 2001,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'XBOX 360',
            'make' => 'Microsoft',
            'year_released' => 2005,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'PlayStation 3',
            'make' => 'Sony',
            'year_released' => 2006,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Wii',
            'make' => 'Nintendo',
            'year_released' => 2006,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'iOS',
            'make' => 'Apple',
            'year_released' => 2007,
        ]);

        Platform::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Android',
            'make' => 'Google',
            'year_released' => 2008,
        ]);
    }
}
