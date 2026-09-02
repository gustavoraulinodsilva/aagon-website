<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamTexts;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teamtexts = TeamTexts::first()->toArray();
        $team = Team::orderBy('order', 'asc')->get()->toArray();

        return view('pages.team', compact('teamtexts', 'team'));
    }
}
