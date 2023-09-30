{{-- @include('header') --}}
<link href="{{ asset('assets/css/property.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

<meta content="width=device-width, initial-scale=1" name="viewport" />

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<style>
    /* .flPQcn input {
        border: 1px solid #ebe5e5 !important;
    } */

    .invalid-feedback {
        color: red;
        font-size: 12px;
    }

    .select2-container {
        width: 100% !important;
    }
</style>

<div id="login-app">
    <div class="LoginLayout">
        <div class="LoginLayout-leftBanner LoginLeftBanner">
            <div overflow="hidden" class="styles__Container-sc-zz2x1k-0 iDMIRC"></div>
            <div
                class="styles__Container-sc-zz2x1k-0 gSJkEV LoginUpsellBanner__LoginUpsellContainer-sc-1xab2hr-3 dVFqFd">
                <div display="flex" height="100%" class="styles__Container-sc-zz2x1k-0 iyMoMC">
                    <div class="styles__Container-sc-zz2x1k-0 cKDynS">
                        <img src="https://media.sproutsocial.com/uploads/UI_Employee-Advocacy-Metrics-Overview-Login-Page.png"
                            alt="Employee advocacy" title="" data-qa-image="Employee advocacy"
                            data-qa-image-src="https://media.sproutsocial.com/uploads/UI_Employee-Advocacy-Metrics-Overview-Login-Page.png"
                            class="styles__ImageContainer-sc-dngsi7-0 gwsYyO Image">
                    </div>
                    <div class="styles__Container-sc-zz2x1k-0 klMRqZ">
                        <div class="styles__Container-sc-zz2x1k-0 bMlgID">
                            <h1>
                                <span color="neutral.0" font-weight="extrabold"
                                    class="styles__Container-sc-99cuku-0 hAGISW LoginUpsellBanner__HeaderText-sc-1xab2hr-0 fjsnWV">World's
                                    leading chain of hotels and homes</span>
                            </h1>
                        </div>
                    </div>
                    <div class="styles__Container-sc-zz2x1k-0 klMRqZ">
                        <div class="styles__Container-sc-zz2x1k-0 hcuLUi">
                            <span color="neutral.0" font-weight="semibold"
                                class="styles__Container-sc-99cuku-0 geZbGf LoginUpsellBanner__BodyText-sc-1xab2hr-1 kJXPIz">Sign
                                up with your details and get exclusive access to discounts and savings on Homesloc stays
                                and with our many travel partners.</span>
                        </div>
                    </div>
                    <div class="styles__Container-sc-zz2x1k-0 klMRqZ">
                        <a href="" target="_blank" rel="noopener noreferrer" data-qa-button=""
                            data-qa-button-isdisabled="false" color="neutral.0"
                            class="styles__Container-sc-17njgx1-0 hMJwac LoginUpsellBanner__DarkModeButton-sc-1xab2hr-2 jffoWx">
                            <span role="img" data-qa-icon="external-link-alt"
                                class="styles__Container-sc-1v500hw-0 jfhzmF Icon">
                                <svg class="Icon-svg" viewBox="0 0 16 16" focusable="false"
                                    data-qa-icon-svg="external-link-alt-svg">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xlink:href="#ssiconsvg-external-link-alt">
                                    </use>
                                </svg>
                            </span>Learn More </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="LoginLayout-content" style="padding:0px">
            <div class="LoginContent">
                <div class="LoginContent-info">
                    <h2 data-qa-text="Welcome back, good to see you again!" font-weight="semibold"
                        class="styles__Container-sc-99cuku-0 gBkBky" style="font-size: 20px; font-weight:800">Explore
                        the world of
                        HomesLoc! !!</h2>
                </div>
                <div class="LoginContent-body">
                    <form method="POST" class="LoginForm" action="{{ route('callback') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div id="step-1">
                            <div class="f1">
                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">First
                                                Name</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div label="First Name" class="styles__Container-sc-4stdun-0 flPQcn">
                                                <input class="form-control" id="firstname" name="firstname"
                                                    type="text" value="{{ old('firstname') }}">
                                            </div>
                                            <span class="invalid-feedback" id="err-firstname" role="alert"
                                                style="display: none">
                                                <strong>Please enter firstname</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Last
                                                Name</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div label="First Name" class="styles__Container-sc-4stdun-0 flPQcn">
                                                <input aria-invalid="false" id="lastname" name="lastname"
                                                    type="text" value="{{ old('lastname') }}">
                                            </div>
                                            <span class="invalid-feedback" id="err-lastname" role="alert"
                                                style="display: none">
                                                <strong>Please enter lastname</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="f1">
                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Email
                                                Address</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div label="First Name" class="styles__Container-sc-4stdun-0 flPQcn">
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    id="email" name="email" type="text"
                                                    value="{{ old('email') }}">
                                            </div>
                                            <span class="invalid-feedback" id="err-email" role="alert"
                                                style="display: none">
                                                <strong>Please enter email</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Mobile
                                                No</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div label="Mobile No" class="styles__Container-sc-4stdun-0 flPQcn">
                                                <input id="mobile" name="mobile" type="text"
                                                    value="{{ old('mobile') }}">
                                            </div>
                                            <span class="invalid-feedback" id="err-mobile" role="alert"
                                                style="display: none">
                                                <strong>Please enter mobile</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="step-2" style="display: none">

                            <div class="f1">
                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Property
                                                Name *</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div label="Property Name" class="styles__Container-sc-4stdun-0 flPQcn">
                                                <input class="form-control" id="property_name" name="property_name"
                                                    type="text" value="{{ old('property_name') }}">
                                            </div>
                                            @error('property_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Location
                                                *</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div label="location" class="styles__Container-sc-4stdun-0 flPQcn">
                                                <input aria-invalid="false" id="location" name="location"
                                                    type="text" value="{{ old('location') }}">
                                            </div>
                                            @error('location')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f1">
                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Price
                                                *</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div label="Price" class="styles__Container-sc-4stdun-0 flPQcn">
                                                <input class="form-control" id="price" name="price"
                                                    type="text" value="{{ old('price') }}">
                                            </div>
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Hotel
                                                Type *</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div class="styles__Container-sc-4stdun-0 flPQcn">

                                                @if (old('hotel_type'))
                                                    <select name="hotel_type" id="hotel_type"
                                                        class="select2-multiple">
                                                        @foreach ($types as $type)
                                                            @if (old('hotel_type') == $type->id)
                                                                <option value="{{ $type->id }}"
                                                                    data-select2-tag="true" selected>
                                                                    {{ $type->name }}
                                                                </option>
                                                            @else
                                                                <option value="{{ $type->id }}">
                                                                    {{ $type->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                @else
                                                    <select id="hotel_type" class="select2-multiple"
                                                        name="hotel_type">
                                                        @foreach ($types as $type)
                                                            <option value="{{ $type->id }}">{{ $type->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            @error('hotel_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f1">
                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Check
                                                In Time *</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div class="styles__Container-sc-4stdun-0 flPQcn">
                                                <input class="form-control" id="checkin" name="checkin"
                                                    type="text" value="{{ old('checkin') }}">
                                            </div>
                                            @error('checkin')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Check
                                                Out Time *</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div class="styles__Container-sc-4stdun-0 flPQcn">
                                                <input aria-invalid="false" id="checkout" name="checkout"
                                                    type="text" value="{{ old('checkout') }}">
                                            </div>
                                            @error('checkout')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="f1">
                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Amentities
                                                *</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div label="First Name" class="styles__Container-sc-4stdun-0 flPQcn">

                                                @if (is_array(old('amentities')))
                                                    <select name="amentities[]" id="amentities"
                                                        class="select2-multiple" multiple="multiple">
                                                        @foreach ($amentities as $amentity)
                                                            @if (in_array($amentity->id, old('amentities')))
                                                                <option value="{{ $amentity->id }}"
                                                                    data-select2-tag="true" selected>
                                                                    {{ $amentity->name }}
                                                                </option>
                                                            @else
                                                                <option value="{{ $amentity->id }}">
                                                                    {{ $amentity->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                @else
                                                    <select class="select2 select2-multiple" multiple="multiple"
                                                        data-placeholder="Select a Amentity" style="width: 100%;"
                                                        name="amentities[]">
                                                        @foreach ($amentities as $amentity)
                                                            <option value="{{ $amentity->id }}">{{ $amentity->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            @error('amentities')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Food
                                                Menu *</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div class="styles__Container-sc-4stdun-0 flPQcn">
                                                @if (is_array(old('menus')))
                                                    <select name="menus[]" id="menus" class="select2-multiple"
                                                        multiple="multiple">
                                                        @foreach ($menus as $menu)
                                                            @if (in_array($menu->id, old('menus')))
                                                                <option value="{{ $menu->id }}"
                                                                    data-select2-tag="true" selected>
                                                                    {{ $menu->name }}
                                                                </option>
                                                            @else
                                                                <option value="{{ $menu->id }}">
                                                                    {{ $menu->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                @else
                                                    <select class="select2 select2-multiple" multiple="multiple"
                                                        data-placeholder="Select a Menu" style="width: 100%;"
                                                        name="menus[]">
                                                        @foreach ($menus as $menu)
                                                            <option value="{{ $menu->id }}">{{ $menu->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            @error('menu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f1">
                                <div class="InputField">
                                    <div class="FormField">
                                        <div class="FormField-label">
                                            <label color="text.headline" font-weight="semibold"
                                                class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Property
                                                Images *</label>
                                        </div>
                                        <div class="FormField-input">
                                            <div class="styles__Container-sc-4stdun-0 flPQcn">
                                                <input type="file" name="files[]" multiple>
                                            </div>
                                            <!-- @error('checkin')
    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
@enderror -->
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div style="text-align: center;">

                            <button type="button" id="previous"
                                class="btn btn-primary styles__Container-sc-17njgx1-0 cDBdJO"
                                style="width: 130px; float:left; display:none;">
                                Previous
                            </button>
                            <button type="button" id="next"
                                class="btn btn-primary styles__Container-sc-17njgx1-0 cDBdJO"
                                style="width: 130px; float:right">
                                Next
                            </button>

                            <button type="submit" id="callback"
                                class="btn btn-primary styles__Container-sc-17njgx1-0 cDBdJO"
                                style="width: 130px; float:right; display:none;">
                                {{ __('Request a Call') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script>
        if ($('#firstname').val() != "" && $('#lastname').val() != "" && $('#email').val() != "" && $('#mobile').val() !=
            "") {
            $('#previous').css('display', 'block');
            $('#next').css('display', 'none');
            $('#callback').css('display', 'block');

            $('#step-1').css('display', 'none');
            $('#step-2').css('display', 'block');
        }


        $('#previous').on('click', function(e) {
            $('#previous').css('display', 'none');
            $('#callback').css('display', 'none');
            $('#next').css('display', 'block');
            $('#step-1').css('display', 'block');
            $('#step-2').css('display', 'none');
        });

        $('#next').on('click', function(e) {
            var error_present = 0;
            if ($('#firstname').val() == "") {
                var error_present = 1;
                $('#err-firstname').css('display', 'block');
            } else {
                $('#err-firstname').css('display', 'none');
            }
            if ($('#lastname').val() == "") {
                var error_present = 1;
                $('#err-lastname').css('display', 'block');
            } else {
                $('#err-lastname').css('display', 'none');
            }
            if ($('#email').val() == "") {
                var error_present = 1;
                $('#err-email').css('display', 'block');
            } else {
                $('#err-email').css('display', 'none');
            }
            if ($('#mobile').val() == "") {
                var error_present = 1;
                $('#err-mobile').css('display', 'block');
            } else {
                $('#err-mobile').css('display', 'none');
            }

            if (error_present == 0) {
                $('#previous').css('display', 'block');
                $('#next').css('display', 'none');
                $('#callback').css('display', 'block');

                $('#step-1').css('display', 'none');
                $('#step-2').css('display', 'block');
            }

        });
    </script>
    {{-- @push('scripts')
        <script>
            $('#category').select2();
        </script>
    @endpush --}}
    <script>
        $(document).ready(function() {
            $('.select2-multiple').select2();
        });
    </script>
