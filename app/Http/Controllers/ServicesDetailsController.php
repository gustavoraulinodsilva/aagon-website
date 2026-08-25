<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesDetailsController extends Controller
{
    public function index($slug)
    {
        return view('pages.services-details');
    }
}
