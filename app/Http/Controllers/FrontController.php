<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Package;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Testimonial;

class FrontController extends Controller
{
    public function __construct(
        private Service $service,
        private Package $package,
        private Department $department,
        private Doctor $doctor,
        private Testimonial $testimonial,
    ) {}

    public function homePage()
    {
        $service = $this->service->all();
        $package = $this->package->all();
        $department = $this->department->all();
        $doctor = $this->doctor->all();
        $testimonial = $this->testimonial->all();
        return view("index", compact('service', 'package', 'department', 'doctor', 'testimonial',));
    }

    public function aboutPage()
    {
        return view("about");
    }

    public function servicePage()
    {
        return view("service");
    }

    public function pricingPage()
    {
        return view("price");
    }

    public function doctorPage()
    {
        return view("doctor");
    }

    public function testimonialPage()
    {
        return view("testimonial");
    }

    public function appointmentPage()
    {
        return view("appointment");
    }

    public function searchPage()
    {
        return view("search");
    }

    public function contactPage()
    {
        return view("contact");
    }
}
