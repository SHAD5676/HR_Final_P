@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Edit Designation</h1>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.designations.update', $designation->id) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label>Designation Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $designation->name }}" required>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.designations.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection