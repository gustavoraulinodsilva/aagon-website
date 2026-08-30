<?php

namespace App\Http\Controllers;

use App\Models\ServiceLifecycleStep;
use App\Models\ServiceTexts;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $servicetexts = ServiceTexts::first()->toArray();
        $lifecyclesteps = ServiceLifecycleStep::where('is_active', true)->orderBy('order', 'asc')->get();

        return view('pages.services', compact('servicetexts', 'lifecyclesteps'));
    }
}
