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
                    <h1>Callbacks</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Callbacks</li>
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
                        <form action="{{ route('admin.request.update') }}" method="POST">
                            <input type="hidden" name="callback_id" value="{{ encrypt($callbacks->id) }}">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="Enter Name"
                                        value="{{ $callbacks->firstname }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name"
                                        value="{{ $callbacks->lastname }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email"
                                        value="{{ $callbacks->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Mobile No</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No"
                                        value="{{ $callbacks->mobile }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Property Name</label>
                                    <input type="text" class="form-control" name="property_name"
                                        placeholder="Enter Property Name" value="{{ $callbacks->property_name }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Location</label>
                                    <input type="text" class="form-control" name="location" placeholder="Enter location"
                                        value="{{ $callbacks->location }}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="Enter price"
                                        value="{{ $callbacks->price }}">
                                </div>

                                <div class="form-group">

                                    <label>Hotel Type</label>

                                    <select class="form-control select2" style="width: 100%; height: 40px;"
                                        name="hotel_type">



                                        @foreach ($types as $type)
                                            @if ($type->id == (int) $callbacks->hotel_type)
                                                <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                                            @else
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endif
                                        @endforeach



                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="name">Checkin Time</label>
                                    <input type="text" class="form-control" name="checkin"
                                        placeholder="Enter checkin time" value="{{ $callbacks->checkin }}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Checkout Time</label>
                                    <input type="text" class="form-control" name="checkout"
                                        placeholder="Enter checkout time" value="{{ $callbacks->checkout }}">
                                </div>
                                <div class="form-group">

                                    <label>Amentities</label>

                                    <select class="select2" multiple="multiple" data-placeholder="Select a Amentity"
                                        style="width: 100%;" name="amentities[]">

                                        @foreach ($amentities as $amentity)
                                            @if (str_contains($callbacks->amentities, $amentity->id))
                                                <option value="{{ $amentity->id }}" selected>{{ $amentity->name }}

                                                </option>
                                            @else
                                                <option value="{{ $amentity->id }}">{{ $amentity->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>

                                </div>



                                <div class="form-group">

                                    <label>Menus</label>

                                    <select class="select2" multiple="multiple" data-placeholder="Select a Menu"
                                        style="width: 100%;" name="menus[]">

                                        @foreach ($menus as $menu)
                                            @if (str_contains($callbacks->menus, $menu->id))
                                                <option value="{{ $menu->id }}" selected>{{ $menu->name }}

                                                </option>
                                            @else
                                                <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>

                                </div>

                            </div>
                            <!-- /.card-body -->
                            {{-- <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div> --}}
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
