@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Attendance List</h1>
        <a href="{{ route('admin.attendance.create') }}" class="btn btn-primary btn-sm pull-right">
            <i class="fa fa-plus"></i> Add Manual Attendance
        </a>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Date</th>
                                <th>Employee</th>
                                <th>Clock In</th>
                                <th>Clock Out</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attendances as $attendance)
                            <tr>
                                <td>{{ $attendance->date }}</td>
                                <td>{{ $attendance->employee->name ?? 'Unknown' }}</td>
                                <td><span class="text-success">{{ $attendance->clock_in }}</span></td>
                                <td><span class="text-danger">{{ $attendance->clock_out ?? '--:--' }}</span></td>
                                <td>
                                    @if($attendance->status == 'Present')
                                        <span class="badge badge-success">Present</span>
                                    @else
                                        <span class="badge badge-warning">Late</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('admin.attendance.destroy', $attendance->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this record?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection