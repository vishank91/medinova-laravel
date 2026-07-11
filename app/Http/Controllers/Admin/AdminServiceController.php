<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{

    public function __construct(private Service $service) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->all();
        return view("admin.service.index", compact('data'));
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
            'name' => 'required|min:3|max:100',
            'shortDescription' => 'required',
            'htmlcode' => 'required',
            'icon' => 'required|min:5|max:50',
        ]);

        $this->service->create([
            'name' => $request->name,
            'shortDescription' => $request->shortDescription,
            'description' => $request->htmlcode,
            'icon' => $request->icon,
            'status' => $request->status
        ]);

        return redirect()->route('admin-service');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->service->find($id);
        return view("admin.service.show", compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->service->find($id);
        return view("admin.service.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'shortDescription' => 'required',
            'htmlcode' => 'required',
            'icon' => 'required|min:5|max:50',
        ]);

        $this->service->find($id)->update([
            'name' => $request->name,
            'shortDescription' => $request->shortDescription,
            'description' => $request->htmlcode,
            'icon' => $request->icon,
            'status' => $request->status
        ]);

        return redirect()->route('admin-service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->service->find($id)->delete();
        return redirect()->route('admin-service');
    }
}
