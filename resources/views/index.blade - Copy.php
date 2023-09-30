@include('header')
<!-- Mobile -->

<div class="c-19midj6 mob-C12rgh">
    <h1 class="c-1cq3vev">Find hotels at best prices</h1>
    <div>
        <div class="c-1l2i9d5">
            <span class="c-ybkhag">Destination</span>
            <!-- <input type="text" placeholder="Enter your address" id="autocomplete" class="c-78mvka"/> -->
            <input class="form-control search-place" id="search-loc" type="text" placeholder="Search location" autocomplete="on" />
            <input type="hidden" value="" id="latitude-mob">
            <input type="hidden" value="" id="longitude-mob">
            <!-- <span id="autoComplete__searchBox" class="c-78mvka">Kozhikode</span> -->
        </div>
        <div class="c-j7qwjs">
            <div class="c-r1fhqc">
                <div class="c-lh2wt1">
                    <span class="c-ybkhag">Date</span>
                    <div class="c-127cf4w">
                        <div class="c-1lpmxla">
                            <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" class="date-range-pick" />
                        </div>
                    </div>
                </div>
                <div class="c-105t92t">
                    <span class="c-ybkhag">Rooms and guests</span>
                    <div class="c-1c7wg8">
                        <span class="c-78mvka">
                            <span>1 room</span>
                            <span class="c-kg79y4">·</span>
                            <span>1 guest</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-l4zwwj">
            <div><a href="/list" style="text-decoration: none; color: #fff; ">Search</a>
            </div>
        </div>
    </div>
</div>

<!-- End -->

<!-- Web -->
<div class="searchContainer des-C12rgh" data-cms-id="300457" data-cms-template="cWEB-oyoSpaces" style="background-image: url(uploads/images/home.png);">
    <div class="searchContainer__wrapper">
        <h1 class="searchContainer__tagline">Book Hotels & Home Stays</h1>
        <div class="searchContainer__searchWidgetContainer">
            <form class="autoCompleteDesktop__searchContainer" action="{{ url('/list') }}" method="GET">
                <div class="oyo-row oyo-row--no-spacing homeSearchWidget" data-cms-id="570807" data-cms-template="cWeb-Search">
                    <div class="oyo-cell oyo-cell--4-col oyo-cell--8-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__autoComplete">
                        <div class="oyo-row oyo-row--no-spacing autoCompleteDesktop autoCompleteDesktop--home SerGF">
                            <div class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone Rtgydrd">

                                <!--<input id="autoComplete__home" type="text" class="autoCompleteDesktop__searchBox autoCompleteDesktop__searchBox--home  autoCompleteDesktop__searchBox--nearbyVisible" placeholder="Search by city, hotel, or neighborhood" autocomplete="off" required="">-->
                                <input class="autoCompleteDesktop__searchBox autoCompleteDesktop__searchBox--home  autoCompleteDesktop__searchBox--nearbyVisible" placeholder="Search by city, hotel, or neighborhood" id="search" name="location" type="text" placeholder="Search location" autocomplete="on" />
                                <input type="hidden" name="latitude" value="" id="latitude">
                                <input type="hidden" name="longitude" value="" id="longitude">

                                {{-- <div class="autoCompleteDesktop__nearbyComponentWrapper">
                                    <div class="nearbyComponent ripple">
                                        <span class="nearbyComponent__iconWrapper">
                                            <svg class="nearbyComponent__icon">
                                                <use xlink:href="#crosshair-icon"></use>
                                            </svg>
                                        </span>
                                        <span class="d-text12 is-fontBold nearbyComponent__text">Near
                                            me</span>
                                    </div>
                                </div> --}}
                                <span></span>

                            </div>
                            <span></span>
                        </div>
                    </div>
                    <div class="oyo-cell oyo-cell--3-col oyo-cell--4-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__dateRangePicker Rtgyd">
                        <div class="oyo-row oyo-row--no-spacing datePickerDesktop datePickerDesktop--home">
                            <div class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold datePickerDesktop__checkInOut u-textEllipsis">
                                <input type="text" name="daterange" value="07/16/2023 - 07/16/2023" class="date-range-pick" />
                            </div>
                            <span></span>
                        </div>
                    </div>
                    <div class="oyo-cell oyo-cell--3-col oyo-cell--4-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__guestRoomPicker Rtgyd">
                        <div id="Guest-Popup-block" class="oyo-row oyo-row--no-spacing guestRoomPicker guestRoomPicker--home ">
                            <div class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold u-textEllipsis guestRoomPicker__guestRoomCount">
                                <span id="room-count"> 1</span> {!! '&nbsp;' !!} Room, <span id="room-guest"> 2
                                    <input type="hidden" name="gt-count" id="gt-count">
                                    <input type="hidden" name="rm-count" id="rm-count">
                                </span> {!! '&nbsp;' !!} Guests
                            </div>

                            {{-- room add section --}}

                            <span>
                                <div class="oyo-row oyo-row--no-spacing d-popup guestRoomPickerPopUp" style="display: none">
                                    <div id="Guest-Popup" style="display: none;" class="oyo-row oyo-row--no-spacing guestRoomPickerPopUp__headingRow">
                                        <div class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone d-text14 guestRoomPickerPopUp__heading">
                                            Rooms</div>
                                        <div class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone d-text14 guestRoomPickerPopUp__heading">
                                            Guests</div>
                                    </div>
                                    {{-- room --}}
                                    <div id="room-add">
                                        <?php $room_row = 1; ?>

                                        <div class="oyo-row oyo-row--no-spacing guestRoomPickerPopUp__roomsRow" id="room_div-{{ $room_row }}">
                                            <div class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone guestRoomPickerPopUp__roomTable">
                                                <div class="oyo-row oyo-row--no-spacing">
                                                    <div class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone u-displayFlex u-alignItemsCenter">
                                                        <span class="d-text14 guestRoomPickerPopUp__roomCount u-displayBlock" id="room[{{ $room_row }}]">Room
                                                            1</span>
                                                    </div>
                                                    <div class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone">
                                                        <span class="guestRoomPickerPopUp__minus" id="minus-{{ $room_row }}" onclick="minus({{ $room_row }})">
                                                            -
                                                        </span>
                                                        <span class="d-text16 guestRoomPickerPopUp__count" id="guest-count-{{ $room_row }}">2</span>
                                                        <span class="guestRoomPickerPopUp__plus" id="plus-{{ $room_row }}" onclick="plus({{ $room_row }})">
                                                            +
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- room end --}}
                                    <?php $room_row = 2; ?>
                                    <div class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone guestRoomPickerPopUp__buttonWrapper">
                                        <div class="oyo-row oyo-row--no-spacing guestRoomPickerPopUp__buttonRow">
                                            <div class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone d-text14">
                                                <button type="button" class="guestRoomPickerPopUp__lessRoom guestRoomPickerPopUp__lessRoom--disabled" fdprocessedid="98qndw" id="delete-room" onclick="deleteRoom({{ $room_row }});">Delete Room</button>
                                            </div>
                                            <div class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone d-text14">
                                                <button type="button" class="guestRoomPickerPopUp__addRoom" fdprocessedid="4v56i" id="add-room" onclick="addRoom({{ $room_row }});">Add
                                                    Room</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span>

                            {{-- room add section end --}}
                        </div>
                    </div>
                    <div class="oyo-cell oyo-cell--2-col oyo-cell--8-col-tablet oyo-cell--4-col-phone homeSearchWidget__gutter homeSearchWidget__search">
                        <button class="u-textCenter searchButton searchButton--home Rtgyd" id="searchButton" type="submit">
                            Search
                            {{-- <a href="{{ url('/list') }}" style="text-decoration: none; color: #fff; ">Search</a> --}}
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
<div class="bannerStrip" data-cms-id="763934" data-cms-template="cWeb-BannerCarousel">
    <div role="button" class="oyo-row oyo-row--no-spacing banner  banner--noCursor" data-cms-template="cWeb-BannerCarousel">
        <div class="oyo-cell oyo-cell--12-col u-textCenter banner__cardImageContainer u-flexCenter">
            @foreach ($banners as $banner)
            <div class="c-5cjq8j">
                <img alt="OYO" loading="eager" importance="high" src="{{ URL::asset('/uploads/' . $banner['path']) }}" class="c-2tglnv banner__cardImage" compact="true">
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- banner end -->

<!-- slider -->
<section data-testid="segment-slider-ui" class="SegmentSliderUIstyles__SliderOuterWrapper-sc-ifa9fu-0 hAOwmo">
    <div class="dwebCommonstyles__CenteredSpaceWrap-sc-112ty3f-0 SegmentSliderUIstyles__SliderHeaderWrapper-sc-ifa9fu-24 eHRHNU eWGEDe">
        <h3 class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 hJuprJ">Deal of the day</h3>
    </div>
    <div class="SegmentSliderUIstyles__SliderMainContentWrapper-sc-ifa9fu-16 dBbiqB">
        <div class="NowOrNeverDealSliderstyles__NoworNeverSliderWrapper-sc-yj2eyd-5 fXtuEB">
            <div class="NowOrNeverDealSliderstyles__TimerWrapper-sc-yj2eyd-9 bCYSEO">
                <svg viewBox="0 0 13 12" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" height="1.2rem" width="1.2rem" margin="0 0.5rem 0 0" class="HappyTimerIcon__HappyTimerClockIcon-sc-1olnuf0-1 cFfGqR">
                    <path d="M6.01 12a5.153 5.153 0 110-10.305A5.153 5.153 0 016.01 12zm0-9.017a3.864 3.864 0 100 7.729 3.864 3.864 0 000-7.729zM.226 2.83a.644.644 0 01-.073-.908A8.098 8.098 0 012.49.054a.645.645 0 01.601 1.136 6.79 6.79 0 00-1.957 1.567.643.643 0 01-.908.073zM10.887 2.757A6.777 6.777 0 008.93 1.19.645.645 0 019.532.054a8.1 8.1 0 012.333 1.868.645.645 0 01-.54 1.07.644.644 0 01-.441-.235h.003z">
                    </path>
                    <path d="M7.728 7.492H6.011a.644.644 0 01-.644-.644V4.7a.644.644 0 111.288 0v1.503h1.073a.644.644 0 110 1.288z">
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
                            <div itemscope="" itemtype="http://schema.org/Hotel" class="dwebCommonstyles__BaseColumnWrap-sc-112ty3f-2 SegmentSliderUIstyles__SliderListHoterOuterWrp-sc-ifa9fu-6 fVGWFo hdRKmz">
                                <a href="{{ url('/info') . '/' . $hotel['id'] }}">
                                    <div class="SegmentSliderUIstyles__SliderListHotelImageWrap-sc-ifa9fu-7 jOIqHM">
                                        <img src="{{ URL::asset('/uploads/' . $hotel['path']) }}" alt="{{ URL::asset('/uploads/' . $hotel['path']) }}" class="SegmentSliderUIstyles__SliderListHotelImg-sc-ifa9fu-8 gOLvTW" data-testid="" itemprop="image">
                                    </div>
                                </a>
                                <div class="SegmentSliderUIstyles__SliderHotelInfoWrapper-sc-ifa9fu-9 kkmhtq">
                                    <div class="SegmentSliderUIstyles__SliderHotelInfoInnerWrapper-sc-ifa9fu-10 hYvijQ">
                                        <div class="SegmentSliderUIstyles__SliderHotelNameInfoWrap-sc-ifa9fu-11 kOpxsp">
                                            <span itemprop="starRating" content="3" class="SegmentSliderUIstyles__StarRatingWrapperSpan-sc-ifa9fu-12 fmnOYP">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 16" class="HappyRatingStarIcon-sc-qukodd-1 btqzjJ">
                                                    <path fill-rule="evenodd" d="M8.172 13.282l3.964 2.434c.726.446 1.614-.213 1.423-1.047l-1.05-4.577 3.505-3.084c.64-.562.296-1.629-.545-1.696l-4.613-.398L9.051.589c-.325-.785-1.432-.785-1.757 0L5.489 4.904l-4.613.398C.036 5.37-.31 6.436.33 6.999l3.505 3.083-1.05 4.577c-.191.834.697 1.494 1.423 1.048l3.963-2.425z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 16" class="HappyRatingStarIcon-sc-qukodd-1 btqzjJ">
                                                    <path fill-rule="evenodd" d="M8.172 13.282l3.964 2.434c.726.446 1.614-.213 1.423-1.047l-1.05-4.577 3.505-3.084c.64-.562.296-1.629-.545-1.696l-4.613-.398L9.051.589c-.325-.785-1.432-.785-1.757 0L5.489 4.904l-4.613.398C.036 5.37-.31 6.436.33 6.999l3.505 3.083-1.05 4.577c-.191.834.697 1.494 1.423 1.048l3.963-2.425z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 16" class="HappyRatingStarIcon-sc-qukodd-1 btqzjJ">
                                                    <path fill-rule="evenodd" d="M8.172 13.282l3.964 2.434c.726.446 1.614-.213 1.423-1.047l-1.05-4.577 3.505-3.084c.64-.562.296-1.629-.545-1.696l-4.613-.398L9.051.589c-.325-.785-1.432-.785-1.757 0L5.489 4.904l-4.613.398C.036 5.37-.31 6.436.33 6.999l3.505 3.083-1.05 4.577c-.191.834.697 1.494 1.423 1.048l3.963-2.425z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <p itemprop="name" class="SegmentSliderUIstyles__SliderHotelNameText-sc-ifa9fu-14 bfQYZk">
                                                {{ $hotel['property_name'] }}
                                            </p>
                                            <span itemprop="address" class="SegmentSliderUIstyles__SliderHotelLocationText-sc-ifa9fu-15 bgFBTe">Delhi</span>
                                            <div class="ReviewAndRatingsstyles__ReviewAndRatingOuterContainer-sc-1nxmeoo-2 gwqHKN">
                                                <div class="ReviewAndRatingsstyles__HotelTotalReviewWrapper-sc-1nxmeoo-1 ixtzNN">
                                                    <div class="ReviewAndRatingsstyles__TotalReviewOuterDiv-sc-1nxmeoo-9 fIKiFm">
                                                        <div class="ReviewAndRatingsstyles__AverageReviewWrapper-sc-1nxmeoo-7 cWfjjH">
                                                            <span content="3.7" class="ReviewAndRatingsstyles__AverageReviewText-sc-1nxmeoo-10 ZTpPO">{{ $hotel['average_rating'] }}/5</span>
                                                        </div>
                                                        <span class="ReviewAndRatingsstyles__ReviewTestStyles-sc-1nxmeoo-8 bnqyMS"></span>
                                                    </div>
                                                    <span content="3.7" data-testid="ratingCount" class="ReviewAndRatingsstyles__TotalReviewCountText-sc-1nxmeoo-5 jjZSih">{{ $hotel['rating_count'] }}
                                                        Ratings</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="SegmentSliderUIstyles__SliderHotelPriceInfoWrap-sc-ifa9fu-13 cGZutD">
                                            <div class="SegmentSliderUIstyles__PriceOuterWrap-sc-ifa9fu-17 fyyhRj">
                                                <div class="SegmentSliderUIstyles__OriginalPriceStrike-sc-ifa9fu-18 dTqWxL">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="HappyRupeeIcon-sc-em2g9m-1 SegmentSliderUIstyles__RuppeStrike-sc-ifa9fu-19 hEpHNM jDAIke">
                                                        <path d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z">
                                                        </path>
                                                    </svg>{{ $hotel['price'] }}
                                                </div>
                                                <h3 itemprop="priceRange" class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 hJuprJ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" color="#e47544" class="HappyRupeeIcon-sc-em2g9m-1 SegmentSliderUIstyles__RuppeAskingPrice-sc-ifa9fu-20 hEpHNM eAomPZ">
                                                        <path d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z">
                                                        </path>
                                                    </svg>
                                                    <span style="color: rgb(228, 117, 68);">{{ $hotel['special_price'] }}</span>
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
<div class="cmsWrapper ">
    <div class="fadeIn__container fadeIn__container--active">
        <div class="oyo-row oyoExpanding" data-cms-id="432737" data-cms-template="cWeb-OyoExpanding">
            <div class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone oyoExpanding__imageWrapper">
                <div class="oyoExpanding__countryImage Rg-im1 active ">
                    <div class="c-10le73q">
                        <img alt="India" loading="auto" importance="auto" src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_1.jpg" compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo"> Kerala</div>
                    </div>
                </div>
                <div class="oyoExpanding__countryImage Rg-im2 active ">
                    <div class="c-10le73q">
                        <img alt="China" loading="auto" importance="auto" src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_2.jpg" compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo"> Karnataka</div>
                    </div>
                </div>
                <div class="oyoExpanding__countryImage Rg-im3 active ">
                    <div class="c-10le73q">
                        <img alt="Malaysia" loading="auto" importance="auto" src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_3.jpg" compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo"> Goa</div>
                    </div>
                </div>
                <div class="oyoExpanding__countryImage Rg-im4 active ">
                    <div class="c-10le73q">
                        <img alt="Nepal" loading="auto" importance="auto" src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_4.jpg" compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo"> Delhi</div>
                    </div>
                </div>
                <div class="oyoExpanding__countryImage Rg-im5 active ">
                    <div class="c-10le73q">
                        <img alt="Indonesia" loading="auto" importance="auto" src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_5.jpg" compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo"> Tamilnadu</div>
                    </div>
                </div>
                <div class="oyoExpanding__countryImage Rg-im6 active ">
                    <div class="c-10le73q">
                        <img alt="UAE" loading="auto" importance="auto" src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetCountryItems_itemImage_6.jpg" compact="true" transparent="true" lazyload="true" class="c-2tglnv">
                    </div>
                    <div class="c-79elbk oyoExpanding__tooltipWrapper">
                        <div class="c-1xnmrhy oyoExpanding__tooltip"></div>
                        <div class="c-1lmmwwo">Himachal </div>
                    </div>
                </div>
                <img alt="map" src="https://assets.oyoroomscdn.com/cmsMedia/432737_widgetImage.jpg">
            </div>
            <div class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone oyoExpanding__contentWrapper map-cont">
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
                        <span class="oyoExpanding__countryColor" style="background-color: rgb(26, 182, 79);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Kerala</span>
                    </li>
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor" style="background-color: rgb(255, 127, 123);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Karnataka</span>
                    </li>
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor" style="background-color: rgb(245, 166, 35);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Goa</span>
                    </li>
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor" style="background-color: rgb(95, 214, 242);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Delhi</span>
                    </li>
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor" style="background-color: rgb(254, 148, 241);">&nbsp;</span>
                        <span class="oyoExpanding__countryLink">Tamilnadu</span>
                    </li>
                    <li class="d-text16 is-fontBold oyoExpanding__country">
                        <span class="oyoExpanding__countryColor" style="background-color: rgb(126, 137, 228);">&nbsp;</span>
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
    <div class="PopularDestinationsUIstyles__PopularImageOuterWrapper-sc-1ir08i0-2 fggXza">
        <a href="" title="Bengaluru" class="PopularDestinationsUIstyles__PopularBigImageWrapper-sc-1ir08i0-3 dAUSpZ">
            <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Bengaluru_1-1581426843.jpg" alt="" class="PopularDestinationsUIstyles__PopularBigImage-sc-1ir08i0-4 isfagQ" data-testid="" itemprop="">
            <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK ">
                <h3 class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 hJuprJ gmLHPV Rgtyh">
                    Bengaluru</h3>
                <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 cMRkEv tryHy">Technology Hub of
                    India</p>
            </div>

        </a>
        <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP">
            <a href="" title="Phuket" class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp">
                <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Phuket-1581457448.jpg" alt="Phuket" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO" data-testid="" itemprop="">
                <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK ">
                    <h3 class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 hJuprJ gmLHPV Rgtyh">
                        Phuket</h3>
                    <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 cMRkEv tryHy">A tropical
                        paradise boasting of stunning beaches</p>
                </div>
            </a>
            <a href="" title="Ho Chi Minh" class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp">
                <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_HoChiMinh-1581456751.jpg" alt="Ho Chi Minh" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO" data-testid="" itemprop="">
                <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK ">
                    <h3 class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 hJuprJ gmLHPV Rgtyh">
                        Dubai</h3>
                    <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 cMRkEv tryHy">Treasured gem of
                        the Emirates</p>
                </div>
            </a>
        </div>
        <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP">
            <a href="" title="Shimla" class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp">
                <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Shimla-1581427547.jpg" alt="Shimla" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO" data-testid="" itemprop="">
                <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK ">
                    <h3 class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 hJuprJ gmLHPV Rgtyh">
                        Shimla</h3>
                    <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 cMRkEv tryHy">Endearing
                        combination of snow-covered peaks and blue sky</p>
                </div>
            </a>
            <a href="" title="Munnar" class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp">
                <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Munnar-1581456447.jpg" alt="Munnar" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO" data-testid="" itemprop="">
                <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK ">
                    <h3 class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 hJuprJ gmLHPV Rgtyh">
                        Munnar</h3>
                    <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 cMRkEv tryHy">Referred as the
                        Kashmir of South India</p>
                </div>
            </a>
        </div>
    </div>
