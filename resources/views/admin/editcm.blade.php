@extends('admin.layout.main')
@section('title','Change Candidate Data')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Change Data Candidate</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form action="/admin/candidateManagement/update/{{ $data -> id }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="nama" class="form-control" placeholder="{{ $data -> nama }}">
                                            @if($errors->has('nama'))
                                                <div class="text-danger">
                                                    {{ $errors->first('nama')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label><br>
                                            <input type="file" name="foto">
                                            @if($errors->has('foto'))
                                                <div class="text-danger">
                                                    {{ $errors->first('foto')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Bio</label>
                                            <input type="text" name="bio" class="form-control" placeholder="{{ $data -> bio }}">
                                            @if($errors->has('bio'))
                                                <div class="text-danger">
                                                    {{ $errors->first('bio')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="text-center d-none d-md-inline"><br><br>
                                            <button type="submit" class="btn btn-primary col-xl-2">CHANGE</button>
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
