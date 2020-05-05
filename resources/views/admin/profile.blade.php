@extends('admin.layout.main')
@section('title','Profile')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body p-4">
                                    <div class="col-xl-7">
                                        <form action="/admin/profile" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $admin->email }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputUsername" name="username" value="{{ $admin->username }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword" name="password">
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <button type="submit" name="submit "class="btn btn-primary col-xl-3 mr-3">Edit Profile</button>
                                            </div>
                                        </form>
                                        
                                        @if (session('notif')) 
                                            <h6 class="text-success">{{ session('notif') }}</h6>
                                        @else
                                            <h6 class="text-danger">{{ session('error') }}</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
