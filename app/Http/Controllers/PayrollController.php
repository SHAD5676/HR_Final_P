<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\Employee; 

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $payrolls = Payroll::with('employee')->latest()->get();
        return view('backend.payroll.index', compact('payrolls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        $employees = Employee::all();
        return view('backend.payroll.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    // 1. Validate
    $request->validate([
        'employee_id'  => 'required|exists:employees,id',
        'month'        => 'required',
        'year'         => 'required|digits:4',
        'basic_salary' => 'required|numeric|min:0',
        'absent_days'  => 'nullable|numeric|min:0', // NEW FIELD
        'allowance'    => 'nullable|numeric|min:0',
        'status'       => 'required',
    ]);

  
    $basic       = $request->basic_salary;
    $allowance   = $request->allowance ?? 0;
    $absent_days = $request->absent_days ?? 0;

   
    $daily_salary = $basic / 30;
    $absent_deduction = $daily_salary * $absent_days;

  
    $total_deduction = $absent_deduction + ($request->deduction ?? 0);

    $net_salary = ($basic + $allowance) - $total_deduction;

  
    \App\Models\Payroll::create([
        'employee_id'  => $request->employee_id,
        'month'        => $request->month,
        'year'         => $request->year,
        'basic_salary' => $basic,
        'allowance'    => $allowance,
        'deduction'    => $total_deduction, 
        'net_salary'   => $net_salary,
        'status'       => $request->status,
    ]);

    return redirect()->route('admin.payroll.index')
                     ->with('success', 'Payroll generated with attendance deduction!');
}


public function show($id)
{
    $payroll = \App\Models\Payroll::with('employee')->findOrFail($id);
    return view('backend.payroll.invoice', compact('payroll'));
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payroll $payroll)
    {
        $payroll->delete();
        return redirect()->route('admin.payroll.index')
                         ->with('success', 'Payroll record deleted.');
    }


public function employeeIndex() {
    $payrolls = \App\Models\Payroll::where('employee_id', auth('employee')->id())
                ->latest()->get();
    return view('backend.payroll.employee_index', compact('payrolls'));
}


public function employeeShow($id) {
    $payroll = \App\Models\Payroll::where('employee_id', auth('employee')->id())
                ->findOrFail($id);
    return view('backend.payroll.invoice', compact('payroll')); 
}
}