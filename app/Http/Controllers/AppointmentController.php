<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'message' => 'nullable|string',
        ]);

        $appointment = Appointment::create($request->all());

      return redirect()->back()->with('Message','Success');
    }
    public function index()
{
    // Retrieve all appointments from the database
    $appointments = Appointment::all();

    // Return a view with the appointments data
    return view('Admin.appointment', compact('appointments'));
}

}
