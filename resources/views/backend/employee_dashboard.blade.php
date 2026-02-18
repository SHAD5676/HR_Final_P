@extends("backend.layouts.master")

@section("content")

<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Employee Dashboard</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Dashboard</li>
        </ol>
    </div>

    <div class="content">

        <div class="row m-b-3">
            <div class="col-lg-3 col-xs-6">
                <div class="info-box"> 
                    <span class="info-box-icon bg-green"><i class="ti-check-box"></i></span>
                    <div class="info-box-content"> 
                        <span class="info-box-text">Present This Month</span> 
                        <span class="info-box-number">
                            {{ \App\Models\Attendance::where('employee_id', auth('employee')->id())
                                ->whereMonth('created_at', date('m'))
                                ->count() }} Days
                        </span> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="info-box"> 
                    <span class="info-box-icon bg-red"><i class="ti-na"></i></span>
                    <div class="info-box-content"> 
                        <span class="info-box-text">Absent / Leave</span> 
                        <span class="info-box-number">
                           {{ \App\Models\Leave::where('employee_id', auth('employee')->id())
                                ->where('status', 'approved')
                                ->count() }} Days
                        </span> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="info-box"> 
                    <span class="info-box-icon bg-aqua"><i class="ti-wallet"></i></span>
                    <div class="info-box-content"> 
                        <span class="info-box-text">Last Salary</span> 
                        <span class="info-box-number">
                            ${{ \App\Models\Payroll::where('employee_id', auth('employee')->id())->latest()->first()->net_salary ?? '0.00' }}
                        </span> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="info-box"> 
                    <span class="info-box-icon bg-orange"><i class="ti-gift"></i></span>
                    <div class="info-box-content"> 
                        <span class="info-box-text">Next Holiday</span> 
                        <span class="info-box-number" style="font-size: 14px;">
                            {{ \App\Models\Holiday::where('start_date', '>=', date('Y-m-d'))->first()->title ?? 'None' }}
                        </span> 
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-b-3">
            <div class="col-12">
                <div class="alert alert-info shadow-sm" style="border-left: 5px solid #00c0ef;">
                    <strong><i class="fa fa-bullhorn"></i> Latest Notice:</strong> 
                    <span class="ml-2">
                        {{ \App\Models\Notice::where('is_active', 1)->latest()->first()->title ?? 'No new notices.' }}
                    </span>
                    @if(\App\Models\Notice::where('is_active', 1)->exists())
                        <a href="{{ route('employee.notices.index') }}" class="pull-right text-info font-weight-bold">
                             View All <i class="fa fa-arrow-right"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card m-b-3">
                    <div class="card-body">
                        <h5 class="card-title">Mark Attendance</h5>
                        <p class="text-muted">Current Date: {{ date('d M, Y') }}</p>

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <div class="row text-center">
                            <div class="col-6">
                                <form action="{{ route('employee.attendance.clock_in') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-block btn-lg" style="height: 80px;">
                                        <i class="fa fa-sign-in" style="font-size: 30px;"></i><br> Clock In
                                    </button>
                                </form>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('employee.attendance.clock_out') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-block btn-lg" style="height: 80px;">
                                        <i class="fa fa-sign-out" style="font-size: 30px;"></i><br> Clock Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card m-b-3">
                    <div class="card-body">
                        <h5 class="card-title">Last 5 Days Attendance</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>In</th>
                                        <th>Out</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $history = \App\Models\Attendance::where('employee_id', auth('employee')->id())
                                                    ->latest()->take(5)->get();
                                    @endphp
                                    @foreach($history as $rec)
                                    <tr>
                                        <td>{{ $rec->date }}</td>
                                        <td><span class="text-success">{{ $rec->clock_in }}</span></td>
                                        <td><span class="text-danger">{{ $rec->clock_out ?? '--' }}</span></td>
                                        <td>
                                            @if($rec->status == 'late') <span class="badge badge-warning">Late</span>
                                            @else <span class="badge badge-success">Present</span>
                                            @endif
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
    </div>
</div>
@endsection