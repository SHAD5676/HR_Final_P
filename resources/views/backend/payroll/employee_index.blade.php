@extends("backend.layouts.master")
@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one"><h1>My Salary History</h1></div>
    <div class="content">
        <div class="card"><div class="card-body"><div class="table-responsive">
            <table class="table table-hover">
                <thead class="bg-primary text-white"><tr><th>Month</th><th>Net Salary</th><th>Status</th><th>Action</th></tr></thead>
                <tbody>
                    @foreach($payrolls as $p)
                    <tr>
                        <td>{{ $p->month }} {{ $p->year }}</td>
                        <td>${{ number_format($p->net_salary, 2) }}</td>
                        <td><span class="label label-{{ $p->status=='paid'?'success':'warning' }}">{{ ucfirst($p->status) }}</span></td>
                        <td><a href="{{ route('employee.payroll.show', $p->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> View Slip</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div></div></div>
    </div>
</div>
@endsection