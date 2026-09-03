<?php

namespace App\Http\Controllers;

use App\Models\AboutMetric;
use App\Models\HomeMethodologyStep;
use App\Models\HomeTexts;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $hometext = HomeTexts::first()->toArray();
        $homemethodologysteps = HomeMethodologyStep::orderBy('order', 'asc')->get()->toArray();
        $services = Service::get()->toArray();
        $metrics = AboutMetric::orderBy('order')->take(3)->get()->toArray();

        return view('home', compact('hometext', 'homemethodologysteps', 'services', 'metrics'));
    }
}
