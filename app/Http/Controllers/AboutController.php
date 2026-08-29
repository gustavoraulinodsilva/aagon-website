<?php

namespace App\Http\Controllers;

use App\Models\AboutApproach;
use App\Models\AboutTexts;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouttext = AboutTexts::first()->toArray();
        $aboutapproaches = AboutApproach::where('is_active', true)->orderBy('order', 'asc')->get();

        return view('pages.about', compact('abouttext', 'aboutapproaches'));
    }
}