</section>

@include('footer')


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' type='text/javascript'></script>
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
<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
<script>
    $(document).on('ready', function() {
        // initialization of daterangepicker
        $('.js-daterangepicker').daterangepicker();
    });
</script>

<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left',
            minYear: 2023,
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });
</script>

{{-- <script>
    $('.guestRoomPickerPopUp').hide();
    window.addEventListener('click', function(e) {
        if (document.getElementById('Guest-Popup-block').contains(e.target)) {
            // Clicked in box
        } else {
            $('.guestRoomPickerPopUp').hide();
        }
    });

    $('.guestRoomPicker__guestRoomCount').on('click', function(e) {
        var x = document.getElementById("Guest-Popup");
        if (x.style.display === "none") {
            x.style.display = "flex";
            $('.guestRoomPickerPopUp').show();
        } else {
            x.style.display = "none";
            $('.guestRoomPickerPopUp').hide();
        }
    });
</script> --}}

<script type="text/javascript">
    function addRoom(room_row) {

        if (room_row <= 5) {
            html = '<div class="oyo-row oyo-row--no-spacing guestRoomPickerPopUp__roomsRow" id="room_div-' + room_row +
                '">';
            html +=
                '<div class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone guestRoomPickerPopUp__roomTable">';
            html += '<div class="oyo-row oyo-row--no-spacing">';
            html +=
                '<div class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone u-displayFlex u-alignItemsCenter">';
            html += '<span class="d-text14 guestRoomPickerPopUp__roomCount u-displayBlock">';
            html += 'Room ' + room_row + '';
            html += ' </span>';
            html += '</div>';
            html += '<div class="oyo-cell oyo-cell--6-col oyo-cell--4-col-tablet oyo-cell--2-col-phone">';
            html += '<span class="guestRoomPickerPopUp__minus" id="minus-' + room_row + '" onclick="minus(' + room_row +
                ')">';
            html += '-';
            html += '</span>';
            html += '<span class="d-text16 guestRoomPickerPopUp__count" style="margin-left: 8px;" id="guest-count-' +
                room_row + '">';
            html += '2';
            html += '</span>';
            html += '<span class="guestRoomPickerPopUp__plus" id="plus-' + room_row + '" onclick="plus(' + room_row +
                ')">';
            html += '+';
            html += '</span>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#room-add').append(html);

            document.getElementById('delete-room').setAttribute('onclick', 'deleteRoom(' + room_row + ')');
            document.getElementById("room-count").textContent = room_row;

            room_row++;
            document.getElementById('add-room').setAttribute('onclick', 'addRoom(' + room_row + ')');
        }
        // $('#room-count').val(room_row);
        // $('#room-guest').val();
    }
