<?php

namespace App\Http\Controllers;

use App\Models\ContactText;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacttext = ContactText::first()->toArray();

        return view('pages.contact', compact('contacttext'));
    }
}
