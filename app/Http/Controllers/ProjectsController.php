<?php

namespace App\Http\Controllers;

use App\Models\ProjectTexts;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projecttext = ProjectTexts::first()->toArray();

        return view('pages.projects', compact('projecttext'));
    }
}
