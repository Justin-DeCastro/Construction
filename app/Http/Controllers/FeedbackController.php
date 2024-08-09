<?php
// app/Http/Controllers/FeedbackController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    // Show the form (if needed)
    public function feedback()
    {
        return view('Home.Feedback');
    }

    // Handle the form submission
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'profession' => 'required|string',
        ]);

        // Create a new feedback entry
        Feedback::create($validated);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
}
