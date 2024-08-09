<?php

namespace App\Http\Controllers;

use App\Models\AdminServices;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    // Display a listing of the services
    public function index()
    {
        $services = AdminServices::all();
        return view('Admin.Services', compact('services'));
    }

    // Show the form for creating a new service
    public function create()
    {
        return view('services.create');
    }

    // Store a newly created service in storage
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'services' => 'required|string',
        ]);

        AdminServices::create($request->all());

        return redirect()->back()->with('success', 'Service created successfully.');
    }

    // Display the specified service
    public function show(AdminServices $service)
    {
        return view('services.show', compact('service'));
    }

    // Show the form for editing the specified service
    public function edit(AdminServices $service)
    {
        return view('services.edit', compact('service'));
    }

    // Update the specified service in storage
    public function update(Request $request, AdminServices $service)
    {
        $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'services' => 'required|string',
        ]);

        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    // Remove the specified service from storage
    public function destroy(AdminServices $service)
    {
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
