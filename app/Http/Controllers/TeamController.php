<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $team = Team::all();

        return view('frontend.index', compact('team'));
    }
}
