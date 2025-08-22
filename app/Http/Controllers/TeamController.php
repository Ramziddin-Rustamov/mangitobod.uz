<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamController extends Controller
{
    public function index()
    {
        $teams = TeamMember::all();
        return view('team.index', [
            'teams' => $teams
        ]);
    }
}
