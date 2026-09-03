<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesDetailsController extends Controller
{
    public function index(mixed $slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->with(['capabilities', 'methodologySteps', 'projects'])->firstOrFail()->toArray();
        
        return view('pages.services-details', compact('service'));
    }
}
