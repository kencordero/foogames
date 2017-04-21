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
        $platforms = json_decode(file_get_contents(database_path().'/seedData/platforms.json'), True);

        foreach ($platforms as $name => $platform) {
            Platform::create([
                'name' => $name,
                'make' => $platform['make'],
                'year_released' => $platform['year_released'],
            ]);
        }
    }
}
