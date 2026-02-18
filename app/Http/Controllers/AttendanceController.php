<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Employee; // Make sure this Model exists
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    // --- ADMIN METHODS ---

    public function adminIndex()
    {
        // Show latest attendance first
        $attendances = Attendance::with('employee')->latest('date')->get();
        return view('backend.attendance.index', compact('attendances'));
    }

    // 1. Show the "Add Attendance" Form
    public function create()
    {
        $employees = Employee::all(); // Get list for the dropdown
        return view('backend.attendance.create', compact('employees'));
    }

    // 2. Save the Manual Entry
    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'date' => 'required|date',
            'clock_in' => 'required',
            'clock_out' => 'nullable|after:clock_in',
        ]);

        // Check if attendance already exists for this person on this date
        $exists = Attendance::where('employee_id', $request->employee_id)
                            ->where('date', $request->date)
                            ->exists();

        if ($exists) {
            return back()->with('error', 'Attendance for this employee on this date already exists!');
        }

        // Calculate status automatically
        $status = 'Present';
        // Example: If clock in is after 10:00 AM, mark as Late (Optional logic)
        if (Carbon::parse($request->clock_in)->format('H:i') > '10:00') {
            $status = 'Late';
        }

        Attendance::create([
            'employee_id' => $request->employee_id,
            'date' => $request->date,
            'clock_in' => $request->clock_in,
            'clock_out' => $request->clock_out,
            'status' => $status,
        ]);

        return redirect()->route('admin.attendance.index')->with('success', 'Attendance added successfully.');
    }

    // 3. Delete an Entry (In case of mistake)
    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();
        return back()->with('success', 'Record deleted successfully.');
    }

    // --- EMPLOYEE METHODS (Existing) ---

    public function clockIn()
    {
        $employeeId = Auth::guard('employee')->id();
        $today = Carbon::today()->format('Y-m-d');
        $now = Carbon::now()->format('H:i:s');

        $attendance = Attendance::where('employee_id', $employeeId)->where('date', $today)->first();

        if ($attendance) {
            return redirect()->back()->with('error', 'You have already clocked in today!');
        }

        Attendance::create([
            'employee_id' => $employeeId,
            'date' => $today,
            'clock_in' => $now,
            'status' => 'Present',
        ]);

        return redirect()->back()->with('success', 'Clocked In Successfully at ' . $now);
    }

    public function clockOut()
    {
        $employeeId = Auth::guard('employee')->id();
        $today = Carbon::today()->format('Y-m-d');
        $now = Carbon::now()->format('H:i:s');

        $attendance = Attendance::where('employee_id', $employeeId)->where('date', $today)->first();

        if (!$attendance) {
            return redirect()->back()->with('error', 'You have not clocked in yet!');
        }

        $attendance->update(['clock_out' => $now]);

        return redirect()->back()->with('success', 'Clocked Out Successfully at ' . $now);
    }

    public function employeeHistory() {
        $attendance = Attendance::where('employee_id', auth('employee')->id())->latest()->get();
        return view('backend.attendance.employee_index', compact('attendance'));
    }
}