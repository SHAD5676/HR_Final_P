@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Post New Notice</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="{{ route('admin.notices.index') }}">Notices</a></li>
            <li><i class="fa fa-angle-right"></i> Create</li>
        </ol>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-blue">
                        <h5 class="text-white m-b-0">Notice Details</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.notices.store') }}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <label for="title">Notice Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="e.g., Eid-ul-Fitr Holiday Office Closure" value="{{ old('title') }}" required>
                                @error('title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="notice_date">Notice Date</label>
                                <input type="date" name="notice_date" class="form-control @error('notice_date') is-invalid @enderror" value="{{ old('notice_date', date('Y-m-d')) }}" required>
                                @error('notice_date')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Full Description</label>
                                <textarea name="description" rows="6" class="form-control @error('description') is-invalid @enderror" placeholder="Write the details of the notice here..." required>{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group m-t-2">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-paper-plane"></i> Publish Notice
                                </button>
                                <a href="{{ route('admin.notices.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="ti-announcement text-primary" style="font-size: 50px;"></i>
                        <h4 class="m-t-2">Notice Board Tip</h4>
                        <p>Notices published here will immediately appear on the **Employee Dashboard** alert section.</p>
                        <hr>
                        <small class="text-muted">Use clear titles so employees can identify the topic at a glance.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection