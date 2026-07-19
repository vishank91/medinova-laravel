<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use App\Models\Doctor;
use App\Models\Department;

class AdminDoctorController extends Controller
{

    public function __construct(private Doctor $doctor, private Department $department) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->doctor->all();
        return view("admin.doctor.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = $this->department->all();
        return view("admin.doctor.create", compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100|unique:doctors',
            'departmentId' => 'required',
            'shortDescription' => 'required',
            'pic' => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        $pic = Storage::disk('public')->put('doctor', $request->pic);

        $this->doctor->create([
            'name' => $request->name,
            'shortDescription' => $request->shortDescription,
            'departmentId' => $request->departmentId,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'pic' => $pic,
            'status' => $request->status
        ]);

        return redirect()->route('admin-doctor');
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
        $department = $this->department->all();
        $data = $this->doctor->find($id);
        return view("admin.doctor.edit", compact('data', 'department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'min:3', "max:100", Rule::unique('services')->ignore($id)],
            'departmentId' => 'required',
            'shortDescription' => 'required',
            'pic' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        $data = $this->doctor->find($id);
        $pic = $data->pic;
        if ($request->pic) {
            Storage::disk("public")->delete("doctor", $data->pic);
            $pic = Storage::disk('public')->put('doctor', $request->pic);
        }
        $data->update([
            'name' => $request->name,
            'shortDescription' => $request->shortDescription,
            'departmentId' => $request->departmentId,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'pic' => $pic,
            'status' => $request->status
        ]);

        return redirect()->route('admin-doctor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->doctor->find($id);
        Storage::disk("public")->delete("doctor", $data->pic);
        $data->delete();
        return redirect()->route('admin-doctor');
    }
}
