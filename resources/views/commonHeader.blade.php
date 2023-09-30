<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.e953701e38dac851bad4.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/commoncss.a004585cb69526bcfe1d.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/home.4a868bd3e530d1605317.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-aswome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/listing.f60cc288d2f35137d287.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/detail.5451d231bc1ca452b6f9.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/info.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="uploads/images/logo.png">

    <title>HomesLoc</title>
</head>
{{-- rrom modal --}}
<div class="modal fade" id="guest-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <button type="button" class="modal-title close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times; &nbsp; Add Room</span>
                </button> --}}
                Add Room
            </div>
            <form action="{{ url('/list') }}" method="GET">
                <div class="modal-body">
                    <div id="mroom-add">
                        <?php $mroom_row = 1; ?>
                        <div class="c-r37xpo" id="mroom_div-{{ $mroom_row }}">
                            <div class="c-tjpp8s">
                                <div class="c-2i8otg" id="mroom[{{ $mroom_row }}]">Room {{ $mroom_row }}</div>
                                <button type="button"
                                    class="guestRoomPickerPopUp__lessRoom guestRoomPickerPopUp__lessRoom--disabled"
                                    fdprocessedid="98qndw" id="mdelete-room" style="color: black; text-align: right;"
                                    onclick="mdeleteRoom({{ $mroom_row }});"><i class="fa fa-trash"
                                        aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="c-j4ddf8">
                                <div class="c-mbh36o">Guests</div>
                                <div class="c-1n2mv2k">
                                    <span class="guestRoomPickerPopUp__minus" id="mminus-{{ $mroom_row }}"
                                        onclick="mminus({{ $mroom_row }})">
                                        -
                                    </span>
                                    <div class="c-4mc9w5" id="mguest-count-{{ $mroom_row }}">2</div>
                                    <span class="guestRoomPickerPopUp__plus" id="mplus-{{ $mroom_row }}"
                                        onclick="mplus({{ $mroom_row }})">
                                        +
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="c-10x1sqe">
                        <?php $mroom_row = 2; ?>
                        <div class="ripple c-2grro3">
                            <button type="button" class="guestRoomPickerPopUp__addRoom" fdprocessedid="4v56i"
                                id="madd-room" style="text-align: center; padding: 2px;"
                                onclick="addMRoom({{ $mroom_row }});">Add
                                Room</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="guestRoomPickerPopUp__addRoom" fdprocessedid="4v56i" id="madd-room"
                        style="text-align: center; padding: 10px; background:#cfcf2b" onclick="done();">Done</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- room modal End --}}

<body>
    <div id="root" style="height:100vh;">
        <div class="layout__container">
            <div class="homePage__container">
                <div class="cmsWrapper cmsWrapper--topFold">
                    <div class="headerMainWrapper">
                        <div class="oyo-row oyo-row--no-spacing headerPrimary " data-cms-id="524922"
                            data-cms-template="cWeb-header">
                            <div class="oyo-cell headerPrimary__leftHeader">
                                <div class="headerPrimary__logoWrapper undefined">
                                    <svg class="headerPrimary__logo">
                                        <use xlink:href="#logo"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <span>
                            <div class="oyo-row oyo-row--no-spacing headerSticky">
                                <div class="oyo-cell headerSticky__leftHeader">
                                    {{-- <a class="c-nn640c headerSticky__logoWrapper" href=".\index.html">
                                        <img src="uploads/images/logo.png" alt="Homesloc" class="mob-logo">
                                    </a> --}}
                                </div>
                            </div>
                        </span>
                    </div>

                    <!-- Mobile -->
                    <style>
                        .c-l4zwwj {
                            line-height: 0px !important;
                        }
                    </style>
                    <div class="c-19midj6 mob-C12rgh">
                        <h1 class="c-1cq3vev">Find hotels at best prices</h1>
                        <div>
                            <form class="autoCompleteDesktop__searchContainer" action="{{ url('/list') }}"
                                method="GET">
                                <div class="c-1l2i9d5">
                                    <span class="c-ybkhag">Destination</span>
                                    <input class="form-control search-place" id="search-loc" type="text"
                                        placeholder="Search location" autocomplete="on" name="location"
                                        value="{{ app('request')->input('location') }}" />


                                    <input type="hidden" name="latitude"
                                        value="{{ app('request')->input('latitude') }}" id="latitude-mob">
                                    <input type="hidden" name="longitude"
                                        value="{{ app('request')->input('longitude') }}" id="longitude-mob">
                                    <input type="hidden" name="gt-count" id="gt-count"
                                        value="{{ app('request')->input('gt-count') }}">
                                    <input type="hidden" name="rm-count" id="rm-count"
                                        value="{{ app('request')->input('rm-count') }}">

                                </div>
                                <div class="c-j7qwjs">
                                    <div class="c-r1fhqc">
                                        <div class="c-lh2wt1">
                                            <span class="c-ybkhag">Date</span>
                                            <div class="c-127cf4w">
                                                <div class="c-1lpmxla">
                                                    <input type="text" name="daterange"
                                                        value="{{ app('request')->input('daterange') }}"
                                                        class="date-range-pick" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c-105t92t">
                                            <span class="c-ybkhag">Rooms and guests</span>
                                            <button type="button" class="filter-bt" data-toggle="modal"
                                                data-target="#guest-modal">
                                                <div class="c-1c7wg8">
                                                    <span class="c-78mvka">
                                                        <span id="mroom-count">
                                                            {{ app('request')->input('rm-count') }}</span>
                                                        {!! '&nbsp;' !!} Room
                                                        <span class="c-kg79y4">·</span>
                                                        <span id="mroom-guest">{{ app('request')->input('gt-count') }}
                                                        </span> {!! '&nbsp;' !!}
                                                        Guests
                                                    </span>
                                                </div>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="c-l4zwwj">
                                    <div>
                                        <input type="hidden" name="mgt-count" id="mgt-count">
                                        <input type="hidden" name="mrm-count" id="mrm-count">
                                        <input type="hidden" name="gt-count" id="gt-count" value="2">
                                        <input type="hidden" name="rm-count" id="rm-count" value="1">
                                        {{-- <input type="hidden" id="config-1" name="config-1" value="2">; --}}
                                        <button class="u-textCenter searchButton searchButton--home Rtgyd"
                                            id="searchButton" type="submit">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- End -->
                </div>

                <div class="cmsWrapper cmsWrapper--topFold web-search">

                    {{-- web strt --}}
                    <form class="autoCompleteDesktop__searchContainer" action="{{ url('/list') }}" method="GET">
                        <div class="searchContainer HigTrfe" data-cms-id="300457" data-cms-template="cWEB-oyoSpaces">
                            <div class=""
                                style="position: relative;float: left; margin-right: 33px; margin-left: -50px;margin-top: 7px;">
                                {{-- <a href="\">
                                <img src="{{ asset('uploads/images/wlogo.png') }}"
                                    alt="Homeslocss" class="mob-logo">
                                </a> --}}
                            </div>
                            <div class="searchContainer__wrapper">
                                <div class="searchContainer__searchWidgetContainer">
                                    <div class="oyo-row oyo-row--no-spacing homeSearchWidget" data-cms-id="570807"
                                        data-cms-template="cWeb-Search">
                                        <div
                                            class="oyo-cell oyo-cell--4-col oyo-cell--8-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__autoComplete">
                                            <div
                                                class="oyo-row oyo-row--no-spacing autoCompleteDesktop autoCompleteDesktop--home">
                                                <div
                                                    class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone Rtgyd">
                                                    <div class="autoCompleteDesktop__searchContainer">
                                                        <input
                                                            class="autoCompleteDesktop__searchBox autoCompleteDesktop__searchBox--home  autoCompleteDesktop__searchBox--nearbyVisible"
                                                            id="search" type="text" name="location"
                                                            placeholder="Search location" autocomplete="on"
                                                            value="{{ app('request')->input('location') }}" />
                                                        <input type="hidden" name="latitude"
                                                            value="{{ app('request')->input('latitude') }}"
                                                            id="latitude">
                                                        <input type="hidden" name="longitude"
                                                            value="{{ app('request')->input('longitude') }}"
                                                            id="longitude">
                                                        <input type="hidden" name="gt-count" id="gt-count"
                                                            value="{{ app('request')->input('gt-count') }}">
                                                        <input type="hidden" name="rm-count" id="rm-count"
                                                            value="{{ app('request')->input('rm-count') }}">

                                                        <div class="autoCompleteDesktop__nearbyComponentWrapper">
                                                            <div class="nearbyComponent ripple"><span
                                                                    class="nearbyComponent__iconWrapper"><svg
                                                                        class="nearbyComponent__icon">

                                                                        <use xlink:href="#crosshair-icon"></use>

                                                                    </svg></span><span
                                                                    class="d-text12 is-fontBold nearbyComponent__text">Near
                                                                    me</span></div>
                                                        </div><span></span>
                                                    </div>
                                                </div><span></span>
                                            </div>
                                        </div>
                                        <div
                                            class="oyo-cell oyo-cell--3-col oyo-cell--4-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__dateRangePicker Rtgyd">
                                            <div
                                                class="oyo-row oyo-row--no-spacing datePickerDesktop datePickerDesktop--home">
                                                <div
                                                    class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold datePickerDesktop__checkInOut u-textEllipsis">
                                                    <input type="text" name="daterange"
                                                        value="{{ app('request')->input('daterange') }}"
                                                        class="date-range-pick" />
                                                </div>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div
                                            class="oyo-cell oyo-cell--3-col oyo-cell--4-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__guestRoomPicker Rtgyd">
                                            <div id="Guest-Popup-block"
                                                class="oyo-row oyo-row--no-spacing guestRoomPicker guestRoomPicker--home ">
                                                <div
                                                    class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold u-textEllipsis guestRoomPicker__guestRoomCount">
                                                    <span id="room-count">
                                                        {{ app('request')->input('rm-count') }}
                                                    </span>
                                                    {!! '&nbsp;' !!} Room,

                                                    <span id="room-guest">
                                                        {{ app('request')->input('gt-count') }}
                                                    </span>
                                                    {!! '&nbsp;' !!} Guests
                                                </div>
                                                {{-- room add section --}}
                                                <span>
                                                    <div
                                                        class="oyo-row oyo-row--no-spacing d-popup guestRoomPickerPopUp">
                                                        <div id="Guest-Popup" style="display: none"
                                                            class="oyo-row oyo-row--no-spacing guestRoomPickerPopUp__headingRow">
                                                            <div
                                                                class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone d-text14 guestRoomPickerPopUp__heading">
                                                                Rooms</div>
                                                            <div
                                                                class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone d-text14 guestRoomPickerPopUp__heading">
                                                                Guests</div>
                                                        </div>
                                                        {{-- room --}}
                                                        <div id="room-add">
                                                            <?php $room_row = 1; ?>

                                                            @for ($i = 1; $i <= app('request')->input('rm-count'); $i++)
                                                                <div class="oyo-row oyo-row--no-spacing guestRoomPickerPopUp__roomsRow"
                                                                    id="room_div-{{ $i }}">
                                                                    <div
                                                                        class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone guestRoomPickerPopUp__roomTable">
                                                                        <div class="oyo-row oyo-row--no-spacing">
                                                                            <div
                                                                                class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone u-displayFlex u-alignItemsCenter">
                                                                                <span
                                                                                    class="d-text14 guestRoomPickerPopUp__roomCount u-displayBlock"
                                                                                    id="room[{{ $i }}]">Room
                                                                                    {{ $i }}</span>
                                                                            </div>

                                                                            <input type="hidden"
                                                                                name="config-{{ $i }}"
                                                                                id="config-{{ $i }}"
                                                                                value="{{ app('request')->input('config-' . $i) }}">

                                                                            <div
                                                                                class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone">
                                                                                <span
                                                                                    class="guestRoomPickerPopUp__minus"
                                                                                    id="minus-{{ $i }}"
                                                                                    onclick="minus({{ $i }})">
                                                                                    -
                                                                                </span>
                                                                                <span
                                                                                    class="d-text16 guestRoomPickerPopUp__count"
                                                                                    id="guest-count-{{ $i }}">{{ app('request')->input('config-' . $i) }}</span>
                                                                                <span
                                                                                    class="guestRoomPickerPopUp__plus"
                                                                                    id="plus-{{ $i }}"
                                                                                    onclick="plus({{ $i }})">
                                                                                    +
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endfor

                                                            {{-- <div class="oyo-row oyo-row--no-spacing guestRoomPickerPopUp__roomsRow"
                                                                id="room_div-{{ $room_row }}">
                                                                <div
                                                                    class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone guestRoomPickerPopUp__roomTable">
                                                                    <div class="oyo-row oyo-row--no-spacing">
                                                                        <div
                                                                            class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone u-displayFlex u-alignItemsCenter">
                                                                            <span
                                                                                class="d-text14 guestRoomPickerPopUp__roomCount u-displayBlock"
                                                                                id="room[{{ $room_row }}]">Room
                                                                                1</span>
                                                                        </div>
                                                                        <div
                                                                            class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone">
                                                                            <span class="guestRoomPickerPopUp__minus"
                                                                                id="minus-{{ $room_row }}"
                                                                                onclick="minus({{ $room_row }})">
                                                                                -
                                                                            </span>
                                                                            <span
                                                                                class="d-text16 guestRoomPickerPopUp__count"
                                                                                id="guest-count-{{ $room_row }}">2</span>
                                                                            <span class="guestRoomPickerPopUp__plus"
                                                                                id="plus-{{ $room_row }}"
                                                                                onclick="plus({{ $room_row }})">
                                                                                +
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        {{-- room end --}}
                                                        <?php $room_row = 2; ?>
                                                        <?php $room_row = app('request')->input('rm-count'); ?>

                                                        <div
                                                            class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone guestRoomPickerPopUp__buttonWrapper">
                                                            <div
                                                                class="oyo-row oyo-row--no-spacing guestRoomPickerPopUp__buttonRow">
                                                                <div
                                                                    class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone d-text14">
                                                                    <button type="button"
                                                                        class="guestRoomPickerPopUp__lessRoom guestRoomPickerPopUp__lessRoom--disabled"
                                                                        fdprocessedid="98qndw" id="delete-room"
                                                                        onclick="deleteRoom({{ $room_row }});">Delete
                                                                        Room</button>
                                                                </div>
                                                                <div
                                                                    class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone d-text14">
                                                                    <button type="button"
                                                                        class="guestRoomPickerPopUp__addRoom"
                                                                        fdprocessedid="4v56i" id="add-room"
                                                                        onclick="addRoom({{ $room_row + 1 }});">Add
                                                                        Room</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                                {{-- room add section end --}}
                                            </div>
                                        </div>
                                        <div
                                            class="oyo-cell oyo-cell--2-col oyo-cell--8-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__search">
                                            <button type="submit"
                                                class="u-textCenter searchButton searchButton--home Rtgyd">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="oyo-row oyo-row--no-spacing homePage__padd">

                    <div class="oyo-cell oyo-cell--9-col homePage__leftFold"></div>

                    <div class="oyo-cell oyo-cell--3-col homePage__rightFold"></div>

                </div>
