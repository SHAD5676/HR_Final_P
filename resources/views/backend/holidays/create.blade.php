@extends('backend.layouts.master')

@section('title', 'Add Holiday')

@section('content')
<div class="content-header sty-one">
    <h1>Add Holiday</h1>
</div>

<div class="content">
    <div class="row justify-content-center"> <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-blue text-white">
                    <h4 class="m-b-0">Holiday Details</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.holidays.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Holiday Name</label>
                            <input type="text" name="name" class="form-control" placeholder="e.g. Eid-ul-Fitr" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>

                        <div class="m-t-3 text-center">
                            <button type="submit" class="btn btn-success">Save Holiday</button>
                            <a href="{{ route('admin.holidays.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection