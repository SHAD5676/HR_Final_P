@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Payroll System</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Payroll</li>
        </ol>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12 text-right">
                        <a href="{{ route('admin.payroll.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Generate Payroll
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Employee</th>
                                <th>Month/Year</th>
                                <th>Basic</th>
                                <th>Allowance</th>
                                <th>Deduction</th>
                                <th>Net Salary</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payrolls as $payroll)
                            <tr>
                                <td>{{ $payroll->employee->name ?? 'Unknown' }}</td>
                                <td>{{ $payroll->month }} {{ $payroll->year }}</td>
                                <td>${{ number_format($payroll->basic_salary, 2) }}</td>
                                <td>+ ${{ number_format($payroll->allowance, 2) }}</td>
                                <td>- ${{ number_format($payroll->deduction, 2) }}</td>
                                <td><strong>${{ number_format($payroll->net_salary, 2) }}</strong></td>
                                <td>
                                    @if($payroll->status == 'paid')
                                        <span class="label label-success">Paid</span>
                                    @else
                                        <span class="label label-warning">Pending</span>
                                    @endif
                                </td>
                                
                                <td>
                                    <a href="{{ route('admin.payroll.show', $payroll->id) }}" class="btn btn-info btn-sm" title="View Invoice">
                                        <i class="fa fa-eye"></i> Invoice
                                    </a>

                                    <form action="{{ route('admin.payroll.destroy', $payroll->id) }}" method="POST" style="display:inline;">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this record?')">
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