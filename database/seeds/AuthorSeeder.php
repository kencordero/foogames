<?php

use Illuminate\Database\Seeder;
use App\Platform;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'firstName' => 'Ernest',
            'lastName' => 'Hemingway',
        ]);
    }
}
