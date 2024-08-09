<?php

namespace App\Http\Controllers;

use App\Models\Inquire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InquireController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request data
        $request->validate([
            'service_inquire' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'message' => 'nullable|string',
            
        ]);
    
        // Create a new Inquire instance
        $appointment = new Inquire();
        $appointment->service_inquire = $request->input('service_inquire');
        $appointment->name = $request->input('name');
        $appointment->email = $request->input('email');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->message = $request->input('message');
    
        // Handle file upload
       
    
        // Save the appointment record
        $appointment->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Appointment request submitted successfully!');
    }
}
