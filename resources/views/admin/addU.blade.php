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
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control">
                                            @if($errors->has('name'))
                                                <div class="text-danger">
                                                    {{ $errors->first('name')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Uniquecode</label>
                                            <input type="text" name="uniquecode" class="form-control">
                                            @if($errors->has('uniquecode'))
                                                <div class="text-danger">
                                                    {{ $errors->first('uniquecode')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" name="status" class="form-control">
                                            @if($errors->has('status'))
                                                <div class="text-danger">
                                                    {{ $errors->first('status')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="text-center d-none d-md-inline"><br><br>
                                            <button type="submit" class="btn btn-primary col-xl-2">ADD</button>
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
