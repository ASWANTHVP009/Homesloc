@include('commonHeader')

<!-- content -->
<style>
    .checkbox input:checked~span>svg {
        margin-top: -19px;
    }
</style>

<div class="listing__topSection web-lists">

    <aside class="sidebar">
        <div class="sidebar__header">
            <div class="filters__heading"><span>Filters</span></div>
        </div>
        <div class="filters">
            {{-- <div class="filters__wrapper">
                <div class="filters__item">
                    <div class="rangepicker">
                        <h4>Price</h4>
                        <div class="col-md-6" style="margin-top: 50px;">
                            <div class="slider-wrapper slider-success slider-strips">
                                <input class="input-range" type="text" data-slider-step="1"
                                    data-slider-value="14, 75" data-slider-min="0" data-slider-max="100"
                                    data-slider-range="true" data-slider-tooltip_split="true" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


            <form action="{{ url('/list') }}" method="GET">

                <div class="filters__wrapper">

                    <div class="filters__wrapper">
                        <div class="filters__item">
                            <div class="checkBoxGroup">
                                <h4>Price</h4>
                                @foreach ($price_ranges as $price_range)
                                    <label class="checkbox" htmlfor="{{ $price_range['id'] }}">
                                        @if (request("z_{$price_range['id']}") == 'on')
                                            <input class=" " checked="" id="{{ $price_range['id'] }}"
                                                name="z_{{ $price_range['id'] }}" icon_id="143" excludequery="true"
                                                type="checkbox">
                                        @else
                                            <input class=" " id="{{ $price_range['id'] }}"
                                                name="z_{{ $price_range['id'] }}" icon_id="143" excludequery="true"
                                                type="checkbox">
                                        @endif

                                        <span lazyload="true"
                                            class="checkbox__checkmark checkbox__checkmark--  c-1m1i8cc"><!--?xml version='1.0' encoding='UTF-8'?-->
                                            <svg viewBox="0 0 12 9" version="1.1" id="checkmark"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Arash" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Listing_ListView"
                                                        transform="translate(-22.000000, -260.000000)" fill="white">
                                                        <g id="component/filters"
                                                            transform="translate(0.000000, 96.000000)">
                                                            <g id="ic/checkbox/inactive-copy-4"
                                                                transform="translate(20.000000, 160.000000)">
                                                                <polygon id="Fill-3-Copy-9"
                                                                    points="2 8.68138196 3.20857143 7.46353167 6.28571429 10.5556622 12.7914286 4 14 5.22648752 6.28571429 13">
                                                                </polygon>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></span>
                                        <div class="checkbox__label">{{ $price_range['name'] }}</div>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="filters__wrapper">
                        <div class="filters__item">
                            <div class="checkBoxGroup">
                                <h4>Accomodation Type</h4>
                                @foreach ($hotel_types as $hotel_type)
                                    <label class="checkbox" htmlfor="{{ $hotel_type->id }}">
                                        @if (request("t_$hotel_type->id") == 'on')
                                            <input class=" " checked="" id="{{ $hotel_type->id }}"
                                                name="t_{{ $hotel_type->id }}" icon_id="143" excludequery="true"
                                                type="checkbox">
                                        @else
                                            <input class=" " id="{{ $hotel_type->id }}"
                                                name="t_{{ $hotel_type->id }}" icon_id="143" excludequery="true"
                                                type="checkbox">
                                        @endif

                                        <span lazyload="true"
                                            class="checkbox__checkmark checkbox__checkmark--  c-1m1i8cc"><!--?xml version='1.0' encoding='UTF-8'?-->
                                            <svg viewBox="0 0 12 9" version="1.1" id="checkmark"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Arash" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Listing_ListView"
                                                        transform="translate(-22.000000, -260.000000)" fill="white">
                                                        <g id="component/filters"
                                                            transform="translate(0.000000, 96.000000)">
                                                            <g id="ic/checkbox/inactive-copy-4"
                                                                transform="translate(20.000000, 160.000000)">
                                                                <polygon id="Fill-3-Copy-9"
                                                                    points="2 8.68138196 3.20857143 7.46353167 6.28571429 10.5556622 12.7914286 4 14 5.22648752 6.28571429 13">
                                                                </polygon>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></span>
                                        <div class="checkbox__label">{{ $hotel_type->name }}</div>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- <div class="filters__item">
                        <div class="checkBoxGroup">
                            <h4>Accomodation Type</h4>
                            <div class="card-body">
                                @foreach ($hotel_types as $hotel_type)
                                    <label class="checkbox" htmlfor="android-app-family-collection">

                                        @if (request("t_$hotel_type->id") == 'on')
                                            <input checked="" id="{{ $hotel_type->id }}"
                                                name="t_{{ $hotel_type->id }}" count="9" type="checkbox">
                                        @else
                                            <input id="{{ $hotel_type->id }}" name="t_{{ $hotel_type->id }}"
                                                count="9" type="checkbox">
                                        @endif

                                        <span lazyload="true"
                                            class="checkbox__checkmark checkbox__checkmark--  c-1m1i8cc">
                                            <svg viewBox="0 0 12 9" version="1.1" id="checkmark"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Arash" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Listing_ListView"
                                                        transform="translate(-22.000000, -260.000000)" fill="white">
                                                        <g id="component/filters"
                                                            transform="translate(0.000000, 96.000000)">
                                                            <g id="ic/checkbox/inactive-copy-4"
                                                                transform="translate(20.000000, 160.000000)">
                                                                <polygon id="Fill-3-Copy-9"
                                                                    points="2 8.68138196 3.20857143 7.46353167 6.28571429 10.5556622 12.7914286 4 14 5.22648752 6.28571429 13">
                                                                </polygon>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></span>
                                        <div class="checkbox__label">{{ $hotel_type->name }}</div>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div> --}}

                    <div class="filters__wrapper">
                        <div class="filters__item">
                            <div class="checkBoxGroup">
                                <h4>Hotel Facilities</h4>

                                @foreach ($amentities as $amentitiy)
                                    <label class="checkbox" htmlfor="{{ $amentitiy->id }}">
                                        @if (request("a_$amentitiy->id") == 'on')
                                            <input class=" " checked="" id="{{ $amentitiy->id }}"
                                                name="a_{{ $amentitiy->id }}" icon_id="143" excludequery="true"
                                                type="checkbox">
                                        @else
                                            <input class=" " id="{{ $amentitiy->id }}"
                                                name="a_{{ $amentitiy->id }}" icon_id="143" excludequery="true"
                                                type="checkbox">
                                        @endif

                                        <span lazyload="true"
                                            class="checkbox__checkmark checkbox__checkmark--  c-1m1i8cc"><!--?xml version='1.0' encoding='UTF-8'?-->
                                            <svg viewBox="0 0 12 9" version="1.1" id="checkmark"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Arash" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Listing_ListView"
                                                        transform="translate(-22.000000, -260.000000)" fill="white">
                                                        <g id="component/filters"
                                                            transform="translate(0.000000, 96.000000)">
                                                            <g id="ic/checkbox/inactive-copy-4"
                                                                transform="translate(20.000000, 160.000000)">
                                                                <polygon id="Fill-3-Copy-9"
                                                                    points="2 8.68138196 3.20857143 7.46353167 6.28571429 10.5556622 12.7914286 4 14 5.22648752 6.28571429 13">
                                                                </polygon>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></span>
                                        <div class="checkbox__label">{{ $amentitiy->name }}</div>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="fl-button">Filter</button>
                </div>
            </form>
    </aside>

    <section class="listing__content">

        <div class="listing__contentWrapper">

            <div class="ListingContentHeader">

                <div class="ListingContentHeader__heading"><span>
                        <h1 class="ListingContentHeader__h1">{{ $totalCount }} Locations Found</h1>
                    </span>



                    <div class="web-sort">

                        <div class="dropdown"><span class="dropdown__label">Sort By</span>
                            <select id="mySelect" style="border-radius: 3px; font-size: 15px;padding: 10px;">
                                <option value="1" class="dropdown__item">Popularity</option>
                                <option value="2">Ratings</option>
                                <option value="3">Price Low to High</option>
                                <option value="4">Price High to Low</option>
                            </select>
                            <input type="hidden" id="selectedValue" value="1">
                        </div>

                    </div>

                </div>
                <div class="ListingContentHeader__divider"></div>

            </div>

            <div class="container">
                <div class="row">
                    <?php $expand = ''; ?>
                    @for ($i = 1; $i <= app('request')->input('rm-count'); $i++)
                        <?php
                        $expand .= "&config-$i" . '=' . app('request')->input('config-' . $i);
                        ?>
                    @endfor

                    @foreach ($hotels as $hotel)
                        {{-- <form action="{{ url('/info') . '/' . $hotel['id'] }}" method="GET"> --}}
                        <div class="propertyList col-sm-4">
                            <div itemscope=""
                                class="dwebCommonstyles__BaseColumnWrap-sc-112ty3f-2 SegmentSliderUIstyles__SliderListHoterOuterWrp-sc-ifa9fu-6 fVGWFo hdRKmz">
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
                                        app('request')->input('daterange') .
                                        '&gt-count=' .
                                        app('request')->input('gt-count') .
                                        '&rm-count=' .
                                        app('request')->input('rm-count') .
                                        $expand }} 
                                ">

                                    <div class="SegmentSliderUIstyles__SliderListHotelImageWrap-sc-ifa9fu-7 jOIqHM">
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
                                                    @include('star', ['rating' => 2])
                                                </div>
                                            </span>
                                            <p itemprop="name"
                                                class="SegmentSliderUIstyles__SliderHotelNameText-sc-ifa9fu-14 bfQYZk">
                                                <a href=".\info.html"> {{ $hotel['property_name'] }}</a>
                                            </p><span itemprop="address"
                                                class="SegmentSliderUIstyles__SliderHotelLocationText-sc-ifa9fu-15 bgFBTe">{{ $hotel['location'] }}</span>
                                            <div
                                                class="ReviewAndRatingsstyles__ReviewAndRatingOuterContainer-sc-1nxmeoo-2 gwqHKN">

                                                <div
                                                    class="ReviewAndRatingsstyles__HotelTotalReviewWrapper-sc-1nxmeoo-1 ixtzNN">

                                                    <div
                                                        class="ReviewAndRatingsstyles__TotalReviewOuterDiv-sc-1nxmeoo-9 fIKiFm">

                                                        <div
                                                            class="ReviewAndRatingsstyles__AverageReviewWrapper-sc-1nxmeoo-7 cWfjjH">
                                                            <span content="3.9"
                                                                class="ReviewAndRatingsstyles__AverageReviewText-sc-1nxmeoo-10 ZTpPO">{{ $hotel['average_rating'] }}/5</span>
                                                        </div><span
                                                            class="ReviewAndRatingsstyles__ReviewTestStyles-sc-1nxmeoo-8 bnqyMS"></span>
                                                    </div><span content="3.9" data-testid="ratingCount"
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
                                                    class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                        color="#e47544"
                                                        class="HappyRupeeIcon-sc-em2g9m-1 SegmentSliderUIstyles__RuppeAskingPrice-sc-ifa9fu-20 hEpHNM eAomPZ">
                                                        <path
                                                            d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z">
                                                        </path>
                                                    </svg><span
                                                        style="color: rgb(228, 117, 68);">{{ $hotel['special_price'] }}</span>
                                                </h3>

                                                <p class="SegmentSliderUIstyles__PerNightText-sc-ifa9fu-23 erqdGN">
                                                    <strong>1 room</strong> <span>per night</span>
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        {{-- </form> --}}
                    @endforeach
                </div>
            </div>

            {{-- </div> --}}

            <div class="listing__content--loadMore">
                <div class="listing__content--loadMoreWrapper">
                    <span class="loadMoreIcon">
                        <span class="c-1m1i8cc">
                            <svg width="19px" height="18px" viewBox="0 0 19 18"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="Arash" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd" opacity="0.539999962">
                                    <g id="Listing_ListView" transform="translate(-787.000000, -5300.000000)"
                                        fill="black" stroke-width="0.5">
                                        <g id="Group-9" transform="translate(788.000000, 5301.000000)">
                                            <path
                                                d="M15.7785361,6.64686723 L16.8951736,5.04873557 C17.0396424,4.84417804 17.3221875,4.79431714 17.526745,4.93622893 C17.7313025,5.08133693 17.7811634,5.36324278 17.6392516,5.56843955 L15.8147213,8.18116706 C15.797115,8.20921251 15.7765355,8.23518011 15.753439,8.25864076 C15.7161384,8.29691064 15.6729916,8.32734888 15.626541,8.34963403 C15.6165033,8.35439829 15.606295,8.35887039 15.595903,8.36297008 C15.5426469,8.3838613 15.4859682,8.3945297 15.4293911,8.3945297 C15.3940899,8.3945297 15.3592879,8.39066199 15.3251502,8.38270611 C15.2746938,8.37103004 15.2275567,8.35104016 15.1852373,8.32423466 L12.3552749,6.65195523 C12.1379325,6.52474601 12.0682551,6.24731486 12.1954643,6.03252945 C12.3226735,5.81518707 12.6001047,5.74550966 12.8174471,5.87271888 L14.9270611,7.11760328 C14.5183181,3.62585431 11.5401565,0.906445561 7.94066767,0.906445561 C4.06238473,0.906445561 0.906445561,4.06238473 0.906445561,7.94002843 C0.906445561,11.8208683 4.06238473,14.9742505 7.94066767,14.9742505 C10.4228455,14.9742505 12.7471304,13.6433481 14.0057985,11.5038042 C14.1330077,11.2890188 14.4129958,11.2161451 14.6277812,11.3439936 C14.8451236,11.4712028 14.914801,11.748634 14.7901488,11.9653371 C13.3665562,14.3803945 10.7424666,15.8832531 7.94066767,15.8832531 C3.5631365,15.8832531 0,12.3201166 0,7.94002843 C0,3.5631365 3.5631365,0 7.94066767,0 C11.8796414,0 15.1587678,2.88243615 15.7785361,6.64686724 Z"
                                                id="Combined-Shape-Copy"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </span>
                    <span>
                        {{ $totalCount }} Results Found
                    </span>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- content -->

