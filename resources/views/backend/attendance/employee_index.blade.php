@extends("backend.layouts.master")
@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one"><h1>My Attendance History</h1></div>
    <div class="content">
        <div class="card"><div class="card-body"><div class="table-responsive">
            <table class="table table-striped">
                <thead><tr><th>Date</th><th>Clock In</th><th>Clock Out</th><th>Status</th></tr></thead>
                <tbody>
                    @foreach($attendance as $a)
                    <tr>
                        <td>{{ $a->date }}</td>
                        <td><span class="text-success">{{ $a->clock_in }}</span></td>
                        <td><span class="text-danger">{{ $a->clock_out ?? '--:--' }}</span></td>
                        <td>
                            @if($a->status == 'late') <span class="badge badge-warning">Late</span>
                            @else <span class="badge badge-success">Present</span> @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div></div></div>
    </div>
</div>
@endsection