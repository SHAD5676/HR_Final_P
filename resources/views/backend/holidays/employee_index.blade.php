@extends("backend.layouts.master")
@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one"><h1>Holiday Calendar</h1></div>
    <div class="content">
        <div class="row">
            @foreach($holidays as $h)
            <div class="col-md-4">
                <div class="card m-b-3">
                    <div class="card-body text-center">
                        <h2 class="text-primary"><i class="ti-gift"></i></h2>
                        <h4>{{ $h->title }}</h4>
                        <p class="text-muted">{{ $h->start_date }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection