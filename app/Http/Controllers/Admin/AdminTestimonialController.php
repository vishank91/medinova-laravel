<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use App\Models\Testimonial;

class AdminTestimonialController extends Controller
{

    public function __construct(private Testimonial $testimonial) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->testimonial->all();
        return view("admin.testimonial.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.testimonial.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100|unique:testimonials',
            'message' => 'required',
            'pic' => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        $pic = Storage::disk('public')->put('testimonial', $request->pic);

        $this->testimonial->create([
            'name' => $request->name,
            'profession' => $request->profession,
            'message' => $request->message,
            'pic' => $pic,
            'status' => $request->status
        ]);

        return redirect()->route('admin-testimonial');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->testimonial->find($id);
        return view("admin.testimonial.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:100|unique:testimonials',
            'message' => 'required',
            'pic' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        $data = $this->testimonial->find($id);
        $pic = $data->pic;
        if ($request->pic) {
            Storage::disk("public")->delete("testimonial", $data->pic);
            $pic = Storage::disk('public')->put('testimonial', $request->pic);
        }
        $data->update([
            'name' => $request->name,
            'profession' => $request->profession,
            'message' => $request->message,
            'pic' => $pic,
            'status' => $request->status
        ]);

        return redirect()->route('admin-testimonial');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->testimonial->find($id);
        Storage::disk("public")->delete("testimonial", $data->pic);
        $data->delete();
        return redirect()->route('admin-testimonial');
    }
}
