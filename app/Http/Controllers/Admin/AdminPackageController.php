<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminPackageController extends Controller
{

    public function __construct(private Package $package) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->package->all();
        return view("admin.package.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.package.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100|unique:packages',
            'basePrice' => 'required',
            'discount' => 'required',
            'shortDescription' => 'required',
            'htmlcode' => 'required',
            'pic' => 'required|min:5|max:50',
        ]);

        $pic = Storage::disk('public')->putFileAs('package', $request->pic);

        $this->package->create([
            'name' => $request->name,
            'basePrice' => $request->basePrice,
            'discount' => $request->discount,
            'finalPrice' => intval($request->basePrice - $request->basePrice * $request->discount / 100),
            'shortDescription' => $request->shortDescription,
            'description' => $request->htmlcode,
            'pic' => $pic,
            'status' => $request->status
        ]);

        return redirect()->route('admin-package');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->package->find($id);
        return view("admin.package.show", compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->package->find($id);
        return view("admin.package.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'min:3', "max:100", Rule::unique('packages')->ignore($id)],
            'shortDescription' => 'required',
            'htmlcode' => 'required',
            'icon' => 'required|min:5|max:50',
        ]);

        $this->package->find($id)->update([
            'name' => $request->name,
            'shortDescription' => $request->shortDescription,
            'description' => $request->htmlcode,
            'icon' => $request->icon,
            'status' => $request->status
        ]);

        return redirect()->route('admin-package');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->package->find($id)->delete();
        return redirect()->route('admin-package');
    }
}
