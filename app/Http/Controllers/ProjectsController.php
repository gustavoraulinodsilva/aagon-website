<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use App\Models\ProjectTexts;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projecttext = ProjectTexts::first()->toArray();
        $projectcategories = ProjectCategory::get()->toArray();

        return view('pages.projects', compact('projecttext', 'projectcategories'));
    }
}
