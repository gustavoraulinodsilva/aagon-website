<?php

namespace App\Http\Controllers;

use App\Models\HomeMethodologyStep;
use App\Models\HomeTexts;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $hometext = HomeTexts::first()->toArray();
        $homemethodologysteps = HomeMethodologyStep::orderBy('order', 'asc')->get()->toArray();

        return view('home', compact('hometext', 'homemethodologysteps'));
    }
}
