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
        $users = User::all();

        $numberUser = count($users);
        for ($i = 0; $i < 10; $i++) {
            Building::create([
                'name' => $faker->name,
                'city' => $faker->city,
                'user' => $users[random_int(0, $numberUser - 1)]['id'],
            ]);
        }
    }
}