{{-- mobile navbar --}}
<nav class="mobile-bottom-nav">
    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
        <div class="mobile-bottom-nav__item-content">
            <button type="button" class="filter-bt" data-toggle="modal" data-target="#filter-modal">
                <i class="fas fa-filter"></i> Filter
            </button>
        </div>
    </div>

    <div class="mobile-bottom-nav__item">
        <div class="mobile-bottom-nav__item-content">
            <button type="button" class="filter-bt" data-toggle="modal" data-target="#sort-modal">
                <i class="fas fa-sort"></i> Sort
            </button>
        </div>
    </div>
</nav>
{{-- End --}}

{{-- Filter modal --}}
<div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-title close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times; &nbsp; Filter</span>
                </button>
            </div>
            <form action="{{ url('/list') }}" method="GET">
                <div class="modal-body">
                    <div class="filters__wrapper">
                        <div class="filters__wrapper">
                            <div class="filters__item">
                                <div class="checkBoxGroup">
                                    <h4>Price</h4>
                                    @foreach ($price_ranges as $price_range)
                                        <label class="checkbox" htmlfor="{{ $price_range['id'] }}">
                                            @if (request("z_{$price_range['id']}") == 'on')
                                                <input class=" " checked="" id="{{ $price_range['id'] }}"
                                                    name="z_{{ $price_range['id'] }}" icon_id="143"
                                                    excludequery="true" type="checkbox">
                                            @else
                                                <input class=" " id="{{ $price_range['id'] }}"
                                                    name="z_{{ $price_range['id'] }}" icon_id="143"
                                                    excludequery="true" type="checkbox">
                                            @endif

                                            <span lazyload="true"
                                                class="checkbox__checkmark checkbox__checkmark--  c-1m1i8cc"><!--?xml version='1.0' encoding='UTF-8'?-->
                                                <svg viewBox="0 0 12 9" version="1.1" id="checkmark"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Arash" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g id="Listing_ListView"
                                                            transform="translate(-22.000000, -260.000000)"
                                                            fill="white">
                                                            <g id="component/filters"
                                                                transform="translate(0.000000, 96.000000)">
                                                                <g id="ic/checkbox/inactive-copy-4"
                                                                    transform="translate(20.000000, 160.000000)">
                                                                    <polygon id="Fill-3-Copy-9"
                                                                        points="2 8.68138196 3.20857143 7.46353167 6.28571429 10.5556622 12.7914286 4 14 5.22648752 6.28571429 13">
                                                                    </polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></span>
                                            <div class="checkbox__label">{{ $price_range['name'] }}</div>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="filters__wrapper">
                            <div class="filters__item">
                                <div class="checkBoxGroup">
                                    <h4>Accomodation Type</h4>
                                    @foreach ($hotel_types as $hotel_type)
                                        <label class="checkbox" htmlfor="{{ $hotel_type->id }}">
                                            @if (request("t_$hotel_type->id") == 'on')
                                                <input class=" " checked="" id="{{ $hotel_type->id }}"
                                                    name="t_{{ $hotel_type->id }}" icon_id="143"
                                                    excludequery="true" type="checkbox">
                                            @else
                                                <input class=" " id="{{ $hotel_type->id }}"
                                                    name="t_{{ $hotel_type->id }}" icon_id="143"
                                                    excludequery="true" type="checkbox">
                                            @endif
                                            <span lazyload="true"
                                                class="checkbox__checkmark checkbox__checkmark--  c-1m1i8cc"><!--?xml version='1.0' encoding='UTF-8'?-->
                                                <svg viewBox="0 0 12 9" version="1.1" id="checkmark"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Arash" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g id="Listing_ListView"
                                                            transform="translate(-22.000000, -260.000000)"
                                                            fill="white">
                                                            <g id="component/filters"
                                                                transform="translate(0.000000, 96.000000)">
                                                                <g id="ic/checkbox/inactive-copy-4"
                                                                    transform="translate(20.000000, 160.000000)">
                                                                    <polygon id="Fill-3-Copy-9"
                                                                        points="2 8.68138196 3.20857143 7.46353167 6.28571429 10.5556622 12.7914286 4 14 5.22648752 6.28571429 13">
                                                                    </polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></span>
                                            <div class="checkbox__label">{{ $hotel_type->name }}</div>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="filters__wrapper">
                            <div class="filters__item">
                                <div class="checkBoxGroup">
                                    <h4>Hotel Facilities</h4>
                                    @foreach ($amentities as $amentitiy)
                                        <label class="checkbox" htmlfor="{{ $amentitiy->id }}">
                                            @if (request("a_$amentitiy->id") == 'on')
                                                <input class=" " checked="" id="{{ $amentitiy->id }}"
                                                    name="a_{{ $amentitiy->id }}" icon_id="143" excludequery="true"
                                                    type="checkbox">
                                            @else
                                                <input class=" " id="{{ $amentitiy->id }}"
                                                    name="a_{{ $amentitiy->id }}" icon_id="143" excludequery="true"
                                                    type="checkbox">
                                            @endif
                                            <span lazyload="true"
                                                class="checkbox__checkmark checkbox__checkmark--  c-1m1i8cc"><!--?xml version='1.0' encoding='UTF-8'?-->
                                                <svg viewBox="0 0 12 9" version="1.1" id="checkmark"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Arash" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g id="Listing_ListView"
                                                            transform="translate(-22.000000, -260.000000)"
                                                            fill="white">
                                                            <g id="component/filters"
                                                                transform="translate(0.000000, 96.000000)">
                                                                <g id="ic/checkbox/inactive-copy-4"
                                                                    transform="translate(20.000000, 160.000000)">
                                                                    <polygon id="Fill-3-Copy-9"
                                                                        points="2 8.68138196 3.20857143 7.46353167 6.28571429 10.5556622 12.7914286 4 14 5.22648752 6.28571429 13">
                                                                    </polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></span>
                                            <div class="checkbox__label">{{ $amentitiy->name }}</div>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="fl-button">Filter</button>
                </div>
            </form>

        </div>
    </div>
</div>
{{-- Filter modal End --}}


{{-- sort modal --}}
<div class="modal fade" id="sort-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-title close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times; &nbsp; Sort By</span>
                </button>
            </div>
            <form action="{{ url('/list') }}" method="GET">
                <div class="modal-body">
                    <div class="c-104qxly">
                        <div class="c-1xlacyw ripple active">
                            <span class="c-pwjat4">
                                <span class="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 20V10" stroke="#212121" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M18 20V4" stroke="#212121" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M6 20V16" stroke="#212121" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </span>
                            <div><a onclick="sort(1)">Popularity</a></div>
                        </div>
                        <div class="c-1xlacyw ripple">
                            <span class="c-pwjat4">
                                <span class="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"
                                            stroke="#212121" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </span>
                            <div><a onclick="sort(2)">Guest Ratings</a></div>
                        </div>
                        <div class="c-1xlacyw ripple">
                            <span class="c-pwjat4">
                                <span class="">
                                    <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 3.66663V20.3333" stroke="#212121" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M14.1667 6.16663H7.91667C7.14312 6.16663 6.40125 6.47392 5.85427 7.0209C5.30729 7.56788 5 8.30974 5 9.08329C5 9.85684 5.30729 10.5987 5.85427 11.1457C6.40125 11.6927 7.14312 12 7.91667 12H12.0833C12.8569 12 13.5987 12.3073 14.1457 12.8542C14.6927 13.4012 15 14.1431 15 14.9166C15 15.6902 14.6927 16.432 14.1457 16.979C13.5987 17.526 12.8569 17.8333 12.0833 17.8333H5"
                                            stroke="#212121" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M20 12.5V5.5" stroke="#212121" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M16.5 9L20 5.5L23.5 9" stroke="#212121" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </span>
                            <div><a onclick="sort(3)">Price Low to High</a></div>
                        </div>
                        <div class="c-1xlacyw ripple">
                            <span class="c-pwjat4">
                                <span class="">
                                    <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 3.66663V20.3333" stroke="#212121" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M14.1667 6.16663H7.91667C7.14312 6.16663 6.40125 6.47392 5.85427 7.0209C5.30729 7.56788 5 8.30974 5 9.08329C5 9.85684 5.30729 10.5987 5.85427 11.1457C6.40125 11.6927 7.14312 12 7.91667 12H12.0833C12.8569 12 13.5987 12.3073 14.1457 12.8542C14.6927 13.4012 15 14.1431 15 14.9166C15 15.6902 14.6927 16.432 14.1457 16.979C13.5987 17.526 12.8569 17.8333 12.0833 17.8333H5"
                                            stroke="#212121" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M20 5.5V12.5" stroke="#212121" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M23.5 9L20 12.5L16.5 9" stroke="#212121" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </span>
                            <div><a onclick="sort(4)">Price High to Low</a></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- sort modal End --}}


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

