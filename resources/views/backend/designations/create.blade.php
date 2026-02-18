@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Add Designation</h1>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.designations.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Designation Name</label>
                        <input type="text" name="name" class="form-control" placeholder="e.g. Senior Manager" required>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ route('admin.designations.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection