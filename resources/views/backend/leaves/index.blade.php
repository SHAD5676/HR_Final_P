@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Leave Requests</h1>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-blue text-white">
                            <tr>
                                <th>Employee</th>
                                <th>Type</th>
                                <th>Duration</th>
                                <th>Days</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
    @foreach($leaves as $leave)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            <div class="d-flex align-items-center">
                <img src="{{ asset('dist/img/img1.jpg') }}" class="img-circle" width="30" height="30" alt="">
                {{-- SAFETY CHECK: optional() prevents crash if employee is deleted --}}
                <span class="ml-2 font-weight-bold">{{ optional($leave->employee)->name ?? 'Unknown Employee' }}</span>
            </div>
        </td>
        <td><span class="label label-info">{{ ucfirst($leave->leave_type) }}</span></td>
        <td>
            {{ \Carbon\Carbon::parse($leave->start_date)->format('d M') }} - 
            {{ \Carbon\Carbon::parse($leave->end_date)->format('d M Y') }}
        </td>
        <td>
            {{ \Carbon\Carbon::parse($leave->start_date)->diffInDays(\Carbon\Carbon::parse($leave->end_date)) + 1 }} Days
        </td>
        <td>{{ Str::limit($leave->reason, 30) }}</td>
        <td>
            @if($leave->status == 'approved')
                <span class="label label-success">Approved</span>
            @elseif($leave->status == 'rejected')
                <span class="label label-danger">Rejected</span>
            @else
                <span class="label label-warning">Pending</span>
            @endif
        </td>
        <td>
            <form action="{{ route('admin.leaves.status', $leave->id) }}" method="POST" style="display:inline;">
                @csrf
                <input type="hidden" name="status" value="approved">
                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i></button>
            </form>

            <form action="{{ route('admin.leaves.status', $leave->id) }}" method="POST" style="display:inline;">
                @csrf
                <input type="hidden" name="status" value="rejected">
                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
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