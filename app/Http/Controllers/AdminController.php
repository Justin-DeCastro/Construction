<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Quotation;
use App\Models\Consultation;
use App\Models\AdminServices;
use Illuminate\Http\Request;

class AdminController extends Controller
{
public function dashboard(){
    return view("Admin.dashboard");
}
public function appointment(){
    $appointments = Appointment::all();
    return view("Admin.appointment",compact('appointments'));
}
public function getquotation(){
    $quotations = Quotation::all();
    return view("Admin.quotation",compact('quotations'));
}
public function getservices(){
    $services = AdminServices::all();
    return view("Admin.Services",compact('services'));
}
public function consultation(){
    $consulations = Consultation::all();
    return view("Home.Consultation",compact('consultations'));
}



}
