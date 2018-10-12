<?php

use Illuminate\Database\Seeder;
use App\Building;
use App\User;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Building::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Building::create([
                'name' => $faker->name,
                'city' => $faker->city,
            ]);
        }
    }
}
