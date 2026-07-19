<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homePage(){
        return view("index");
    }
    
    public function aboutPage(){
        return view("about");
    }

    public function servicePage(){
        return view("service");
    }

    public function pricingPage(){
        return view("price");
    }

    public function doctorPage(){
        return view("doctor");
    }

    public function testimonialPage(){
        return view("testimonial");
    }

    public function appointmentPage(){
        return view("appointment");
    }

    public function searchPage(){
        return view("search");
    }

    public function contactPage(){
        return view("contact");
    }
}
