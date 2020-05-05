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
                                <form action="/admin/websiteManagement" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <table cellpadding ="12">
                                            <tr>
                                                <td>Site Title</td>
                                                <td><input type="text" name="title" class="form-control" value="{{ $website->title }}"></td>
                                            </tr>
                                            <tr>
                                                <td>Tag Line</td>
                                                <td><input type="text" name="tagline" class="form-control" value="{{ $website->tagline }}"></td>
                                            </tr>
                                        </table>
                                        @if(session('success'))
                                            <div class="text-success ml-2">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <div class="mt-5">
                                            <button class="btn btn-primary col-xl-2" name="submit" type="submit" href="">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
