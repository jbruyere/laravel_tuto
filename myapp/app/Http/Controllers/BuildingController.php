<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\User;

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
        $user = User::find($request->user);
        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'user not found'
            ], 404);
        }
        $building = Building::create([
            'name' => $request->name,
            'city' => $request->city,
            'user' => $request->user
        ]);

        return response()->json($building, 201);
    }
}
