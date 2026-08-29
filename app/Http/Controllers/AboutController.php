<?php

namespace App\Http\Controllers;

use App\Models\AboutApproach;
use App\Models\AboutTexts;
use App\Models\AboutValue;
use App\Models\AboutWorkflowStep;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouttext = AboutTexts::first()->toArray();
        $aboutapproaches = AboutApproach::where('is_active', true)->orderBy('order', 'asc')->get();
        $aboutworkflowsteps = AboutWorkflowStep::where('is_active', true)->orderBy('order', 'asc')->get();
        $aboutvalues = AboutValue::where('is_active', true)->orderBy('order', 'asc')->get();

        return view('pages.about', compact('abouttext', 'aboutapproaches', 'aboutworkflowsteps', 'aboutvalues'));
    }
}
