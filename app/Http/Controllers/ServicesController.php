<?php

namespace App\Http\Controllers;

use App\Models\ServiceTexts;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $servicetexts = ServiceTexts::first()->toArray();

        return view('pages.services', compact('servicetexts'));
    }
}
