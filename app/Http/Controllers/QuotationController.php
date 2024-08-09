<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;

class QuotationController extends Controller
{
    public function index()
    {
        // Retrieve all quotations from the database
        $quotations = Quotation::all();

        // Pass the quotations to the view
        return view('quotations.index', compact('quotations'));
    }

    public function submitForm(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'full_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'email_address' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'category' => 'required|in:Residential,Commercial,Industrial,Electrical',
            'residential_type' => 'nullable|in:House,Condominium,Townhouse',
            'commercial_type' => 'nullable|in:Restaurant/Bars,Coffee and Tea,Office,Other',
            'other_commercial_type' => 'nullable|string|max:255',
            'build_type' => 'nullable|in:New Build,Renovations,Knockdown and Rebuilds,Electrical Installation and Maintenance',
            'design_type' => 'nullable|in:Architectural Design,Structural Design,Electrical Design,Interior Design',
            'service' => 'required|in:Property Inspection,Cost Estimates,Project Inspection and Planning',
            'estimated_budget' => 'nullable|string|max:255',
            'project_description' => 'nullable|string',
            'estimated_completion_date' => 'nullable|date',
            'additional_information' => 'nullable|string',
        ]);

        // Create a new quotation record in the database
        Quotation::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your quotation request has been submitted!');
    }
}
