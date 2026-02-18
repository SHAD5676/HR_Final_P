@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>All Designations</h1>
        <a href="{{ route('admin.designations.create') }}" class="btn btn-primary btn-sm pull-right">
            <i class="fa fa-plus"></i> Add Designation
        </a>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>#</th>
                                <th>Designation Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($designations as $key => $d)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $d->name }}</td>
                                <td>
                                    <a href="{{ route('admin.designations.edit', $d->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admin.designations.destroy', $d->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this designation?')"><i class="fa fa-trash"></i></button>
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