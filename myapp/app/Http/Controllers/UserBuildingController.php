<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserBuilding;
use App\User;
use App\Building;
use Symfony\Component\VarDumper\VarDumper;

class UserBuildingController extends Controller
{
    public function index()
    {
        return UserBuilding::all();
    }

    public function store(Request $request)
    {
        $user = User::find($request->user);
        $building = Building::find($request->building);
        if (!$user || !$building) {
            return response()->json([
                'status' => 404,
                'message' => 'not found'
            ], 404);
        }
        $userBuilding = UserBuilding::create([
            'user' => $user['id'],
            'building' => $building['id']
        ]);

        return response()->json($userBuilding, 201);
    }
}
