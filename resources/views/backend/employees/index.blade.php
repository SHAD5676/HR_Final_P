@extends ("backend.layouts.master")

@section("head")
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee List | Biz Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('')}}/dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('')}}/dist/css/style.css">
    <link rel="stylesheet" href="{{url('')}}/dist/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('')}}/dist/css/skins/_all-skins.min.css">
</head>
@endsection

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Employee Management</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><i class="fa fa-angle-right"></i> Employees</li>
        </ol>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                @if(session('success')) 
                    <div class="alert alert-success">{{session('success')}}</div>    
                @endif
                
                <h4 class="text-black">Employee List 
                    <span class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.employees.create') }}">Add Employee</a>
                    </span>
                </h4>
                
                <div class="table-responsive mt-3">
                    <table class="table table-hover">
                        <thead class="bg-blue text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Department</th>
                                <th scope="col">Email / Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><strong>{{ $employee->name }}</strong></td>
                                <td>{{ $employee->designation ?? 'N/A' }}</td>
                                {{-- Here we call the department relationship! --}}
                                <td>{{ $employee->departmentInfo ? $employee->departmentInfo->name : 'Unassigned' }}</td>
                                <td>
                                    {{ $employee->email }}<br>
                                    <small class="text-muted">{{ $employee->phone }}</small>
                                </td>
                                <td>
                                    <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="post"> 
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this employee?')">Delete</button>
                                    </form>  
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

