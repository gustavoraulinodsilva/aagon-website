<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactText;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacttext = ContactText::first()->toArray();

        return view('pages.contact', compact('contacttext'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            Contact::create($validated);

            return response()->json(['success' => 1]);
        } catch (\Exception $e) {
            return response()->json(['success' => 0], 500);
        }
    }
}
