@extends('admin.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Seller Callback Request</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Seller Callback Request</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <a href="{{ route('admin.request.create') }}" class="btn btn-primary">Add User</a> --}}
                            @if (session()->has('message'))
                                <p class="flashMessage">{{ session()->get('message') }}</p>
                            @endif
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Mobile No</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($callbacks as $callback)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $callback->firstname }}</td>
                                            <td>{{ $callback->lastname }}</td>
                                            <td>{{ $callback->email }}</td>
                                            <td>{{ $callback->mobile }}</td>
                                            <td>
                                                <a href="{{ route('admin.request.edit', encrypt($callback->id)) }}"
                                                    class="btn btn-primary btn-sm">View</a>
                                                <a href="{{ route('admin.request.delete', encrypt($callback->id)) }}"
                                                    class="btn btn-primary btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $callbacks->links() }}
                        </div>
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
