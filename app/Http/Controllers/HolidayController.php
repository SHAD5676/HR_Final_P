<?php
namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function index()
    {
       
        $holidays = Holiday::orderBy('start_date', 'asc')->get();
        return view('backend.holidays.index', compact('holidays'));
    }

    public function create()
    {
        return view('backend.holidays.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        Holiday::create($request->all());

        return redirect()->route('admin.holidays.index')->with('success', 'Holiday added to calendar.');
    }

    public function destroy(Holiday $holiday)
    {
        $holiday->delete();
        return back()->with('success', 'Holiday removed.');
    }

    public function employeeIndex() {
    $holidays = \App\Models\Holiday::orderBy('start_date', 'asc')->get();
    return view('backend.holidays.employee_index', compact('holidays'));
}
}