<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Design;

class DesignController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'property_category' => 'required|string',
            'residential-type' => 'nullable|string',
            'commercial-type' => 'nullable|string',
            'other-commercial-type' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'notes' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480', // 20 MB max
        ]);
    
        // Create design without image initially
        $design = Design::create($validatedData);
    
        // Check if an image file is present
        if ($request->hasFile('image')) {
            // Get the image file
            $image = $request->file('image');
            // Define a unique filename
            $filename = time() . '.' . $image->getClientOriginalExtension();
            // Define the path to store the image
            $path = public_path('images');
            // Ensure the directory exists
            if (!\File::exists($path)) {
                \File::makeDirectory($path, 0755, true);
            }
            // Move the file to the public/images directory
            $image->move($path, $filename);
            // Update the design with the image path
            $design->image = 'images/' . $filename;
            $design->save();
        }
    
        return redirect()->back()->with('success', 'Design submitted successfully!');
    }
    
    public function index()
    {
        $designs = Design::all();
        return view('Admin.Design', compact('designs'));
    }
}
