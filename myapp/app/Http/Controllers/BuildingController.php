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
}
