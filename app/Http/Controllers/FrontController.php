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
        $doctor = $this->doctor->all();
        $testimonial = $this->testimonial->all();
        return view("about", compact('doctor', 'testimonial'));
    }

    public function servicePage()
    {
        $service = $this->service->all();
        $testimonial = $this->testimonial->all();
        return view("service", compact('service', 'testimonial'));
    }

    public function showServicePage($id)
    {
        $data = $this->service->find($id);
        $service = $this->service->all();
        return view("show-service", compact('service', 'data'));
    }

    public function pricingPage()
    {
        $package = $this->package->all();
        $doctor = $this->doctor->all();
        $testimonial = $this->testimonial->all();
        return view("price", compact('package', 'doctor', 'testimonial'));
    }

    public function showPricingPage($id)
    {
        $data = $this->package->find($id);
        $package = $this->package->all();
        return view("show-package", compact('package', 'data'));
    }

    public function doctorPage()
    {
        $service = $this->service->all();
        $doctor = $this->doctor->all();
        $testimonial = $this->testimonial->all();
        return view("doctor", compact('service', 'doctor', 'testimonial'));
    }

    public function testimonialPage()
    {
        return view("testimonial");
    }

    public function appointmentPage()
    {
        $doctor = $this->doctor->all();
        $testimonial = $this->testimonial->all();
        return view("appointment", compact('doctor', 'testimonial'));
    }

    public function searchPage()
    {
        $service = $this->service->all();
        $testimonial = $this->testimonial->all();
        return view("search", compact('service', 'testimonial'));
    }

    public function contactPage()
    {
        return view("contact");
    }
}
