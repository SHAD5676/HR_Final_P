<?php

namespace App\Http\Controllers;

use App\Models\Employee; 
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of employees (Admin View)
     */
    public function index()
    {
     
       $employees = Employee::with('departmentInfo')->latest()->paginate(10);
        
        return view('backend.employees.index', compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new employee.
     */
    public function create()
    {
        $departments = Department::all(); 
        return view('backend.employees.create', compact('departments'));
    }

    /**
     * Store a newly created employee in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        
            'email' => 'required|email|unique:employees,email', 
            'password' => 'required|min:8',
            'department_id' => 'required|exists:departments,id',
            'phone' => 'nullable|string|max:20',
            'designation' => 'nullable|string|max:100',
        ]);

     
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'department_id' => $request->department_id,
            'phone' => $request->phone,
            'designation' => $request->designation,
        ]);

        return redirect()->route('admin.employees.index')
                         ->with('success', 'Employee created successfully!');
    }

    /**
     * Show the form for editing the specified employee.
     */
    public function edit(Employee $employee) 
    {
        $departments = Department::all();
        return view('backend.employees.edit', compact('employee', 'departments'));
    }

    /**
     * Update the specified employee in storage (Admin Action).
     */
    public function update(Request $request, Employee $employee) 
    {
        $request->validate([
            'name' => 'required|string|max:255',
         
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'department_id' => 'required|exists:departments,id',
            'phone' => 'nullable|string|max:20',
            'designation' => 'nullable|string|max:100',
        ]);

        $data = $request->only(['name', 'email', 'department_id', 'phone', 'designation']);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $employee->update($data);

        return redirect()->route('admin.employees.index')
                         ->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified employee from storage.
     */
    public function destroy(Employee $employee) 
    {
        $employee->delete();
        return redirect()->route('admin.employees.index')
                         ->with('success', 'Employee deleted successfully!');
    }

    /* ===================================================
       EMPLOYEE SELF-PROFILE METHODS (For Employee Dashboard)
       =================================================== */

    public function profile() {
        $employee = auth('employee')->user();
        return view('backend.employees.profile', compact('employee'));
    }

    public function updateProfile(Request $request) {
        $employee = auth('employee')->user();
        
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:employees,email,'.$employee->id,
            'password' => 'nullable|min:6',
            'phone' => 'nullable|string|max:20'
        ]);

        $data = [
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ];

        if($request->password) {
            $data['password'] = Hash::make($request->password); 
        }

        $employee->update($data);

        return back()->with('success', 'Profile updated successfully!');
    }
}