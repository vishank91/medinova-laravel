<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{

    public function __construct(private Service $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.service.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.service.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:10|max:100',
            'shortDescription' => 'required',
            'inp_htmlcode' => 'required',
            'icon' => 'required|min:5|max:50',
        ]);

        $this->service->create([
            'name' => $request->name,
            'shortDescription' => $request->shortDescription,
            'description' => $request->inp_htmlcode,
            'icon' => $request->icon,
            'status' => $request->status
        ]);

        redirect()->route('admin-service');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