<script>
    const select = document.getElementById('mySelect');
    const selectedValue = document.getElementById('selectedValue');

    select.addEventListener('change', function() {
        var currentUrl = window.location.href;
        var updatedUrl = removeUrlParameter(currentUrl, 'sort');
        selectedValue.value = select.value;
        const urlParts = updatedUrl.split('?');
        var separator = updatedUrl.includes('?') ? '&' : '?';
        var newUrl = updatedUrl + separator + 'sort=' + select.value;
        window.location.href = newUrl;
    });

    function removeUrlParameter(url, parameterName) {
        var urlParts = url.split('?');
        if (urlParts.length >= 2) {
            var prefix = encodeURIComponent(parameterName) + '=';
            var params = urlParts[1].split(/[&;]/g);
            // Loop through the parameters
            for (var i = params.length - 1; i >= 0; i--) {
                if (params[i].lastIndexOf(prefix, 0) === 0) {
                    params.splice(i, 1); // Remove the parameter
                }
            }
            // Reconstruct the URL
            return urlParts[0] + (params.length > 0 ? '?' + params.join('&') : '');
        }
        return url;
    }

    function sort(sort) {

        var currentUrl = window.location.href;
        var updatedUrl = removeUrlParameter(currentUrl, 'sort');
        const urlParts = updatedUrl.split('?');
        var separator = updatedUrl.includes('?') ? '&' : '?';
        var newUrl = updatedUrl + separator + 'sort=' + sort;
        window.location.href = newUrl;

    }
</script>

@include('commonFooter')
