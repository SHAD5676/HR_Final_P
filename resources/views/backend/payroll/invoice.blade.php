@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Payslip Invoice</h1>
        <button onclick="window.print()" class="btn btn-primary pull-right">
            <i class="fa fa-print"></i> Print Payslip
        </button>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h2 class="font-weight-bold text-uppercase">Payslip</h2>
                        <p class="text-muted">Month: {{ $payroll->month }}, {{ $payroll->year }}</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <h3>INVOICE #{{ str_pad($payroll->id, 5, '0', STR_PAD_LEFT) }}</h3>
                        <span class="label label-{{ $payroll->status == 'paid' ? 'success' : 'danger' }}">
                            {{ strtoupper($payroll->status) }}
                        </span>
                    </div>
                </div>

                <hr>

                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h5 class="font-weight-bold">Employee Details:</h5>
                        <p>
                            <strong>Name:</strong> {{ $payroll->employee->name }}<br>
                            <strong>Employee ID:</strong> #{{ $payroll->employee->id }}<br>
                            <strong>Department:</strong> {{ $payroll->employee->department->name ?? 'General' }}<br>
                            <strong>Email:</strong> {{ $payroll->employee->email }}
                        </p>
                    </div>
                    <div class="col-sm-6 text-right">
    <h5 class="font-weight-bold">Company Details:</h5>
    <p>
        @php $setting = \App\Models\Setting::first(); @endphp
        
        <strong>{{ $setting->company_name ?? 'My Company' }}</strong><br>
        {{ $setting->company_address ?? 'Address not set' }}<br>
        Phone: {{ $setting->company_phone ?? 'N/A' }}
    </p>
</div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-light">
                            <tr>
                                <th>Description</th>
                                <th class="text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Basic Salary</td>
                                <td class="text-right text-success">+ ${{ number_format($payroll->basic_salary, 2) }}</td>
                            </tr>
                            <tr>
                                <td>Allowance / Bonus</td>
                                <td class="text-right text-success">+ ${{ number_format($payroll->allowance, 2) }}</td>
                            </tr>
                            <tr>
                                <td>Deductions (Absence, Tax, etc.)</td>
                                <td class="text-right text-danger">- ${{ number_format($payroll->deduction, 2) }}</td>
                            </tr>
                            <tr class="font-weight-bold" style="font-size: 1.2em;">
                                <td>NET SALARY (Total Pay)</td>
                                <td class="text-right">${{ number_format($payroll->net_salary, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12 text-center text-muted">
                        <p>This is a computer-generated payslip and does not require a signature.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection