<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsDetailsController extends Controller
{
    public function index(mixed $slug)
    {
        $project = Project::with(['category', 'service', 'metrics', 'galleries'])->where('slug', $slug)->firstOrFail()->toArray();
        
        return view('pages.projects-details', compact('project'));
    }
}
