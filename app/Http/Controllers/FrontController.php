<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Package;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Newsletter;
use App\Models\Testimonial;
use App\Models\Appointment;

class FrontController extends Controller
{
    public function __construct(
        private Service $service,
        private Package $package,
        private Department $department,
        private Doctor $doctor,
        private Testimonial $testimonial,
        private Newsletter $newsletter,
        private ContactUs $contactus,
        private Appointment $appointment,
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
        $department = $this->department->all();
        $doctor = $this->doctor->all();
        return view("service", compact('service', 'testimonial', 'department', 'doctor'));
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
        $testimonial = $this->testimonial->all();
        return view("testimonial", compact('testimonial'));
    }

    public function getDoctor($did)
    {
        $doctors = $this->doctor->where('departmentId', $did)->get();
        return response()->json($doctors);
    }

    public function appointmentPage()
    {
        $doctor = $this->doctor->all();
        $testimonial = $this->testimonial->all();
        $department = $this->department->all();
        return view("appointment", compact('doctor', 'testimonial', 'department'));
    }

    public function appointmentStorePage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'doctorId' => 'required'
        ]);
        $this->appointment->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'doctorId' => $request->doctorId
        ]);
        return redirect("appointment-confirmation");
    }

    public function appointmentConfirmationPage()
    {
        return view("appointment-confirmation");
    }


    public function searchPage()
    {
        $service = $this->service->all();
        $testimonial = $this->testimonial->all();
        return view("search", compact('service', 'testimonial'));
    }

    public function newsletterStorePage(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:newsletters'
        ]);

        $this->newsletter->create([
            'email' => $request->email
        ]);

        return redirect("newsletter-confirmation");
    }

    public function newsletterConfirmationPage()
    {
        return view("newsletter-confirmation");
    }

    public function contactPage()
    {
        $show = false;
        return view("contact", compact('show'));
    }

    public function contactStorePage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $this->contactus->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        $show = true;
        return view("contact", compact('show'));
    }
}
