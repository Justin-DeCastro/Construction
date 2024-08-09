<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Storage;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'notes' => 'nullable|string',
            'category' => 'required|string',
            'property_category' => 'required|string',
            'residential-type' => 'nullable|string',
            'commercial-type' => 'nullable|string',
            'other-commercial-type' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480', // 20 MB max
        ]);

        // Create consultation record
        $consultation = Consultation::create($validatedData);

        // Handle image file upload
        if ($request->hasFile('image')) {
            // Get the image file
            $image = $request->file('image');
            // Generate a unique filename
            $filename = time() . '.' . $image->getClientOriginalExtension();
            // Store the file and get the path
            $path = $image->storeAs('public/images', $filename);
            // Update consultation with image path
            $consultation->image = $path;
            $consultation->save();
        }

        return redirect()->back()->with('success', 'Consultation submitted successfully!');
    }

    public function index()
    {
        $consultations = Consultation::all();
        return view('Admin.Consultation', compact('consultations'));
    }
}
