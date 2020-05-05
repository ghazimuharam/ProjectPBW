@extends('admin.layout.main')
@section('title','Add Candidate')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add New User</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form action="/admin/userManagement/tambah" method="post">
                                        {{ csrf_field() }}
                                       
                                        <div class="form-group">
                                            <label>How many voters there will be?</label>
                                            <input type="text" name="uniquecode" class="form-control" placeholder="e.g., 500">
                                            @if($errors->has('uniquecode'))
                                                <div class="text-danger">
                                                    {{ $errors->first('uniquecode')}}
                                                </div>
                                            @endif
                                        </div>
                                        
                                        <div class="text-center d-none d-md-inline"><br><br>
                                            <button type="submit" class="btn btn-primary col-xl-2">Generate</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
