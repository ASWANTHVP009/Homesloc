@include('header')
<!-- Mobile -->
<style>
    .c-l4zwwj {
        line-height: 0px !important;
    }

    .join-container {
        position: relative;
        width: 100%;
        max-width: 400px;
    }

    .join-container img {
        width: 100%;
        height: auto;
    }

    .join-container .btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #00405a;
        color: white;
        font-size: 17px;
        font-weight: 700;
        padding: 7px 16px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
    }

    .join-container .btn:hover {
        background-color: black;
    }
</style>
<div class="c-19midj6 mob-C12rgh">
    <h1 class="c-1cq3vev">Find hotels at best prices</h1>
    <div>
        <form class="autoCompleteDesktop__searchContainer" action="{{ url('/list') }}" method="GET">
            <div class="c-1l2i9d5">
                <span class="c-ybkhag">Destination</span>
                <input class="form-control search-place" id="search-loc" type="text" placeholder="Search location"
                    autocomplete="on" name="location" required />
                <input type="hidden" value="" name="latitude" id="latitude-mob">
                <input type="hidden" value="" name="longitude" id="longitude-mob">
            </div>
            <div class="c-j7qwjs">
                <div class="c-r1fhqc">
                    <div class="c-lh2wt1">
                        <span class="c-ybkhag">Date</span>
                        <div class="c-127cf4w">
                            <div class="c-1lpmxla">
                                <input type="text" name="daterange" value="01/01/2018 - 01/15/2018"
                                    class="date-range-pick" inputmode='none' />
                            </div>
                        </div>
                    </div>
                    <div class="c-105t92t">
                        <span class="c-ybkhag">Rooms and guests</span>

                        <button type="button" class="filter-bt" data-toggle="modal" data-target="#guest-modal">
                            <div class="c-1c7wg8">
                                <input type="hidden" name="gt-count" id="mgt-count" value="2">
                                <input type="hidden" name="rm-count" id="mrm-count" value="1">
                                <span class="c-78mvka">
                                    <span id="mroom-count"> 1</span> {!! '&nbsp;' !!} Room
                                    <span class="c-kg79y4">·</span>
                                    <span id="mroom-guest"> 2 </span> {!! '&nbsp;' !!} Guests
                                </span>
                            </div>
                        </button>

                        {{-- modal config count --}}
                        <div id="mobile-config">
                            <input type="hidden" id="mconfig-1" name="config-1" value="2">
                        </div>
                        {{-- modal count edn --}}

                    </div>
                </div>
            </div>
            <div class="c-l4zwwj">
                <div>
                    <button class="u-textCenter searchButton searchButton--home Rtgyd" id="searchButton" type="submit">
                        Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- End -->

<!-- Web -->

@if ($mainbanners_data)
    <div class="searchContainer des-C12rgh" data-cms-id="300457" data-cms-template="cWEB-oyoSpaces"
        style="background-image: url('{{ URL::asset('/uploads/' . $mainbanners_data['path']) }}');">
    @else
        <div class="searchContainer des-C12rgh" data-cms-id="300457" data-cms-template="cWEB-oyoSpaces"
            style="background-image: url(uploads/images/home.png);">
@endif
<div class="searchContainer__wrapper">
    <h1 class="searchContainer__tagline">Book Hotels & Home Stays</h1>
    <div class="searchContainer__searchWidgetContainer">
        <form class="autoCompleteDesktop__searchContainer" action="{{ url('/list') }}" method="GET">
            <div class="oyo-row oyo-row--no-spacing homeSearchWidget" data-cms-id="570807"
                data-cms-template="cWeb-Search">
                <div
                    class="oyo-cell oyo-cell--4-col oyo-cell--8-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__autoComplete">
                    <div class="oyo-row oyo-row--no-spacing autoCompleteDesktop autoCompleteDesktop--home SerGF">
                        <div class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone Rtgydrd">
                            <input
                                class="autoCompleteDesktop__searchBox autoCompleteDesktop__searchBox--home  autoCompleteDesktop__searchBox--nearbyVisible"
                                placeholder="Search by city, hotel, or neighborhood" id="search" name="location"
                                type="text" placeholder="Search location" autocomplete="on" required />
                            <input type="hidden" name="latitude" value="" id="latitude">
                            <input type="hidden" name="longitude" value="" id="longitude">
                            <span></span>
                        </div>
                        <span></span>
                    </div>
                </div>
                <div
                    class="oyo-cell oyo-cell--3-col oyo-cell--4-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__dateRangePicker Rtgyd">
                    <div class="oyo-row oyo-row--no-spacing datePickerDesktop datePickerDesktop--home">
                        <div
                            class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold datePickerDesktop__checkInOut u-textEllipsis">
                            <input type="text" name="daterange" value="09/16/2023 - 09/17/2023"
                                class="date-range-pick" />
                        </div>
                        <span></span>
                    </div>
                </div>
                <div
                    class="oyo-cell oyo-cell--3-col oyo-cell--4-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__guestRoomPicker Rtgyd">
                    <input type="hidden" name="gt-count" id="gt-count" value="2">
                    <input type="hidden" name="rm-count" id="rm-count" value="1">
                    <div id="Guest-Popup-block"
                        class="oyo-row oyo-row--no-spacing guestRoomPicker guestRoomPicker--home ">
                        <div
                            class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold u-textEllipsis guestRoomPicker__guestRoomCount">
                            <span id="room-count"> 1 </span> {!! '&nbsp;' !!} Room,
                            <span id="room-guest"> 2 </span> {!! '&nbsp;' !!} Guests
                        </div>
                        {{-- room add section --}}
                        <span>
                            <div class="oyo-row oyo-row--no-spacing d-popup guestRoomPickerPopUp"
                                style="display: none">
                                <div id="Guest-Popup" style="display: none;"
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
                                    <div class="oyo-row oyo-row--no-spacing guestRoomPickerPopUp__roomsRow"
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
                                                    <span class="d-text16 guestRoomPickerPopUp__count"
                                                        id="guest-count-{{ $room_row }}">2</span>
                                                    <span class="guestRoomPickerPopUp__plus"
                                                        id="plus-{{ $room_row }}"
                                                        onclick="plus({{ $room_row }})">
                                                        +
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="config-1" name="config-1" value="2">;

                                {{-- room end --}}
                                <?php $room_row = 2; ?>
                                <div
                                    class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone guestRoomPickerPopUp__buttonWrapper">
                                    <div class="oyo-row oyo-row--no-spacing guestRoomPickerPopUp__buttonRow">
                                        <div
                                            class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone d-text14">
                                            <button type="button"
                                                class="guestRoomPickerPopUp__lessRoom guestRoomPickerPopUp__lessRoom--disabled"
                                                fdprocessedid="98qndw" id="delete-room"
                                                onclick="deleteRoom({{ $room_row }});">Delete Room</button>
                                        </div>
                                        <div
                                            class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone d-text14">
                                            <button type="button" class="guestRoomPickerPopUp__addRoom"
                                                fdprocessedid="4v56i" id="add-room"
                                                onclick="addRoom({{ $room_row }});">Add
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
                    <button class="u-textCenter searchButton searchButton--home Rtgyd" id="searchButton"
                        type="submit">
                        Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<!-- ENd - Web -->
<div class="oyo-row oyo-row--no-spacing homePage__padd">
    <div class="oyo-cell oyo-cell--9-col homePage__leftFold"></div>
    <div class="oyo-cell oyo-cell--3-col homePage__rightFold"></div>
</div>
<!-- banner -->
<div class="bannerStrip" data-cms-id="763934" data-cms-template="cWeb-BannerCarousel" id="web-banner">
    <div role="button" class="oyo-row oyo-row--no-spacing banner  banner--noCursor"
        data-cms-template="cWeb-BannerCarousel">
        <div class="oyo-cell oyo-cell--12-col u-textCenter banner__cardImageContainer u-flexCenter web-banner">
            @foreach ($banners as $banner)
                <div class="c-5cjq8j">
                    <img alt="OYO" loading="eager" importance="high"
                        src="{{ URL::asset('/uploads/' . $banner['path']) }}" class="c-2tglnv banner__cardImage"
                        compact="true">
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- banner end -->

{{-- mobile banner --}}



<div class="bannerStrip" data-cms-id="763934" data-cms-template="cWeb-BannerCarousel" id="mobile-banner">
    <div role="button" class="oyo-row oyo-row--no-spacing banner  banner--noCursor"
        data-cms-template="cWeb-BannerCarousel">
        <div class="oyo-cell oyo-cell--12-col u-textCenter banner__cardImageContainer u-flexCenter mobile-banner">
            @foreach ($mobile_banners as $mobile_banner)
                <div class="c-5cjq8j">
                    <img alt="OYO" loading="eager" importance="high"
                        src="{{ URL::asset('/uploads/' . $mobile_banner['path']) }}"
                        class="c-2tglnv banner__cardImage" compact="true">
                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- Mobile banner- End --}}

<!-- slider -->
<section data-testid="segment-slider-ui" class="SegmentSliderUIstyles__SliderOuterWrapper-sc-ifa9fu-0 hAOwmo">
    <div
        class="dwebCommonstyles__CenteredSpaceWrap-sc-112ty3f-0 SegmentSliderUIstyles__SliderHeaderWrapper-sc-ifa9fu-24 eHRHNU eWGEDe">
        <h3 class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 hJuprJ">Deal of the day</h3>
    </div>
    <div class="SegmentSliderUIstyles__SliderMainContentWrapper-sc-ifa9fu-16 dBbiqB">
        <div class="NowOrNeverDealSliderstyles__NoworNeverSliderWrapper-sc-yj2eyd-5 fXtuEB">
            <div class="NowOrNeverDealSliderstyles__TimerWrapper-sc-yj2eyd-9 bCYSEO">
                <svg viewBox="0 0 13 12" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" height="1.2rem"
                    width="1.2rem" margin="0 0.5rem 0 0"
                    class="HappyTimerIcon__HappyTimerClockIcon-sc-1olnuf0-1 cFfGqR">
                    <path
                        d="M6.01 12a5.153 5.153 0 110-10.305A5.153 5.153 0 016.01 12zm0-9.017a3.864 3.864 0 100 7.729 3.864 3.864 0 000-7.729zM.226 2.83a.644.644 0 01-.073-.908A8.098 8.098 0 012.49.054a.645.645 0 01.601 1.136 6.79 6.79 0 00-1.957 1.567.643.643 0 01-.908.073zM10.887 2.757A6.777 6.777 0 008.93 1.19.645.645 0 019.532.054a8.1 8.1 0 012.333 1.868.645.645 0 01-.54 1.07.644.644 0 01-.441-.235h.003z">
                    </path>
                    <path
                        d="M7.728 7.492H6.011a.644.644 0 01-.644-.644V4.7a.644.644 0 111.288 0v1.503h1.073a.644.644 0 110 1.288z">
                    </path>
                </svg>
                <span class="Countdowntimerstyles__DealText-sc-qm7a50-0 ga-dlWY">Ends in 3h: 34m:
                    48s</span>
            </div>
        </div>
        <div class="SegmentSliderUIstyles__SliderHotelsOuterWrapper-sc-ifa9fu-1 gkiHfw">
            <div class="SegmentSliderUIstyles__SliderHotelInnerWrapper-sc-ifa9fu-4 lpbtHk">
                <div class="Container">
                    <h3 class="Head"> <span class="Arrows"></span></h3>
                    <div class="SlickCarousel">

                        @foreach ($hotels as $hotel)
                            <!-- Item -->
                            <div class="ProductBlock">
                                <div itemscope="" itemtype="http://schema.org/Hotel"
                                    class="dwebCommonstyles__BaseColumnWrap-sc-112ty3f-2 SegmentSliderUIstyles__SliderListHoterOuterWrp-sc-ifa9fu-6 fVGWFo hdRKmz">

                                    <?php
                                    $today = new DateTime();
                                    $tomorrow = new DateTime('tomorrow');
                                    ?>

                                    <a
                                        href="{{ url('/info') .
                                            '/' .
                                            $hotel['id'] .
                                            '?location=' .
                                            app('request')->input('location') .
                                            '&latitude=' .
                                            app('request')->input('latitude') .
                                            '&longitude=' .
                                            app('request')->input('longitude') .
                                            '&daterange=' .
                                            $today->format('d/m/Y') .
                                            ' - ' .
                                            \Carbon\Carbon::tomorrow()->format('d/m/Y') .
                                            '&gt-count=2 &rm-count=1' }} 
                                ">
                                        {{-- <a href="{{ url('/info') . '/' . $hotel['id'] }}"> --}}
                                        <div
                                            class="SegmentSliderUIstyles__SliderListHotelImageWrap-sc-ifa9fu-7 jOIqHM">
                                            <img src="{{ URL::asset('/uploads/' . $hotel['path']) }}"
                                                alt="{{ URL::asset('/uploads/' . $hotel['path']) }}"
                                                class="SegmentSliderUIstyles__SliderListHotelImg-sc-ifa9fu-8 gOLvTW"
                                                data-testid="" itemprop="image">
                                        </div>
                                    </a>
                                    <div class="SegmentSliderUIstyles__SliderHotelInfoWrapper-sc-ifa9fu-9 kkmhtq">
                                        <div
                                            class="SegmentSliderUIstyles__SliderHotelInfoInnerWrapper-sc-ifa9fu-10 hYvijQ">
                                            <div
                                                class="SegmentSliderUIstyles__SliderHotelNameInfoWrap-sc-ifa9fu-11 kOpxsp">
                                                <span itemprop="starRating" content="3"
                                                    class="SegmentSliderUIstyles__StarRatingWrapperSpan-sc-ifa9fu-12 fmnOYP">

                                                    <div>
                                                        @include('star', [
                                                            'rating' => $hotel['average_rating'],
                                                        ])
                                                    </div>
                                                </span>
                                                <p itemprop="name"
                                                    class="SegmentSliderUIstyles__SliderHotelNameText-sc-ifa9fu-14 bfQYZk">
                                                    {{ $hotel['property_name'] }} </p>
                                                <span itemprop="address"
                                                    class="SegmentSliderUIstyles__SliderHotelLocationText-sc-ifa9fu-15 bgFBTe">{{ $hotel['location'] }}</span>
                                                <div
                                                    class="ReviewAndRatingsstyles__ReviewAndRatingOuterContainer-sc-1nxmeoo-2 gwqHKN">
                                                    <div
                                                        class="ReviewAndRatingsstyles__HotelTotalReviewWrapper-sc-1nxmeoo-1 ixtzNN">
                                                        <div
                                                            class="ReviewAndRatingsstyles__TotalReviewOuterDiv-sc-1nxmeoo-9 fIKiFm">
                                                            <div
                                                                class="ReviewAndRatingsstyles__AverageReviewWrapper-sc-1nxmeoo-7 cWfjjH">
                                                                <span content="3.7"
                                                                    class="ReviewAndRatingsstyles__AverageReviewText-sc-1nxmeoo-10 ZTpPO">{{ $hotel['average_rating'] }}/5</span>
                                                            </div>
                                                            <span
                                                                class="ReviewAndRatingsstyles__ReviewTestStyles-sc-1nxmeoo-8 bnqyMS"></span>
                                                        </div>
                                                        <span content="3.7" data-testid="ratingCount"
                                                            class="ReviewAndRatingsstyles__TotalReviewCountText-sc-1nxmeoo-5 jjZSih">{{ $hotel['rating_count'] }}
                                                            Ratings</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="SegmentSliderUIstyles__SliderHotelPriceInfoWrap-sc-ifa9fu-13 cGZutD">
                                                <div class="SegmentSliderUIstyles__PriceOuterWrap-sc-ifa9fu-17 fyyhRj">
                                                    <div
                                                        class="SegmentSliderUIstyles__OriginalPriceStrike-sc-ifa9fu-18 dTqWxL">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                            class="HappyRupeeIcon-sc-em2g9m-1 SegmentSliderUIstyles__RuppeStrike-sc-ifa9fu-19 hEpHNM jDAIke">
                                                            <path
                                                                d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z">
                                                            </path>
                                                        </svg>{{ $hotel['price'] }}
                                                    </div>
                                                    <h3 itemprop="priceRange"
                                                        class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 hJuprJ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                            color="#e47544"
                                                            class="HappyRupeeIcon-sc-em2g9m-1 SegmentSliderUIstyles__RuppeAskingPrice-sc-ifa9fu-20 hEpHNM eAomPZ">
                                                            <path
                                                                d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z">
                                                            </path>
                                                        </svg>
                                                        <span
                                                            style="color: rgb(228, 117, 68);">{{ $hotel['special_price'] }}</span>
                                                    </h3>
                                                    <p class="SegmentSliderUIstyles__PerNightText-sc-ifa9fu-23 erqdGN">
                                                        <strong>1 room</strong>
                                                        <span>per night</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item -->
                        @endforeach






                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider -->

<!-- slider 2-->
<section data-testid="segment-slider-ui" class="SegmentSliderUIstyles__SliderOuterWrapper-sc-ifa9fu-0 hAOwmo"
    id="mob-slide2">
    <div
        class="dwebCommonstyles__CenteredSpaceWrap-sc-112ty3f-0 SegmentSliderUIstyles__SliderHeaderWrapper-sc-ifa9fu-24 eHRHNU eWGEDe">
        <h3 class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 hJuprJ">Recommended Hotels</h3>
    </div>
    <div class="SegmentSliderUIstyles__SliderMainContentWrapper-sc-ifa9fu-16 dBbiqB">
        <div class="SegmentSliderUIstyles__SliderHotelsOuterWrapper-sc-ifa9fu-1 gkiHfw">
            <div class="SegmentSliderUIstyles__SliderHotelInnerWrapper-sc-ifa9fu-4 lpbtHk">
                <div class="Container">
                    <div class="SlickCarousel1">
                        @foreach ($rec_hotel_data as $rec_hotel)
                            <!-- Item -->
                            <div class="ProductBlock">
                                <div itemscope="" itemtype="http://schema.org/Hotel"
                                    class="dwebCommonstyles__BaseColumnWrap-sc-112ty3f-2 SegmentSliderUIstyles__SliderListHoterOuterWrp-sc-ifa9fu-6 fVGWFo hdRKmz">
                                    <?php
                                    $today = new DateTime();
                                    $tomorrow = new DateTime('tomorrow');
                                    ?>
                                    <a
                                        href="{{ url('/info') .
                                            '/' .
                                            $rec_hotel['id'] .
                                            '?location=' .
                                            app('request')->input('location') .
                                            '&latitude=' .
                                            app('request')->input('latitude') .
                                            '&longitude=' .
                                            app('request')->input('longitude') .
                                            '&daterange=' .
                                            $today->format('d/m/Y') .
                                            ' - ' .
                                            \Carbon\Carbon::tomorrow()->format('d/m/Y') .
                                            '&gt-count=2 &rm-count=1' }} 
                                ">
                                        <div
                                            class="SegmentSliderUIstyles__SliderListHotelImageWrap-sc-ifa9fu-7 jOIqHM">
                                            <img src="{{ URL::asset('/uploads/' . $rec_hotel['path']) }}"
                                                alt="{{ URL::asset('/uploads/' . $rec_hotel['path']) }}"
                                                class="SegmentSliderUIstyles__SliderListHotelImg-sc-ifa9fu-8 gOLvTW"
                                                data-testid="" itemprop="image">
                                        </div>
                                    </a>
                                    <div class="SegmentSliderUIstyles__SliderHotelInfoWrapper-sc-ifa9fu-9 kkmhtq">
                                        <div
                                            class="SegmentSliderUIstyles__SliderHotelInfoInnerWrapper-sc-ifa9fu-10 hYvijQ">
                                            <div
                                                class="SegmentSliderUIstyles__SliderHotelNameInfoWrap-sc-ifa9fu-11 kOpxsp">
                                                <span itemprop="starRating" content="3"
                                                    class="SegmentSliderUIstyles__StarRatingWrapperSpan-sc-ifa9fu-12 fmnOYP">

                                                    <div>
                                                        @include('star', [
                                                            'rating' => $rec_hotel['average_rating'],
                                                        ])
                                                    </div>
                                                </span>
                                                <p itemprop="name"
                                                    class="SegmentSliderUIstyles__SliderHotelNameText-sc-ifa9fu-14 bfQYZk">
                                                    {{ $rec_hotel['property_name'] }} </p>
                                                <span itemprop="address"
                                                    class="SegmentSliderUIstyles__SliderHotelLocationText-sc-ifa9fu-15 bgFBTe">{{ $rec_hotel['location'] }}</span>
                                                <div
                                                    class="ReviewAndRatingsstyles__ReviewAndRatingOuterContainer-sc-1nxmeoo-2 gwqHKN">
                                                    <div
                                                        class="ReviewAndRatingsstyles__HotelTotalReviewWrapper-sc-1nxmeoo-1 ixtzNN">
                                                        <div
                                                            class="ReviewAndRatingsstyles__TotalReviewOuterDiv-sc-1nxmeoo-9 fIKiFm">
                                                            <div
                                                                class="ReviewAndRatingsstyles__AverageReviewWrapper-sc-1nxmeoo-7 cWfjjH">
                                                                <span content="3.7"
                                                                    class="ReviewAndRatingsstyles__AverageReviewText-sc-1nxmeoo-10 ZTpPO">{{ $rec_hotel['average_rating'] }}/5</span>
                                                            </div>
                                                            <span
                                                                class="ReviewAndRatingsstyles__ReviewTestStyles-sc-1nxmeoo-8 bnqyMS"></span>
                                                        </div>
                                                        <span content="3.7" data-testid="ratingCount"
                                                            class="ReviewAndRatingsstyles__TotalReviewCountText-sc-1nxmeoo-5 jjZSih">{{ $rec_hotel['rating_count'] }}
                                                            Ratings</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="SegmentSliderUIstyles__SliderHotelPriceInfoWrap-sc-ifa9fu-13 cGZutD">
                                                <div class="SegmentSliderUIstyles__PriceOuterWrap-sc-ifa9fu-17 fyyhRj">
                                                    <div
                                                        class="SegmentSliderUIstyles__OriginalPriceStrike-sc-ifa9fu-18 dTqWxL">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                            class="HappyRupeeIcon-sc-em2g9m-1 SegmentSliderUIstyles__RuppeStrike-sc-ifa9fu-19 hEpHNM jDAIke">
                                                            <path
                                                                d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z">
                                                            </path>
                                                        </svg>{{ $rec_hotel['price'] }}
                                                    </div>
                                                    <h3 itemprop="priceRange"
                                                        class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 hJuprJ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                            color="#e47544"
                                                            class="HappyRupeeIcon-sc-em2g9m-1 SegmentSliderUIstyles__RuppeAskingPrice-sc-ifa9fu-20 hEpHNM eAomPZ">
                                                            <path
                                                                d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z">
                                                            </path>
                                                        </svg>
                                                        <span
                                                            style="color: rgb(228, 117, 68);">{{ $rec_hotel['special_price'] }}</span>
                                                    </h3>
                                                    <p class="SegmentSliderUIstyles__PerNightText-sc-ifa9fu-23 erqdGN">
                                                        <strong>1 room</strong>
                                                        <span>per night</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider -->

<div class="bannerStrip reg-seller" data-cms-id="763934" data-cms-template="cWeb-BannerCarousel"
    id="mobile-register-banner">

    <div class="join-container">
        <img src="{{ URL::asset('/uploads/property.jpg') }}" class="c-2tglnv banner__cardImage">
        <a href="/join" class="btn"><i class="fa-regular fa-building"></i>&nbsp;&nbsp;Register Your
            Properties</a>
    </div>

    {{-- <a href="/join"><img src="{{ URL::asset('/uploads/property.jpg') }}" class="c-2tglnv banner__cardImage"></a> --}}
</div>

<div class="cmsWrapper ">
    <div class="fadeIn__container fadeIn__container--active">
        <div class="oyo-row oyoExpanding" data-cms-id="432737" data-cms-template="cWeb-OyoExpanding">
            <div
                class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone oyoExpanding__imageWrapper">
                <div class="oyoExpanding__countryImage Rg-im1 active ">
                    <div class="c-10le73q">
                        <img alt="India" loading="auto" importance="auto"
                            src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_1.jpg"
                            compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo"> Kerala</div>
                    </div>
                </div>
                <div class="oyoExpanding__countryImage Rg-im2 active ">
                    <div class="c-10le73q">
                        <img alt="China" loading="auto" importance="auto"
                            src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_2.jpg"
                            compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo"> Karnataka</div>
                    </div>
                </div>
                <div class="oyoExpanding__countryImage Rg-im3 active ">
                    <div class="c-10le73q">
                        <img alt="Malaysia" loading="auto" importance="auto"
                            src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_3.jpg"
                            compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo"> Goa</div>
                    </div>
                </div>
                <div class="oyoExpanding__countryImage Rg-im4 active ">
                    <div class="c-10le73q">
                        <img alt="Nepal" loading="auto" importance="auto"
                            src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_4.jpg"
                            compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo"> Delhi</div>
                    </div>
                </div>
                <div class="oyoExpanding__countryImage Rg-im5 active ">
                    <div class="c-10le73q">
                        <img alt="Indonesia" loading="auto" importance="auto"
                            src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_5.jpg"
                            compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo"> Tamilnadu</div>
                    </div>
                </div>
                <div class="oyoExpanding__countryImage Rg-im6 active ">
                    <div class="c-10le73q">
                        <img alt="UAE" loading="auto" importance="auto"
                            src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_6.jpg"
                            compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo">Himachal </div>
                    </div>
                </div>
                <img alt="map" src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetImage.jpg">
            </div>
            <div
                class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone oyoExpanding__contentWrapper map-cont">
                <h3 class="d-heading oyoExpanding__heading">Our leading chain of hotels and homes</h3>
                <p class="d-text16 u-extraLineHeight oyoExpanding__text">More Destinations. More Ease.
                    More Affordable.</p>
                <div class="oyoExpanding__insights">
                    <div class="oyoExpanding__insightItemWrap">
                        <div class="d-text14 oyoExpanding__insightItem">
                            <span class="is-fontBold">1</span> Countries
                        </div>
                    </div>
                    <div class="oyoExpanding__insightItemWrap">
                        <div class="d-text14 oyoExpanding__insightItem">
                            <span class="is-fontBold">10,000+</span> Hotels &amp; Homes
                        </div>
                    </div>
                </div>
                <ul class="oyoExpanding__countryList">
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor"
                            style="background-color: rgb(26, 182, 79);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Kerala</span>
                    </li>
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor"
                            style="background-color: rgb(255, 127, 123);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Karnataka</span>
                    </li>
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor"
                            style="background-color: rgb(245, 166, 35);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Goa</span>
                    </li>
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor"
                            style="background-color: rgb(95, 214, 242);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Delhi</span>
                    </li>
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor"
                            style="background-color: rgb(254, 148, 241);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Tamilnadu</span>
                    </li>
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor"
                            style="background-color: rgb(126, 137, 228);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Himachal</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- images -->
<section class="PopularDestinationsUIstyles__PopularDestMainWrapper-sc-1ir08i0-0 gDEqxl">
    <h3 class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 hJuprJ">Popular Destinations</h3>
    <div class="PopularDestinationsUIstyles__PopularImageOuterWrapper-sc-1ir08i0-2 fggXza container"
        style="max-width: 1440px;">
        <a href="" title="Bengaluru"
            class="PopularDestinationsUIstyles__PopularBigImageWrapper-sc-1ir08i0-3 dAUSpZ">
            <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Bengaluru_1-1581426843.jpg"
                alt="" class="PopularDestinationsUIstyles__PopularBigImage-sc-1ir08i0-4 isfagQ"
                data-testid="" itemprop="">
            <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK ">
                <h3
                    class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 hJuprJ gmLHPV Rgtyh">
                    Bengaluru</h3>
                <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 cMRkEv tryHy">Technology Hub of
                    India</p>
            </div>

        </a>
        <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP">
            <a href="" title="Phuket"
                class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp">
                <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Phuket-1581457448.jpg" alt="Phuket"
                    class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO" data-testid=""
                    itemprop="">
                <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK ">
                    <h3
                        class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 hJuprJ gmLHPV Rgtyh">
                        Phuket</h3>
                    <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 cMRkEv tryHy">A tropical
                        paradise boasting of stunning beaches</p>
                </div>
            </a>
            <a href="" title="Ho Chi Minh"
                class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp">
                <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_HoChiMinh-1581456751.jpg"
                    alt="Ho Chi Minh" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                    data-testid="" itemprop="">
                <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK ">
                    <h3
                        class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 hJuprJ gmLHPV Rgtyh">
                        Dubai</h3>
                    <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 cMRkEv tryHy">Treasured gem of
                        the Emirates</p>
                </div>
            </a>
        </div>
        <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP">
            <a href="" title="Shimla"
                class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp">
                <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Shimla-1581427547.jpg" alt="Shimla"
                    class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO" data-testid=""
                    itemprop="">
                <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK ">
                    <h3
                        class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 hJuprJ gmLHPV Rgtyh">
                        Shimla</h3>
                    <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 cMRkEv tryHy">Endearing
                        combination of snow-covered peaks and blue sky</p>
                </div>
            </a>
            <a href="" title="Munnar"
                class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp">
                <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Munnar-1581456447.jpg" alt="Munnar"
                    class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO" data-testid=""
                    itemprop="">
                <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK ">
                    <h3
                        class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 hJuprJ gmLHPV Rgtyh">
                        Munnar</h3>
                    <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 cMRkEv tryHy">Referred as the
                        Kashmir of South India</p>
                </div>
            </a>
        </div>
    </div>
</section>



@include('footer')
{{-- rrom modal --}}
<div class="modal fade" id="guest-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> Add Room </div>
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
                    <input type="hidden" id="mconfig-1" name="config-1" value="2">
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
                    <button type="button" class="guestRoomPickerPopUp__addRoom" fdprocessedid="4v56i"
                        id="madd-room" style="text-align: center; padding: 10px; background:#cfcf2b"
                        onclick="done();">Done</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- room modal End --}}

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

{{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' type='text/javascript'></script> --}}
<script src='https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/slick.js' type='text/javascript'></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".SlickCarousel").slick({
            rtl: false, // If RTL Make it true & .slick-slide{float:right;}
            autoplay: true,
            autoplaySpeed: 5000, //  Slide Delay
            speed: 800, // Transition Speed
            slidesToShow: 3, // Number Of Carousel
            slidesToScroll: 1, // Slide To Move 
            pauseOnHover: false,
            appendArrows: $(".Container .Head .Arrows"), // Class For Arrows Buttons
            prevArrow: '<span class="Slick-Prev"></span>',
            nextArrow: '<span class="Slick-Next"></span>',
            easing: "linear",
            responsive: [{
                    breakpoint: 801,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 641,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ],
        })
    })
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".SlickCarousel1").slick({
            rtl: false, // If RTL Make it true & .slick-slide{float:right;}
            autoplay: true,
            autoplaySpeed: 5000, //  Slide Delay
            speed: 800, // Transition Speed
            slidesToShow: 3, // Number Of Carousel
            slidesToScroll: 1, // Slide To Move 
            pauseOnHover: false,
            easing: "linear",
            responsive: [{
                    breakpoint: 801,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 641,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ],
        })
    })
</script>
<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>

<script>
    $(document).on('ready', function() {
        $('.js-daterangepicker').daterangepicker();
    });
</script>

<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            minYear: 2023,
            minDate: new Date(),
            locale: {
                format: 'DD/MM/YYYY'
            },
            startDate: new Date(),
            endDate: new Date(new Date().getTime() + 24 * 60 * 60 * 1000)
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });
</script>
