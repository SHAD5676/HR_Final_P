<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use Illuminate\Support\Facades\Auth; 

class LeaveController extends Controller
{
   
    public function index()
    {
        $leaves = Leave::with('employee')->orderBy('created_at', 'desc')->get();
        return view('backend.leaves.index', compact('leaves'));
    }

  
    public function create()
    {
        return view('backend.leaves.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'leave_type' => 'required',
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
            'reason'     => 'required|string|max:255',
        ]);

        Leave::create([
            'employee_id' => Auth::guard('employee')->id(), 
            'leave_type'  => $request->leave_type,
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,
            'reason'      => $request->reason,
            'status'      => 'pending',
        ]);

        return redirect()->route('employee.leaves.create')->with('success', 'Leave request submitted successfully.');
    }

  
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected,pending',
        ]);

        $leave = Leave::findOrFail($id);
        $leave->status = $request->status;
        $leave->save();

        return redirect()->back()->with('success', 'Leave status updated successfully.');
    }
}