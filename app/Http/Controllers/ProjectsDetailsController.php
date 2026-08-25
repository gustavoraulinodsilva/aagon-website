<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsDetailsController extends Controller
{
    public function index($slug)
    {
        return view('pages.projects-details');
    }
}
