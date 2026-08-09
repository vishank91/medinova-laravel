<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class AdminContactUsController extends Controller
{

    public function __construct(private ContactUs $contactus) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->contactus->all();
        return view("admin.contactus.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->contactus->find($id);
        return view("admin.contactus.show", compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $data = $this->contactus->find($id);
        $data->update([
            'status' => !$data->status
        ]);

        return redirect()->route('admin-contactus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->contactus->find($id)->delete();
        return redirect()->route('admin-contactus');
    }
}
