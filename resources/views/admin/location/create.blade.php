@extends('admin.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Banner</h1>
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
                        <form action="{{ route('admin.location.save') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Price">Location Name</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="Price">Location</label>
                                    <input type="text" class="form-control" name="location" placeholder="Location">
                                </div>
                                <div class="form-group">
                                    <label for="Price">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Description" rows="6"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Price">Sort order</label>
                                    <input type="text" class="form-control" name="status" placeholder="Status">
                                </div>
                                <div class="form-group">
                                    <label for="banner">Banner Images</label>
                                    <div class="needsclick dropzone" id="document-dropzone"></div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
