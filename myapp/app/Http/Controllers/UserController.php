<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\User;

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
}
