<?php

namespace App\Http\Controllers;

use App\UserBuilding;
use Illuminate\Http\Request;
use App\Building;
use App\User;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\VarDumper;

class BuildingController extends Controller
{
    public function index()
    {
        return Building::all();
    }

    public function show(Building $building)
    {
        return $building;
    }

    public function store(Request $request)
    {
        $building = User::create($request->all());

        return response()->json($building, 201);
    }

    public function getByUser(User $user)
    {
        $userBuildings = DB::table('user_buildings')->where('user', $user['id'])->get();
        $buildings = [];
        foreach ($userBuildings as $ub) {
            array_push($buildings, Building::find($ub->building));
        }
        return response()->json($buildings, 200);
    }
}
