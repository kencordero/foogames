<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([
            'first_name' => 'Ernest',
            'last_name' => 'Hemingway',
        ]);

        Author::create([
            'first_name' => 'Albert',
            'last_name' => 'Camus',
        ]);
    }
}
