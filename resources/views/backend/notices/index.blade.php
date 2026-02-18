@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Notice Board</h1>
        <a href="{{ route('admin.notices.create') }}" class="btn btn-info btn-sm pull-right">Add Notice</a>
    </div>

    <div class="content">
        <div class="row">
            @foreach($notices as $notice)
            <div class="col-md-4">
                <div class="card m-b-3">
                    <div class="card-body">
                        <h5 class="font-weight-bold">{{ $notice->title }}</h5>
                        <p class="text-muted"><i class="fa fa-calendar"></i> {{ $notice->notice_date }}</p>
                        <p>{{ Str::limit($notice->description, 100) }}</p>
                        <form action="{{ route('admin.notices.destroy', $notice->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection