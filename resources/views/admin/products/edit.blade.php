@extends('admin.layout.master')

@section('content')
    <style type="text/css">
        .container {
            position: relative;
            width: 100px;
            height: 100px;
            float: left;
            margin-left: 10px;
        }

        .checkbox {
            position: absolute;
            bottom: 0px;
            right: 0px;
        }

        .checkbox {
            top: 0;
        }

        [type='checkbox'],
        [type='radio'] {
            height: 2rem;
            width: 2rem;
            border-radius: 8px !important;
        }
    </style>

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Create Properties</h1>

                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active">General Form</li>

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

                        <form action="{{ route('admin.product.update') }}" method="POST" enctype="multipart/form-data"
                            id="create">

                            <input type="hidden" name="product_id" value="{{ encrypt($product->id) }}">

                            @csrf

                            <div class="card-body">

                                <div class="form-group">

                                    <label for="name">Property Name</label>

                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Property Name" value="{{ $product->name }}">

                                </div>



                                <div class="col-md-12">

                                    <div class="card card-outline card-info">

                                        <div class="card-header">

                                            <h3 class="card-title">Description</h3>

                                        </div>

                                        <div class="card-body">

                                            <textarea id="summernote" rows="5" name="description"> {{ $product->description }}</textarea>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="Price">Price</label>

                                    <input type="text" class="form-control" name="price" placeholder="Enter Price"
                                        value="{{ $product->price }}">

                                </div>

                                <div class="form-group">

                                    <label for="Price">Special Price</label>

                                    <input type="text" class="form-control" name="special_price"
                                        placeholder="Enter Special Price" value="{{ $product->special_price }}">

                                </div>

                                <div class="form-group">

                                    <label for="location">Location</label>

                                    <input type="text" class="form-control" name="location" placeholder="Enter location"
                                        value="{{ $product->location }}">

                                </div>

                                <div class="form-group">

                                    <label for="location">Star Rating</label>

                                    <input type="text" class="form-control" name="rating" placeholder="Enter rating"
                                        value="{{ $product->rating }}">

                                </div>


                                <div class="form-group">
                                    <label for="geolocation">Geolocation</label>

                                    <input class="form-control" id="search" type="text" placeholder="Geo Location"
                                        autocomplete="on" name="geolocation" value="{{ $product->searchlocation }}" />

                                    <input type="hidden" value="{{ $latitude }}" name="latitude" id="latitude">
                                    <input type="hidden" value="{{ $longitude }}" name="longitude" id="longitude">
                                </div>



                                <!-- <div class="form-group">

                                        <label for="geolocation">Geolocation</label>

                                        <input type="text" class="form-control" name="geolocation"

                                            placeholder="Enter Geo Location" value="{{ $product->geolocation }}">

                                    </div> -->

                                <div class="form-group">

                                    <label for="quote">Hotel Quote</label>

                                    <input type="text" class="form-control" name="quote" placeholder="Enter Quote"
                                        value="{{ $product->quote }}">

                                </div>

                                <div class="form-group">

                                    <label>Hotel Type</label>

                                    <select class="form-control select2" style="width: 100%; height: 40px;"
                                        name="hotel_type">



                                        @foreach ($types as $type)
                                            @if ($type->id == (int) $product->hotel_type)
                                                <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                                            @else
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endif
                                        @endforeach



                                    </select>

                                </div>

                                <div class="form-group">

                                    <label for="checkin">Check In Time</label>

                                    <input type="text" class="form-control" name="checkin"
                                        placeholder="Enter Check In Time" value="{{ $product->checkin }}">

                                </div>

                                <div class="form-group">

                                    <label for="checkout">Check Out Time</label>

                                    <input type="text" class="form-control" name="checkout"
                                        placeholder="Enter Check Out Time" value="{{ $product->checkout }}">

                                </div>

                                <div class="form-group">

                                    <label>Amentities</label>

                                    <select class="select2" multiple="multiple" data-placeholder="Select a Amentity"
                                        style="width: 100%;" name="amentities[]">

                                        @foreach ($amentities as $amentity)
                                            @if (str_contains($product->amentities, $amentity->id))
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
                                            @if (str_contains($product->menus, $menu->id))
                                                <option value="{{ $menu->id }}" selected>{{ $menu->name }}

                                                </option>
                                            @else
                                                <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>

                                </div>



                                <div class="col-md-12">

                                    <div class="card card-outline card-info">

                                        <div class="card-header">

                                            <h3 class="card-title">Hotel Plicy</h3>

                                        </div>

                                        <div class="card-body">

                                            <textarea id="summernote-policy" rows="5" name="hotel_policy"> {{ $product->hotel_policy }}</textarea>

                                        </div>

                                    </div>

                                </div>



                                <div class="form-group">

                                    <label>Uploaded Images ( Please select the images, if you want to delete..)</label>

                                    <div class="col-md-12" style="display: flex">

                                        @foreach ($image_datas as $key => $image)
                                            <div class="col-md-2 ">
                                                <img loading="auto" importance="auto"
                                                    src="{{ URL::asset('/uploads/' . $image['path']) }}" class="c-hwlvh4"
                                                    style="width: 280px; height: 280px;">
                                                <input type="checkbox" name="del-images[{{ $image['id'] }}]"
                                                    class="checkbox" id="check1" value="{{ $image['id'] }}" />
                                            </div>




                                            <!-- <div class="col-md-2">

                                                    <img loading="auto" importance="auto"

                                                        src="{{ URL::asset('/uploads/' . $image['path']) }}" class="c-hwlvh4"

                                                        style="width: 280px; height: 280px;">

                                                </div> -->
                                        @endforeach

                                    </div>

                                </div>



                                <div class="form-group">

                                    <label for="document">Proprty Images</label>

                                    <div class="needsclick dropzone" id="document-dropzone"></div>

                                </div>



                                {{-- <div>

                                    <input type="file" id="images" class="filepond" name="image" multiple

                                        credits="false" />

                                </div> --}}



                                {{-- <div class="row">

                                    <div class="col-md-12">

                                        <div class="card card-default">

                                            <div class="card-header">

                                                <h3 class="card-title">Images</h3>

                                            </div>

                                            <div class="card-body">

                                                <div id="actions" class="row">

                                                    <div class="col-lg-6">

                                                        <div class="btn-group w-100">

                                                            <span class="btn btn-success col fileinput-button">

                                                                <i class="fas fa-plus"></i>

                                                                <span>Add files</span>

                                                            </span>

                                                            <button type="submit" class="btn btn-primary col start">

                                                                <i class="fas fa-upload"></i>

                                                                <span>Start upload</span>

                                                            </button>

                                                            <button type="reset" class="btn btn-warning col cancel">

                                                                <i class="fas fa-times-circle"></i>

                                                                <span>Cancel upload</span>

                                                            </button>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 d-flex align-items-center">

                                                        <div class="fileupload-process w-100">

                                                            <div id="total-progress"

                                                                class="progress progress-striped active"

                                                                role="progressbar" aria-valuemin="0" aria-valuemax="100"

                                                                aria-valuenow="0">

                                                                <div class="progress-bar progress-bar-success"

                                                                    style="width:0%;" data-dz-uploadprogress></div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="table table-striped files" id="previews">

                                                    <div id="template" class="row mt-2">

                                                        <div class="col-auto">

                                                            <span class="preview"><img src="data:," alt=""

                                                                    data-dz-thumbnail /></span>

                                                        </div>

                                                        <div class="col d-flex align-items-center">

                                                            <p class="mb-0">

                                                                <span class="lead" data-dz-name></span>

                                                                (<span data-dz-size></span>)

                                                            </p>

                                                            <strong class="error text-danger"

                                                                data-dz-errormessage></strong>

                                                        </div>

                                                        <div class="col-4 d-flex align-items-center">

                                                            <div class="progress progress-striped active w-100"

                                                                role="progressbar" aria-valuemin="0" aria-valuemax="100"

                                                                aria-valuenow="0">

                                                                <div class="progress-bar progress-bar-success"

                                                                    style="width:0%;" data-dz-uploadprogress></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-auto d-flex align-items-center">

                                                            <div class="btn-group">

                                                                <button class="btn btn-primary start">

                                                                    <i class="fas fa-upload"></i>

                                                                    <span>Start</span>

                                                                </button>

                                                                <button data-dz-remove class="btn btn-warning cancel">

                                                                    <i class="fas fa-times-circle"></i>

                                                                    <span>Cancel</span>

                                                                </button>

                                                                <button data-dz-remove class="btn btn-danger delete">

                                                                    <i class="fas fa-trash"></i>

                                                                    <span>Delete</span>

                                                                </button>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                        </div>

                                        <!-- /.card -->

                                    </div>

                                </div> --}}

                            </div>

                            <!-- /.card-body -->



                            <div class="card-footer">

                                <button type="submit" class="btn btn-primary" id="frm">Submit</button>

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

    {{-- <script>

        FilePond.registerPlugin(FilePondPluginImagePreview);

        const inputElement = document.querySelector('input[id="images"]');

        const pond = FilePond.create(inputElement);



        FilePond.setOptions({

            server: {{ route('admin.product.productSave') }}

        });

    </script> --}}

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb1d1Vqks7Wdf8OlUYl8BOGeFthpScZMY&libraries=places">
    </script>

    <script>
        function initAutocomplete1() {
            const input1 = document.getElementById('search');
            const autocomplete1 = new google.maps.places.Autocomplete(input1);
            google.maps.event.addListener(autocomplete1, 'place_changed', function() {
                var place = autocomplete1.getPlace();
                document.getElementById('latitude').value = place.geometry.location.lat();
                document.getElementById('longitude').value = place.geometry.location.lng();
            });
        }


        google.maps.event.addDomListener(window, 'load', initAutocomplete1);
    </script>
@endsection
