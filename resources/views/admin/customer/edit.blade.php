@extends('admin.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                        <form action="{{ route('admin.customer.update') }}" method="POST">
                            <input type="hidden" name="customer_id" value="{{ encrypt($customers->id) }}">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter First Name"
                                        value="{{ $customers->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" class="form-control" name="last_name"
                                        placeholder="Enter Last Name" value="{{ $customers->last_name }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter email"
                                        value="{{ $customers->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Mobile No</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No"
                                        value="{{ $customers->mobile }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password"
                                        value="">
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
