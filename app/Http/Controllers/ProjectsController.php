<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectTexts;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projecttext = ProjectTexts::first()->toArray();
        $projectcategories = ProjectCategory::get()->toArray();
        $projects = Project::with('category')->orderBy('order')->get()->toArray();

        return view('pages.projects', compact('projecttext', 'projectcategories', 'projects'));
    }
}
