@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Manual Attendance Entry</h1>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ route('admin.attendance.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employee Name</label>
                                <select name="employee_id" class="form-control" required>
                                    <option value="">-- Select Employee --</option>
                                    @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }} (ID: {{ $employee->id }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" name="date" class="form-control" value="{{ date('Y-m-d') }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Clock In Time</label>
                                <input type="time" name="clock_in" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Clock Out Time (Optional)</label>
                                <input type="time" name="clock_out" class="form-control">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save Attendance</button>
                    <a href="{{ route('admin.attendance.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection