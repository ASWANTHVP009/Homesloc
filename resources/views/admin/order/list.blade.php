@extends('admin.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Orders</li>
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
                                        <th style="width: 10px">Order ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile No</th>
                                        <th>Hotel name</th>
                                        <th>Hotel Location</th>
                                        <th>Booking Date</th>
                                        <th>Rooms</th>
                                        <th>Guests</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->mobile }}</td>
                                            <td>{{ $order->hotel_name }}</td>
                                            <td>{{ $order->hotel_location }}</td>
                                            <td>{{ $order->date_range }}</td>
                                            <td>{{ $order->room_count }}</td>
                                            <td>{{ $order->guest_count }}</td>
                                            <td>{{ $order->total }}</td>
                                            <td>
                                                <a href="{{ route('admin.order.edit', encrypt($order->id)) }}"
                                                    class="btn btn-primary btn-sm">View</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $orders->links() }}
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
