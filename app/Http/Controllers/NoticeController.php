<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{


// Add this method to your NoticeController
public function employeeIndex()
{
    // Fetch only active notices, newest first
    $notices = Notice::where('is_active', 1)->orderBy('notice_date', 'desc')->get();
    return view('backend.notices.employee_index', compact('notices'));
}
    public function index() {
        $notices = Notice::latest()->get();
        return view('backend.notices.index', compact('notices'));
    }

    public function create() {
        return view('backend.notices.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'notice_date' => 'required|date',
        ]);

        Notice::create($request->all());
        return redirect()->route('admin.notices.index')->with('success', 'Notice posted!');
    }

    public function destroy(Notice $notice) {
        $notice->delete();
        return back()->with('success', 'Notice deleted.');
    }
}