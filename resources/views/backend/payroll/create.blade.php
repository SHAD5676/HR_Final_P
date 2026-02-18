@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Generate Payroll</h1>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.payroll.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Employee</label>
                                <select name="employee_id" class="form-control" required>
                                    <option value="">Select Employee</option>
                                    @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Month</label>
                                <select name="month" class="form-control">
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="number" name="year" class="form-control" value="{{ date('Y') }}" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Basic Salary ($)</label>
                                <input type="number" step="0.01" name="basic_salary" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Allowance ($)</label>
                                <input type="number" step="0.01" name="allowance" class="form-control" value="0">
                            </div>
                        </div>


                        <div class="col-md-4">
    <div class="form-group">
        <label>Absent Days</label>
        <input type="number" name="absent_days" class="form-control" value="0" placeholder="e.g. 2">
        <small class="text-danger">Salary will be deducted automatically based on this.</small>
    </div>
</div>



                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Deduction ($)</label>
                                <input type="number" step="0.01" name="deduction" class="form-control" value="0">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="paid">Paid</option>
                                    <option value="pending">Pending</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Generate Payslip</button>
                    <a href="{{ route('admin.payroll.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection