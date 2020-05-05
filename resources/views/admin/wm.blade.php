@extends('admin.layout.main')
@section('title','Website Management')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Website Management</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table cellpadding ="12">
                                        <tr>
                                            <td>Site Title</td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Tag Line</td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Time Zone</td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                    </table>
                                    <div class="text-center d-none d-md-inline"><br><br>
                                        <a class="btn btn-primary col-xl-2" href="">Create</a>
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
