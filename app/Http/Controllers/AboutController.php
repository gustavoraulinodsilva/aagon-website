<?php

namespace App\Http\Controllers;

use App\Models\AboutTexts;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouttext = AboutTexts::first()->toArray();

        return view('pages.about', compact('abouttext'));
    }
}
