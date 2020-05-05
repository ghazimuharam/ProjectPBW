@extends('admin.layout.main')
@section('title','User Management')

@section('content')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User Management</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="d-flex justify-content-end">
                                        <a class="btn p-1 mr-3 col-xl-2 btn-secondary" href="">Export to Excel</a>
                                        <a class="btn p-1 col-xl-2 btn-info" href="/admin/addUser">Make UniqueCodes</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table mt-3" id="dataTable">
                                            <thead class="thead-dark text-center">
                                                <tr>
                                                    <th>No</th>
                                                    <th>UniqueCode</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($data as $d)
                                                    <tr>
                                                        <td class="text-center">{{ $i++ }}</td>
                                                        <td class="text-center">{{ $d->uniquecode }}</td>
                                                        <td class="text-center">{{ $d->status }}</td>
                                                        <td class="text-center">
                                                            <a href="/admin/userManagement/ubahUser/{{ $d -> id }}" class="btn btn-warning">Change</a>
                                                            <a href="/admin/userManagement/hapusUser/{{ $d -> id }}" class="btn btn-danger">Remove</a>
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
                </div>
            </div>
        </div>
    </div>
@endsection
