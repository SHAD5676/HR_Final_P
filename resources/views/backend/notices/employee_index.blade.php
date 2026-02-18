@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Notice Archive</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('employee.dashboard') }}">Dashboard</a></li>
            <li><i class="fa fa-angle-right"></i> Notices</li>
        </ol>
    </div>

    <div class="content">
        <div class="row">
            @forelse($notices as $notice)
            <div class="col-lg-6 m-b-3">
                <div class="card shadow-sm border-left-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="text-blue font-weight-bold">{{ $notice->title }}</h5>
                                <p class="text-muted small"><i class="fa fa-calendar"></i> Posted on: {{ $notice->notice_date }}</p>
                            </div>
                            <div class="col-4 text-right">
                                <span class="badge badge-info">Announcement</span>
                            </div>
                        </div>
                        <hr>
                        <p class="card-text text-dark">{{ $notice->description }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    No notices have been posted yet.
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection