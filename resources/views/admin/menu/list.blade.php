@extends('admin.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Menus</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Menus</li>
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
                            <a href="{{ route('admin.menu.create') }}" class="btn btn-primary">Add Menus</a>
                            @if (session()->has('message'))
                                <p class="flashMessage">{{ session()->get('message') }}</p>
                            @endif
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Sort Order</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $menu->name }}</td>
                                            <td>{{ $menu->sort_order }}</td>
                                            <td>{{ $menu->status }}</td>
                                            <td>
                                                <a href="{{ route('admin.seller.edit', encrypt($menu->id)) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <a href="{{ route('admin.menu.delete', encrypt($menu->id)) }}"
                                                    class="btn btn-primary btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $menus->links() }}
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
