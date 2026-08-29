<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{

    public function __construct(private Appointment $appointment) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->appointment->all();
        return view("admin.appointment.index", compact('data'));
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
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $data = $this->appointment->find($id);
        $data->update([
            'status' => !$data->status
        ]);

        return redirect()->route('admin-appointment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->appointment->find($id)->delete();
        return redirect()->route('admin-appointment');
    }
}
