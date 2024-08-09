<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminServices;
use App\Models\Feedback;
class HomeController extends Controller
{
    public function home(){
        $feedbacks = Feedback::all();
        $services = AdminServices::all();
        return view("Home.Home",compact('services','feedbacks'));
    }
    public function about(){
        return view("Home.About");
    }
    public function services(){
        $services = AdminServices::all();
        return view("Home.Service",compact('services'));
    }
    public function booking(){
        return view("Home.Booking");
    }
    public function team(){
        return view("Home.Team");
    }
    public function errorpage(){
        return view("Home.404page");
    }
    public function testimonial(){
        return view("Home.Testimonials");
    }
    public function contact(){
        return view("Home.Contact");
    }
    public function consultation(){
        return view("Home.Consultation");
    }
    public function design(){
        return view("Home.Design");
    }
    public function build(){
        return view("Home.Build");
    }
 
   
}
