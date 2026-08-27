<?php

namespace App\Http\Controllers;

use App\Models\HomeTexts;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $hometext = HomeTexts::first()->toArray();

        return view('home', compact('hometext'));
    }
}
