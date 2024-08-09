<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validation rules updated to include phone and specific_concern
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:11|regex:/^\d+$/',
            'email' => 'required|email|max:255',
       
            'message' => 'required|string',
        ]);

        // Create a new contact entry
        $contact = Contact::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
      
            'message' => $request->input('message'),
        ]);

        // Send email
        Mail::to('infinitech.justin2024@gmail.com')->send(new ContactMail($contact));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message sent successfully.');
    }
}
