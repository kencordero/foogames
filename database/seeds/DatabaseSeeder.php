<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorSeeder::class);
        $this->call(BookSeeder::class);

        $this->call(PlatformSeeder::class);
        $this->call(GameSeeder::class);

        $this->call(MovieSeeder::class);

        $this->call(MusicSeeder::class);
    }
}
