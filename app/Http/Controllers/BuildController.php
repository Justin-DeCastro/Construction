<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Build;
use Illuminate\Support\Facades\File;

class BuildController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'residential-type' => 'nullable|string',
            'property_category' => 'nullable|string',
            'commercial-type' => 'nullable|string',
            'other-commercial-type' => 'nullable|string',
            'phone' => 'required|string',
            'notes' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480', // 20 MB max
        ]);
    
        // Create a new build entry without image initially
        $build = Build::create($validatedData);
    
        // Check if an image file is present
        if ($request->hasFile('image')) {
            // Get the image file
            $image = $request->file('image');
            // Define a unique filename
            $filename = time() . '.' . $image->getClientOriginalExtension();
            // Define the path to store the image
            $path = public_path('images');
            // Ensure the directory exists
            if (!File::exists($path)) {
                File::makeDirectory($path, 0755, true);
            }
            // Move the file to the public/images directory
            $image->move($path, $filename);
            // Update the build with the image path
            $build->image = 'images/' . $filename;
            $build->save();
        }
    
        return redirect()->back()->with('success', 'Build submitted successfully!');
    }
    
    public function index()
    {
        $builds = Build::all();
        return view('Admin.Build', compact('builds'));
    }
}
