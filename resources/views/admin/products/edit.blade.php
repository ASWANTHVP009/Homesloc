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

        .tab {
            overflow: hidden;
            border: 1px solid #313131;
            background-color: #454d55;
            border-radius: 3px;
        }

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

        .tab button:hover {
            background-color: #ddd;
        }

        .tab button.active {
            background-color: #8a898e;
        }

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

                <div class="col-md-12">
                    <div class="card card-primary">
                        <form action="{{ route('admin.product.update') }}" method="POST" enctype="multipart/form-data"
                            id="create">
                            <input type="hidden" name="product_id" value="{{ encrypt($product->id) }}">

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
                                    <label>Status</label>
                                    <select class="form-control select2" style="width: 100%; height: 40px;"
                                        name="status" value="{{ $product->status }}">
                                        @if ($product->status == 1)
                                            <option selected="selected" value="1">Enabled</option>
                                            <option value="0">Disabled</option>
                                        @else
                                            <option value="0" selected="selected">Disabled</option>
                                            <option value="1">Enabled</option>
                                        @endif
                                    </select>
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
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="document">Proprty Images</label>
                                    <div class="needsclick dropzone" id="document-dropzone"></div>
                                </div>
                            </div>

                            <div class="card-body tabcontent col-md-12" id="Rooms">

                                <?php $row = 1; ?>

                                @foreach ($room_types as $rtype)
                                    <div class="room-tab" id="room-row{{ $row }}">
                                        <div class="row">
                                            <div class="form-group col-md-4 m-50">
                                                <label for="Price">Room Name</label>
                                                <input type="text" class="form-control"
                                                    name="product[{{ $row }}][pname]" placeholder="Enter Name"
                                                    value="{{ $rtype->name }}" required>
                                            </div>

                                            <div class="form-group col-md-4 m-50">
                                                <label for="Price">Price</label>
                                                <input type="text" class="form-control"
                                                    name="product[{{ $row }}][pprice]" placeholder="Enter Price"
                                                    value="{{ $rtype->price }}" required>
                                            </div>
                                            <div class="form-group col-md-4 m-50">
                                                <label for="Price">Special Price</label>
                                                <input type="text" class="form-control"
                                                    name="product[{{ $row }}][pspecial_price]"
                                                    placeholder="Enter Special Price" value="{{ $rtype->special_price }}"
                                                    required>
                                            </div>

                                            <div class="form-group col-md-4 m-50">
                                                <label>Status</label>
                                                <select class="form-control select2" style="width: 100%; height: 40px;"
                                                    name="product[{{ $row }}][pstatus]"
                                                    value="{{ $rtype->status }}">
                                                    @if ($rtype->status == 1)
                                                        <option selected="selected" value="1">Enabled</option>
                                                        <option value="0">Disabled</option>
                                                    @else
                                                        <option value="0" selected="selected">Disabled</option>
                                                        <option value="1">Enabled</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Amentities</label>
                                            <select class="select2" multiple="multiple"
                                                data-placeholder="Select a Amentity" style="width: 100%;"
                                                name="product[{{ $row }}][pamentities][]">
                                                @foreach ($amentities as $amentity)
                                                    @if (str_contains($rtype->amentities, $amentity->id))
                                                        <option value="{{ $amentity->id }}" selected>
                                                            {{ $amentity->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $amentity->id }}">{{ $amentity->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12" style="display: flex">
                                                <div class="col-md-2 ">
                                                    <img loading="auto" importance="auto"
                                                        src="{{ URL::asset('/uploads/' . $rtype['image']) }}"
                                                        class="c-hwlvh4" style="width: 50%;">
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="product[{{ $row }}][pimage]"
                                            value="{{ $rtype['image'] }}">

                                        <div class="form-group">
                                            <label for="document">Proprty Images</label> <br>
                                            <input type="file" name="product[{{ $row }}][pimage]"
                                                id="pimage">
                                        </div>

                                        <button type="button" onclick="$('#room-row{{ $row }}').remove();"
                                            class="btn btn-danger" style="float: right; margin-top: -40px;"><i
                                                class="fa fa-minus-circle"></i></button>

                                    </div>

                                    @php $row = $row + 1; @endphp
                                @endforeach

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

                </div>

            </div>

        </div>

    </section>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoZfdyk825u0pdExeT_o8I2NknXXeuNNU&libraries=places">
    </script>

    <script type="text/javascript">
        var row = {{ $row }};

        function addRow() {

            html = '<div class="room-tab" id="room-row' + row + '">';
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
