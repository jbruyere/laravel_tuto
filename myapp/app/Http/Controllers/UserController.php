<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show(User $user)
    {
        return $user;
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function getByBuilding(Building $building)
    {
        $userBuildings = DB::table('user_buildings')->where('building', $building['id'])->get();
        $users = [];
        foreach ($userBuildings as $ub) {
            array_push($users, User::find($ub->user));
        }
        return response()->json($users, 200);
    }
}
