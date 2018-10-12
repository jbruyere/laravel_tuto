<?php

use Illuminate\Database\Seeder;
use App\UserBuilding;
use App\User;
use App\Building;

class UserBuildingsTableSeeder extends Seeder
{
    /**
     * @throws Exception
     */
    public function run()
    {
        $users = User::all();
        $buildings = Building::all();

        $userNb = count($users);
        $buildingNb = count($buildings);
        for ($i = 0; $i < 10; $i++) {
            UserBuilding::create([
                'user' => $users[random_int(0, $userNb - 1)]['id'],
                'building' => $buildings[random_int(0, $buildingNb - 1)]['id'],
            ]);
        }
    }
}
