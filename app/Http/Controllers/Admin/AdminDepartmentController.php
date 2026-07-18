<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminDepartmentController extends Controller
{

    public function __construct(private Department $department) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->department->all();
        return view("admin.department.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.department.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100|unique:departments',
            'shortDescription' => 'required',
        ]);

        $this->department->create([
            'name' => $request->name,
            'shortDescription' => $request->shortDescription,
            'status' => $request->status
        ]);

        return redirect()->route('admin-department');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->department->find($id);
        return view("admin.department.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'min:3', "max:100", Rule::unique('departments')->ignore($id)],
            'shortDescription' => 'required',
        ]);

        $this->department->find($id)->update([
            'name' => $request->name,
            'shortDescription' => $request->shortDescription,
            'status' => $request->status
        ]);

        return redirect()->route('admin-department');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->department->find($id)->delete();
        return redirect()->route('admin-department');
    }
}
