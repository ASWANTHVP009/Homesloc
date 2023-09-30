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
                        <form action="{{ route('admin.seller.update') }}" method="POST">
                            <input type="hidden" name="seller_id" value="{{ encrypt($sellers->id) }}">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                        value="{{ $sellers->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter User Name"
                                        value="{{ $sellers->username }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label>User Group</label>
                                    <select class="form-control select2" style="width: 100%; height: 40px;"
                                        name="user_group_idrequest">
                                        @foreach ($groups as $group)
                                            @if ($group->id == $sellers->user_group_id)
                                                <option value="{{ $group->id }}" selected>{{ $group->name }}</option>
                                            @else
                                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" style="width: 100%; height: 40px;" name="status">
                                        <option selected="selected" value="1">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
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
