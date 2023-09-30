@extends('admin.layout.master')
@section('content')
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color: black;
        }
    </style>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order #{{ $order_info->id }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
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
                        <form action="{{ route('admin.order.update') }}" method="POST">
                            <input type="hidden" name="order_id" value="{{ encrypt($order_info->id) }}">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ $order_info->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" class="form-control" name="email"
                                        value="{{ $order_info->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mobile No</label>
                                    <input type="text" class="form-control" name="mobile"
                                        value="{{ $order_info->mobile }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Hotel Name</label>
                                    <input type="text" class="form-control" name="hotel_name"
                                        value="{{ $order_info->hotel_name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Hotel Location</label>
                                    <input type="text" class="form-control" name="hotel_location"
                                        value="{{ $order_info->hotel_location }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Booking Dates</label>
                                    <input type="text" class="form-control" name="date_range"
                                        value="{{ $order_info->date_range }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Room Count</label>
                                    <input type="text" class="form-control" name="room_count"
                                        value="{{ $order_info->room_count }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Guest Count</label>
                                    <input type="text" class="form-control" name="guest_count"
                                        value="{{ $order_info->guest_count }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Total Amount</label>
                                    <input type="text" class="form-control" name="total"
                                        value="{{ $order_info->total }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Payment Method</label>
                                    <input type="text" class="form-control" name="payment_method"
                                        value="{{ $order_info->payment_method }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Booked Date</label>
                                    <input type="text" class="form-control" name="created_at"
                                        value="{{ $order_info->created_at }}" readonly>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
