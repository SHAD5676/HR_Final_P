<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::latest()->get();
        return view('backend.designations.index', compact('designations'));
    }

    public function create()
    {
        return view('backend.designations.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:designations|min:3|max:10',
        ]);

        Designation::create($request->all());

        return redirect()->route('admin.designations.index')
                         ->with('success', 'Designation created successfully.');
    }

    public function edit(Designation $designation)
    {
        return view('backend.designations.edit', compact('designation'));
    }

    public function update(Request $request, Designation $designation)
    {
        
        $request->validate([
            'name' => 'required|min:3|max:10|unique:designations,name,' . $designation->id,
        ]);

        $designation->update($request->all());

        return redirect()->route('admin.designations.index')
                         ->with('success', 'Designation updated successfully.');
    }

    public function destroy(Designation $designation)
    {
        $designation->delete();
        return back()->with('success', 'Designation deleted successfully.');
    }
}