</script>

<script>
    function deleteRoom(room_row) {
        const element = document.getElementById("room_div-" + room_row);
        element.remove();
        document.getElementById('add-room').setAttribute('onclick', 'addRoom(' + room_row + ')');
        room_row--;
        document.getElementById('delete-room').setAttribute('onclick', 'deleteRoom(' + room_row + ')');

    }

    function minus(row) {
        var guest = document.getElementById("guest-count-" + row).innerText;
        var total = 1;
        if (guest > 1) {
            var value = parseInt(guest) - 1;
            for (i = 1; i <= row; i++) {
                var sum = document.getElementById("guest-count-" + row).innerText;
                var total_value = parseInt(total) - parseInt(sum);
                console.log('----' + total_value);

            }
            console.log('minus----' + total_value);

            document.getElementById("guest-count-" + row).textContent = value;
            document.getElementById("room-guest").textContent = total_value;
        }
    }

    function plus(row) {
        var guest = document.getElementById("guest-count-" + row).innerText;
        var total = 0;

        if (guest < 3) {
            var value = parseInt(guest) + 1;
            document.getElementById("guest-count-" + row).textContent = value;
            for (i = 1; i <= row; i++) {
                var sum = document.getElementById("guest-count-" + row).innerText;
                var total_value = parseInt(total) + parseInt(sum);
                console.log('+++++' + total_value);
            }

            console.log('plus----' + total_value);
            document.getElementById("room-guest").textContent = total_value;
        }
    }
</script>