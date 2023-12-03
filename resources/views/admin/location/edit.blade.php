@extends('admin.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Banner</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('admin.location.update') }}" method="POST">
                            <input type="hidden" name="banner_id" value="{{ encrypt($banners->id) }}">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="Price">Location Name</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title"
                                        value="{{ $banners->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="Price">Location</label>
                                    <input type="text" class="form-control" name="location" placeholder="Location"
                                        value="{{ $banners->location }}">
                                </div>
                                <div class="form-group">
                                    <label for="Price">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Description" rows="6"> {{ $banners->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Price">Sort order</label>
                                    <input type="text" class="form-control" name="status" placeholder="Status"
                                        value="{{ $banners->status }}">
                                </div>

                                <div class="form-group">
                                    <label>Uploaded Images</label>
                                    <div class="col-md-12" style="display: flex">
                                        <div class="col-md-2">
                                            <img loading="auto" importance="auto"
                                                src="{{ URL::asset('/uploads/' . $banners->path) }}" class="c-hwlvh4">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
