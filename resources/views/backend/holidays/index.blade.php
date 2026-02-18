@extends('backend.layouts.master')

@section('title', 'Holiday List')

@section('content')
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Holidays</h1>
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><i class="fa fa-angle-right"></i> Holiday List</li>
        </ol>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center m-b-3">
                    <h4 class="text-black">All Holidays</h4>
                    <a href="{{ route('admin.holidays.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>#</th>
                                <th>Holiday Name</th>
                                <th>Date</th>
                                <th>Day</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($holidays as $holiday)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- Use the database column names exactly --}}
                                <td>{{ $holiday->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($holiday->date)->format('d M, Y') }}</td>
                                <td><span class="badge badge-info">{{ \Carbon\Carbon::parse($holiday->date)->format('l') }}</span></td>
                                <td>
                                    <form action="{{ route('admin.holidays.destroy', $holiday->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <a href="{{ route('admin.holidays.edit', $holiday->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')"><i class="fa fa-trash"></i></button>
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