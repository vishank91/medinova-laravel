<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminUserController extends Controller
{

    public function __construct(private User $user) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->user->all();
        return view("admin.user.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:100|unique:users',
            'phone' => 'required',
            'password' => 'required',
            'cpassword' => 'required|same:password',
        ]);

        $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'role' => $request->role,
            'status' => $request->status
        ]);

        return redirect()->route('admin-user');
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
        $data = $this->user->find($id);
        return view("admin.user.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'min:3', "max:100", Rule::unique('users')->ignore($id)],
            'phone' => 'required',
        ]);

        $this->user->find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'status' => $request->status
        ]);

        return redirect()->route('admin-user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->user->find($id)->delete();
        return redirect()->route('admin-user');
    }
}
