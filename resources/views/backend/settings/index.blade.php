@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>General Settings</h1>
    </div>

    <div class="content">
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header bg-blue">
                <h5 class="text-white m-b-0">Company Information</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.update') }}" method="POST">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Name <span class="text-danger">*</span></label>
                                <input type="text" name="company_name" class="form-control" value="{{ $setting->company_name ?? '' }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Currency Symbol</label>
                                <input type="text" name="currency_symbol" class="form-control" value="{{ $setting->currency_symbol ?? '$' }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Official Email</label>
                                <input type="email" name="company_email" class="form-control" value="{{ $setting->company_email ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="company_phone" class="form-control" value="{{ $setting->company_phone ?? '' }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Company Address</label>
                        <textarea name="company_address" class="form-control" rows="3">{{ $setting->company_address ?? '' }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Settings</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection