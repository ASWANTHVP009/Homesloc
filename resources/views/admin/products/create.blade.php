@extends('admin.layout.master')

<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #313131;
        background-color: #454d55;
        border-radius: 3px;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #8a898e;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }

    .m-50 {
        margin-top: 20px;
    }

    .room-tab {
        border: 1px solid #c2baba;
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px;
        background: #313131;
    }
</style>
@section('content')
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

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('admin.product.productSave') }}" method="POST" enctype="multipart/form-data"
                            id="create">
                            @csrf

                            <div class="tab">
                                <button type="button" class="tablinks active"
                                    onclick="Tabs(event, 'General')">General</button>
                                <button type="button" class="tablinks" onclick="Tabs(event, 'Rooms')">Rooms</button>
                            </div>

                            <div class="card-body tabcontent" id="General" style="display: block">
                                <div class="form-group">
                                    <label for="name">Property Name</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Property Name" required>
                                </div>

                                <div class="col-md-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Description</h3>
                                        </div>
                                        <div class="card-body">
                                            <textarea id="summernote" rows="5" name="description">Description</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Price">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="Enter Price"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="Price">Special Price</label>
                                    <input type="text" class="form-control" name="special_price"
                                        placeholder="Enter Special Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" name="location" placeholder="Enter location"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="rating">Star Rating</label>
                                    <input type="text" class="form-control" name="rating" placeholder="Enter rating"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="geolocation">Geolocation</label>

                                    <input class="form-control" id="search" type="text" placeholder="Geo Location"
                                        autocomplete="on" name="geolocation" />

                                    <!-- <input type="text" class="form-control" name="geolocation"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        placeholder="Enter Geo Location" required> -->

                                    <input type="hidden" value="" name="latitude" id="latitude">
                                    <input type="hidden" value="" name="longitude" id="longitude">
                                </div>
                                <div class="form-group">
                                    <label for="quote">Hotel Quote</label>
                                    <input type="text" class="form-control" name="quote" placeholder="Enter Quote">
                                </div>
                                <div class="form-group">
                                    <label>Hotel Type</label>
                                    <select class="form-control select2" style="width: 100%; height: 40px;"
                                        name="hotel_type">

                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="checkin">Check In Time</label>
                                    <input type="text" class="form-control" name="checkin"
                                        placeholder="Enter Check In Time" required>
                                </div>
                                <div class="form-group">
                                    <label for="checkout">Check Out Time</label>
                                    <input type="text" class="form-control" name="checkout"
                                        placeholder="Enter Check Out Time" required>
                                </div>
                                <div class="form-group">
                                    <label>Amentities</label>
                                    <select class="select2" multiple="multiple" data-placeholder="Select a Amentity"
                                        style="width: 100%;" name="amentities[]">
                                        @foreach ($amentities as $amentity)
                                            <option value="{{ $amentity->id }}">{{ $amentity->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Menus</label>
                                    <select class="select2" multiple="multiple" data-placeholder="Select a Menu"
                                        style="width: 100%;" name="menus[]">
                                        @foreach ($menus as $menu)
                                            <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Hotel Policy</h3>
                                        </div>
                                        <div class="card-body">
                                            <textarea id="summernote-policy" rows="5" name="hotel_policy">Hotel Policy</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" style="width: 100%; height: 40px;"
                                        name="status">
                                        <option selected="selected" value="1">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
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

                            <div class="card-body tabcontent col-md-12" id="Rooms">

                                <span>Create your Room types........</span>

                                <?php $row = 1; ?>

                                {{-- <div class="room-tab">

                                    <div class="row">
                                        <div class="form-group col-md-4 m-50">
                                            <label for="Price">Price</label>
                                            <input type="text" class="form-control" name="price"
                                                placeholder="Enter Price" required>
                                        </div>
                                        <div class="form-group col-md-4 m-50">
                                            <label for="Price">Special Price</label>
                                            <input type="text" class="form-control" name="special_price"
                                                placeholder="Enter Special Price" required>
                                        </div>

                                        <div class="form-group col-md-4 m-50">
                                            <label>Status</label>
                                            <select class="form-control select2" style="width: 100%; height: 40px;"
                                                name="status">
                                                <option selected="selected" value="1">Enabled</option>
                                                <option value="0">Disabled</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Amentities</label>
                                        <select class="select2" multiple="multiple" data-placeholder="Select a Amentity"
                                            style="width: 100%;" name="amentities[]">
                                            @foreach ($amentities as $amentity)
                                                <option value="{{ $amentity->id }}">{{ $amentity->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="document">Proprty Images</label> <br>
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                </div> --}}


                            </div>
                            <div>
                                <button type="button" class="form-control" fdprocessedid="4v56i" id="madd-room"
                                    style="width:10%; float:right; margin-top:10px; margin-right:5px;"
                                    onclick="addRow();">Add
                                    Room</button>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="frm">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>

    <script type="text/javascript">
        var row = 1;

        function addRow() {


            html = '<div class="room-tab"  id="room-row' + row + '">';
            html += '<div class="row">';

            html += '<div class="form-group col-md-4 m-50">';
            html += '<label for="Price">Room Name</label>';
            html += ' <input type="text" class="form-control" name="product[' + row +
                '][pname]" placeholder = "Enter Room Name" required > ';
            html += '</div>';


            html += '<div class="form-group col-md-4 m-50">';
            html += '<label for="Price">Price</label>';
            html += ' <input type="text" class="form-control" name="product[' + row +
                '][pprice]" placeholder = "Enter Price" required > ';
            html += '</div>';
            html += '<div class="form-group col-md-4 m-50">';
            html += '<label for="Price">Special Price</label>';
            html +=
                '<input type="text" class="form-control" name="product[' + row +
                '][pspecial_price]" placeholder = "Enter Special Price" required > ';
            html += '</div>';

            html += '<div class="form-group col-md-4 m-50">';
            html += '<label>Status</label>';
            html += ' <select class="form-control select2" style="width: 100%; height: 40px;" name = "product[' + row +
                '][pstatus]" >';
            html += '<option selected = "selected" value = "1" > Enabled </option> ';
            html += '<option value = "0" > Disabled </option>';
            html += '</select>';
            html += '</div>';
            html += '</div>';
            html += '<div class="form-group">';
            html += '<label>Amentities</label>';
            html +=
                '<select class="select2" multiple="multiple" data-placeholder="Select a Amentity" style = "width: 100%;"  name = "product[' +
                row +
                '][pamentities][]">';
            @foreach ($amentities as $amentity)
                html += '<option value = "{{ $amentity->id }}" > {{ $amentity->name }} </option>';
            @endforeach
            html += '</select>';
            html += '</div>';
            html += '<div class="form-group">';
            html += '<label for="document">Proprty Images</label> <br>';
            html += '<input type="file" name="product[' + row + '][pimage]" id="pimage">';
            html += '</div>';

            html += '<button type="button" onclick="$(\'#room-row' + row +
                '\').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger" style="float: right; margin-top: -40px;"><i class="fa fa-minus-circle"></i></button>';

            html += '</div>';

            $('#Rooms').append(html);

            $('.select2').select2();

            row++;
        }
    </script>

    <script>
        function Tabs(evt, tab) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tab).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>


    {{-- <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        const inputElement = document.querySelector('input[id="images"]');
        const pond = FilePond.create(inputElement);

        FilePond.setOptions({
            server: {{ route('admin.product.productSave') }}
        });
    </script> --}}

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoZfdyk825u0pdExeT_o8I2NknXXeuNNU&libraries=places">
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
