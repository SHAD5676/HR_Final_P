@extends('backend.layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Apply for Leave</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Apply Leave</li>
        </ol>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-blue">
                        <h5 class="text-white m-b-0">Leave Application Form</h5>
                    </div>
                    <div class="card-body">
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                            </div>
                        @endif

                        <form action="{{ route('employee.leaves.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Leave Type</label>
                                <select class="form-control" name="leave_type" required>
                                    <option value="Sick">Sick Leave</option>
                                    <option value="Casual">Casual Leave</option>
                                    <option value="Emergency">Emergency Leave</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="date" class="form-control" name="start_date" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" class="form-control" name="end_date" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Reason</label>
                                <textarea class="form-control" rows="3" name="reason" placeholder="Why do you need leave?" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection