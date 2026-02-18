<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $departments = Department::latest()->paginate(5);
        return view('backend.departments.index', compact('departments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Validate the data
        // I changed max:10 to max:100 to allow names like "Human Resources"
        $validatedData = $request->validate([
            'name'        => 'required|min:2|max:100|unique:departments,name',
            'description' => 'nullable|max:500',
        ], [
            'name.required' => 'Please enter a department name.',
            'name.unique'   => 'This department already exists.',
            'name.min'      => 'The department name must be at least 2 characters.',
            'name.max'      => 'The department name cannot exceed 100 characters.',
        ]);

        // 2. Create the Department using validated data (Safer than $request->all())
        Department::create($validatedData);

        return redirect()->route('admin.departments.index')
                        ->with('success', 'Department created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department): View
    {
        return view('backend.departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department): RedirectResponse
    {
        // 1. Validate
        $validatedData = $request->validate([
            // Ignore the current department's ID for the unique check
            'name'        => 'required|min:2|max:100|unique:departments,name,' . $department->id,
            'description' => 'nullable|max:500',
        ], [
            'name.min' => 'The department name must be at least 2 characters.',
            'name.max' => 'The department name cannot exceed 100 characters.',
        ]);

        // 2. Update
        $department->update($validatedData);

        return redirect()->route('admin.departments.index')
                        ->with('success', 'Department updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department): RedirectResponse
    {
        $department->delete();

        return redirect()->route('admin.departments.index')
                        ->with('success', 'Department deleted successfully.');
    }
}