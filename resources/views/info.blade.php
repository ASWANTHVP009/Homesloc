@include('commonHeader');
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" type="text/css">

<!-- content -->

<div itemscope="true" itemtype="http://schema.org/Hotel">
    <meta itemprop="telephone" content="+919313 9313 93">
    <meta itemprop="hasMap" content="https://www.google.com/maps?q=10.162278,76.410321&amp;z=13">
    <div itemprop="geo" itemscope="true" itemtype="http://schema.org/GeoCoordinates">
        <meta itemprop="latitude" content="10.162278">
        <meta itemprop="longitude" content="76.410321">
    </div>

    <meta itemprop="url" content="https://www.oyorooms.com/208227/">
    <div name="hotelDetailCarousel">
        <div>
            <div class="c-8xhyrj">

                <div class="slick-slider slider variable-width c-1b1daic slick-initialized" dir="ltr">

                    <button type="button" data-role="none" class="slick-arrow slick-prev slick-disabled"
                        style="display: block;">
                        Previous</button>

                    <div class="slick-list">

                        <section class="section slider__section">
                            <div class="container slider__wrapper">
                                <div class="slider__column splide">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            @foreach ($images as $image)
                                                <li class="splide__slide">
                                                    <div data-index="0" class="slick-slide slick-active slick-current"
                                                        tabindex="-1" aria-hidden="false" style="outline: none;">
                                                        <div>
                                                            <div tabindex="-1"
                                                                style="width: 100%; display: inline-block;">
                                                                <div class="c-1hvclm3">
                                                                    <div class="c-ahj8kj"><img
                                                                            alt="Collection O 811106 Ashiyana Homes, Kakkanad Kochi, Kochi"
                                                                            loading="auto" importance="auto"
                                                                            src="{{ URL::asset('/uploads/' . $image['path']) }}"
                                                                            itemprop="image" placeholdertype="hotel"
                                                                            placeholderclass="c-185bv1r"
                                                                            class="c-hwlvh4">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>



                </div>

                <div class="c-zr4j7z">

                    <button type="button" tabindex="0"><span class="c-1kiaciz"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                <path fill="#222"
                                    d="M13.79 1.374c0-.255.16-.483.402-.578a.66.66 0 01.693.13l4.17 3.932a.61.61 0 01.003.891l-4.17 3.97a.66.66 0 01-.695.134.624.624 0 01-.403-.578v-1.82a4.103 4.103 0 00-1.255.211c-1.067.355-1.984 1.123-2.727 2.292l-.251.397a.653.653 0 01-.666.288.634.634 0 01-.518-.505l-.085-.46-.004-.023a5.86 5.86 0 012.232-5.42c.212-.18.546-.393 1.007-.59.64-.274 1.395-.457 2.267-.514V1.374zm3.894 3.933L15.08 2.852v.884a.635.635 0 01-.645.624h-.005c-.927-.006-1.7.144-2.325.4-.373.152-.618.307-.724.4l-.04.034c-.915.718-1.492 1.631-1.72 2.722a4.815 4.815 0 00-.046.251c.734-.8 1.586-1.363 2.542-1.68a5.222 5.222 0 012.419-.23.63.63 0 01.544.616v.913l2.604-2.48zm-.247 6.585c.354 0 .644.278.644.627v1.595c-.001 1.182-.996 2.135-2.22 2.136H2.97c-1.224-.001-2.219-.954-2.22-2.136v-8.99c.001-1.18.996-2.134 2.22-2.135h2.723c.353 0 .644.278.644.627s-.29.627-.644.627H2.97c-.517 0-.932.398-.932.882v8.988c0 .485.415.882.931.882h12.893c.517 0 .931-.397.931-.881v-1.595c0-.349.291-.627.644-.627z">
                                </path>
                            </svg></span> Share</button>

                </div>

                <div class="c-4zpd4">

                    {{-- <button type="button"><span class="c-1kiaciz"><svg xmlns="http://www.w3.org/2000/svg"
                                width="18" height="17" viewBox="0 0 18 17">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M-3-4h24v24H-3z"></path>
                                    <path fill="black"
                                        d="M.55 0h16.5a.55.55 0 01.55.55v15.2a.55.55 0 01-.55.55H.55a.55.55 0 01-.55-.55V.55A.55.55 0 01.55 0zm4.08 8.687L1.1 12.659V15.2h10.284L5.298 8.68a.452.452 0 00-.336-.153.45.45 0 00-.332.16zM9.9 7.5c0-1.213.987-2.2 2.2-2.2s2.2.987 2.2 2.2-.987 2.2-2.2 2.2-2.2-.987-2.2-2.2zm1.1 0c0 .606.494 1.1 1.1 1.1.606 0 1.1-.494 1.1-1.1 0-.606-.494-1.1-1.1-1.1-.606 0-1.1.494-1.1 1.1zm1.889 7.7H16.5V1.1H1.1v9.904l2.708-3.047a1.539 1.539 0 011.14-.53 1.54 1.54 0 011.155.502l6.786 7.271z"
                                        opacity=".7"></path>
                                </g>
                            </svg></span>

                        <div class="c-1mycmkq"> View all photos</div> 

                    </button> --}}

                </div>

            </div>

        </div>

    </div><span style="font-size: 0px;"></span>

    <div class="c-1irv0cp">

        <div class="c-1uka13e">

            <div class="c-1r1ps0e" id="1202">

                <div name="1202">

                    <div>

                        <div class="c-1qdyvok">

                            <div class="c-120gsus">

                                <h1 class="c-1wj1luj" itemprop="name">{{ $hotel_data['property_name'] }}</h1>

                                <div class="c-zo3nqe">

                                    <h2 itemprop="address" itemscope="true" itemtype="http://schema.org/PostalAddress">
                                        <span itemprop="streetAddress">{{ $hotel_data['location'] }}</span>
                                        <meta itemprop="@id" content="">
                                        <meta itemprop="addressCountry" content="India">
                                        <meta itemprop="addressLocality" content="Kochi">
                                    </h2>
                                </div>

                            </div>

                            <div>

                                <div><span itemprop="starRating" itemscope="true" itemtype="http://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="1.6">
                                    </span>

                                    <div class="c-1ktt90" itemprop="aggregateRating" itemscope="true"
                                        itemtype="http://schema.org/AggregateRating">

                                        <meta itemprop="reviewCount" content="6">

                                        <meta itemprop="bestRating" content="5">

                                        <meta itemprop="ratingValue" content="1.6">

                                        <div class="c-88xksd">{{ $rating_array['average_rating'] }} <span
                                                lazyload="true" class="c-10oakp6"><svg viewBox="0 0 9 10"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.25 9.5a.238.238 0 01-.12-.032L4.5 7.948l-2.63 1.52a.238.238 0 01-.265-.017.271.271 0 01-.102-.26l.48-3.042-1.91-2.021a.276.276 0 01-.061-.268.255.255 0 01.197-.18l2.874-.508L4.276.646A.25.25 0 014.5.5c.094 0 .181.057.223.146l1.194 2.526 2.874.508a.255.255 0 01.197.18.275.275 0 01-.061.268l-1.91 2.021.48 3.042c.015.1-.024.201-.102.26a.242.242 0 01-.145.049z">
                                                    </path>
                                                </svg></span></div>

                                        <div class="c-1qcdse5">{{ $rating_array['rating_count'] }} <span>Ratings</span>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- <div class="c-1dtnjt5">

                            <div class="c-um1zau"><span class="undefined c-1nt3nv3"> <span lazyload="true" class=""><svg xmlns="http://www.w3.org/2000/svg" width="78" height="20" viewBox="0 0 78 20"> <g fill="none" fill-rule="evenodd"> <path fill="#231F20" d="M2 0h74a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"></path> <path fill="white" fill-rule="nonzero" d="M10.473 13.098c-2.27 0-3.34-1.656-3.34-3.55 0-1.89 1.06-3.56 3.33-3.56 1.368 0 2.462.694 3.018 1.983l-1.157.459c-.259-.909-.972-1.26-1.87-1.26-1.46 0-2.09 1.05-2.09 2.329 0 1.372.63 2.422 2.11 2.422.888 0 1.498-.352 1.87-1.28l1.147.47c-.547 1.288-1.646 1.987-3.018 1.987zm6.46 0c-2.28 0-3.33-1.67-3.33-3.55s1.05-3.55 3.33-3.55c2.28 0 3.33 1.67 3.33 3.55s-1.05 3.55-3.33 3.55zm0-1.099c1.48 0 2.021-1.147 2.021-2.451 0-1.299-.542-2.446-2.021-2.446-1.48 0-2.022 1.147-2.022 2.446 0 1.304.542 2.451 2.022 2.451zM21.098 13V6.1h1.24v5.728h2.949V13h-4.19zm4.735 0V6.1h1.24v5.728h2.95V13h-4.19zm4.736 0V6.1h4.59v1.138h-3.35v1.743h3.12v1.138h-3.12v1.71h3.35V13h-4.59zm8.457.098c-2.27 0-3.34-1.656-3.34-3.55 0-1.89 1.06-3.56 3.33-3.56 1.367 0 2.461.694 3.018 1.983l-1.158.459c-.258-.909-.971-1.26-1.87-1.26-1.46 0-2.09 1.05-2.09 2.329 0 1.372.63 2.422 2.11 2.422.889 0 1.499-.352 1.87-1.28l1.147.47c-.546 1.288-1.645 1.987-3.017 1.987zm4.98-.098V7.209h-2.163V6.101h5.561v1.108h-2.158V13h-1.24zm3.935 0V6.1h1.24V13h-1.24zm5.405.098c-2.28 0-3.33-1.67-3.33-3.55s1.05-3.55 3.33-3.55c2.28 0 3.33 1.67 3.33 3.55s-1.05 3.55-3.33 3.55zm0-1.099c1.48 0 2.021-1.147 2.021-2.451 0-1.299-.542-2.446-2.021-2.446-1.48 0-2.022 1.147-2.022 2.446 0 1.304.542 2.451 2.022 2.451zM57.51 13V6.1h1.23l2.901 4.83V6.1h1.192V13h-1.24l-2.891-4.839V13H57.51z"></path> <path fill="#EE2A24" d="M70 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-1.6a2.4 2.4 0 1 0 0-4.8 2.4 2.4 0 0 0 0 4.8z"></path> </g> </svg></span></span>

                            </div>

                        </div> -->

                        <div></div>

                    </div>

                </div>

            </div>

            <div class="c-1r1ps0e" id="1203">

                <div name="1203">

                    <div class="">

                        <div class="c-gcrtsc">Description</div>

                        <div itemprop="description">

                            <div class="c-13rpnbh">{!! $hotel_data['description'] !!}</div>

                            <div class="c-1aj2z5h"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="c-1r1ps0e" id="1204">

                <div name="1204">

                    <div>

                        <div class="c-gcrtsc">Amenities</div>

                        <div class="c-2cojj">
                            @foreach ($hotel_data['amentities'] as $amentities)
                                <div class="c-riklip striked" itemprop="amenityFeature" itemscope="true"
                                    itemtype="http://schema.org/LocationFeatureSpecification"><span lazyload="true"
                                        class="c-e9mmd6"><!--?xml version='1.0' encoding='UTF-8'?-->
                                        <svg width="22px" height="22px" viewBox="0 0 22 22" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 52.3 (67297) - http://www.bohemiancoding.com/sketch -->
                                            <title>checkmark</title>
                                            <desc>Created with Sketch.</desc>
                                            <g id="Page-2" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="new-icon-set-(exportable)"
                                                    transform="translate(-121.000000, -698.000000)" fill="black">
                                                    <path
                                                        d="M132,720 C129.061263,720 126.299684,718.856 124.221263,716.778737 C122.142842,714.701474 121,711.938737 121,709.001158 C121,706.062421 122.144,703.300842 124.221263,701.222421 C126.298526,699.144 129.061263,698 132,698 C134.938737,698 137.700316,699.144 139.778737,701.222421 C141.857158,703.300842 143,706.062421 143,709.001158 C143,711.939895 141.856,714.701474 139.778737,716.778737 C137.701474,718.856 134.938737,720 132,720 L132,720 Z M132,699.157895 C137.427053,699.157895 141.842105,703.572947 141.842105,709 C141.842105,714.427053 137.427053,718.842105 132,718.842105 C126.572947,718.842105 122.157895,714.427053 122.157895,709 C122.157895,703.572947 126.572947,699.157895 132,699.157895 Z M129.684211,713.631579 L129.681895,713.631579 C129.830105,713.631579 129.978316,713.576 130.091789,713.462526 L138.197053,705.357263 C138.422842,705.131474 138.422842,704.764421 138.197053,704.538632 C137.971263,704.312842 137.604211,704.312842 137.378421,704.538632 L129.683053,712.234 L126.619263,709.170211 C126.393474,708.944421 126.026421,708.944421 125.800632,709.170211 C125.574842,709.396 125.574842,709.763053 125.800632,709.988842 L129.274316,713.462526 C129.387789,713.574842 129.536,713.631579 129.684211,713.631579 Z"
                                                        id="checkmark"></path>
                                                </g>
                                            </g>
                                        </svg></span>

                                    <div class="c-12w6zty" itemprop="name">{{ $amentities }}</div>

                                    <meta itemprop="value" content="True">

                                </div>
                            @endforeach

                        </div>

                        <div class="c-1vevh8c"><span>Show More</span></div>

                    </div>

                </div>

            </div>

            <div class="c-1r1ps0e" id="1424">

                <div name="1424">

                    <div>

                        <div class="c-gcrtsc">Choose your room</div>

                        <div class="c-28j001" itemprop="containsPlace" itemscope="true"
                            itemtype="http://schema.org/HotelRoom">

                            <div class="c-1bdbnnk">

                                <div class="c-1q9wn95"><span class="c-1thsya0"><svg width="12" height="12"
                                            viewBox="0 0 9 10" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.25 9.5a.238.238 0 01-.12-.032L4.5 7.948l-2.63 1.52a.238.238 0 01-.265-.017.271.271 0 01-.102-.26l.48-3.042-1.91-2.021a.276.276 0 01-.061-.268.255.255 0 01.197-.18l2.874-.508L4.276.646A.25.25 0 014.5.5c.094 0 .181.057.223.146l1.194 2.526 2.874.508a.255.255 0 01.197.18.275.275 0 01-.061.268l-1.91 2.021.48 3.042c.015.1-.024.201-.102.26a.242.242 0 01-.145.049z"
                                                fill="#ffdc64" fill-rule="evenodd"></path>
                                        </svg></span><span class="c-dldzsc"><span>Selected
                                            Category</span></span>

                                </div>

                            </div>

                            <div class="c-7doipl">

                                <div class="c-ebnjpp">

                                    <div class="c-1xhj18k"><span class="c-2j9z2q" itemprop="name">Classic</span>

                                        <div class="c-1r30k9r"><span class=""><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="20" height="9"
                                                    viewBox="0 0 20 9">
                                                    <path fill-rule="evenodd"
                                                        d="M4.247 6.034l-2.204-2.07L1 5.006l2.81 2.678.003-.003.457.457 7.067-7.075L10.274 0z">
                                                    </path>
                                                </svg></span></div>

                                    </div>


                                    <hr class="c-mjnk4s">

                                    <div>

                                        <div class="c-1xhj18k">

                                            <div class="c-1b873yf">

                                                @foreach ($hotel_data['amentities'] as $amentities)
                                                    <div class="c-3g5f28"><span lazyload="true"
                                                            class="c-1o86iao"><svg width="22px" height="22px"
                                                                viewBox="0 0 22 22" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <!-- Generator: Sketch 52.3 (67297) - http://www.bohemiancoding.com/sketch -->
                                                                <title>checkmark</title>
                                                                <desc>Created with Sketch.</desc>
                                                                <g id="Page-2" stroke="none" stroke-width="1"
                                                                    fill="none" fill-rule="evenodd">
                                                                    <g id="new-icon-set-(exportable)"
                                                                        transform="translate(-121.000000, -698.000000)"
                                                                        fill="black">
                                                                        <path
                                                                            d="M132,720 C129.061263,720 126.299684,718.856 124.221263,716.778737 C122.142842,714.701474 121,711.938737 121,709.001158 C121,706.062421 122.144,703.300842 124.221263,701.222421 C126.298526,699.144 129.061263,698 132,698 C134.938737,698 137.700316,699.144 139.778737,701.222421 C141.857158,703.300842 143,706.062421 143,709.001158 C143,711.939895 141.856,714.701474 139.778737,716.778737 C137.701474,718.856 134.938737,720 132,720 L132,720 Z M132,699.157895 C137.427053,699.157895 141.842105,703.572947 141.842105,709 C141.842105,714.427053 137.427053,718.842105 132,718.842105 C126.572947,718.842105 122.157895,714.427053 122.157895,709 C122.157895,703.572947 126.572947,699.157895 132,699.157895 Z M129.684211,713.631579 L129.681895,713.631579 C129.830105,713.631579 129.978316,713.576 130.091789,713.462526 L138.197053,705.357263 C138.422842,705.131474 138.422842,704.764421 138.197053,704.538632 C137.971263,704.312842 137.604211,704.312842 137.378421,704.538632 L129.683053,712.234 L126.619263,709.170211 C126.393474,708.944421 126.026421,708.944421 125.800632,709.170211 C125.574842,709.396 125.574842,709.763053 125.800632,709.988842 L129.274316,713.462526 C129.387789,713.574842 129.536,713.631579 129.684211,713.631579 Z"
                                                                            id="checkmark"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></span>

                                                        <div class="c-14dq6lk">{{ $amentities }}</div>

                                                    </div>
                                                @endforeach
                                            </div>

                                            <div class="c-1slosxv" tabindex="0" role="button">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="c-sn9j7k">

                                    <div class="c-e2r6u2"><img alt="" loading="auto" importance="auto"
                                            class="c-1gdxnl5" src="{{ URL::asset('/uploads/' . $image['path']) }}">
                                    </div><span class="c-1as8cbh"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="13" viewBox="0 0 16 13">
                                            <path fill="white" fill-rule="evenodd"
                                                d="M1.016.467h14.48c.267 0 .483.207.483.463v10.978c0 .256-.216.678-.483.678H1.016c-.266 0-.483-.422-.483-.678V.93c0-.256.217-.463.483-.463zm.483 8.984v2.142h9.025L5.183 6.096a.404.404 0 00-.295-.128.403.403 0 00-.291.135L1.499 9.45zm9.653-2.494c-1.065 0-1.93-.832-1.93-1.855 0-1.022.865-1.854 1.93-1.854s1.931.832 1.931 1.854c0 1.023-.866 1.855-1.93 1.855zm0-2.782c-.532 0-.965.417-.965.927 0 .511.433.928.965.928s.966-.417.966-.928c0-.51-.434-.927-.966-.927zm3.862 7.418v-10.2H1.499v6.662l2.376-2.568a1.374 1.374 0 011.001-.446c.385-.004.744.146 1.013.423l5.955 6.129h3.17z">
                                            </path>
                                        </svg></span>
                                </div>

                            </div>

                            <div class="c-1x21dx0">

                                <div class="c-8atqhb" itemprop="potentialAction" itemtype="http://schema.org/Action"
                                    itemscope="true">

                                    <div class="c-2t9rox">

                                        <div class="c-0">

                                            <div class="c-j7qwjs">

                                                <div class="c-1a812ti">

                                                    <div class="c-gnxvp8">₹{{ $hotel_data['special_price'] }}</div>
                                                    <span class="c-77737p">₹{{ $hotel_data['price'] }}</span>
                                                </div>

                                                <div class="c-131wcsq"></div>

                                            </div>

                                        </div>

                                        <button type="button" class="c-1m5xxnu"><span class="c-k008qs"
                                                itemprop="name"><span class="c-m8w07n"><span class=""><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="9" viewBox="0 0 20 9">
                                                            <path fill-rule="evenodd"
                                                                d="M4.247 6.034l-2.204-2.07L1 5.006l2.81 2.678.003-.003.457.457 7.067-7.075L10.274 0z">
                                                            </path>
                                                        </svg></span> </span>SELECTED</span>

                                        </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="c-1r1ps0e" id="1210">

                <div name="1210">

                    <div class="additionalService">

                        <div class="c-ol1bju">

                            <div class="c-rzq584">Enjoy meals during your stay</div>

                            <div class="c-e301m3">

                                <div class="slick-slider slickCompactArrows c-xi606m slick-initialized">

                                    <div class="slick-list">

                                        <div class="slick-track"
                                            style="width: 720px; opacity: 1; transform: translate3d(0px, 0px, 0px);">

                                            <div data-index="0" class="slick-slide slick-active slick-current"
                                                tabindex="-1" aria-hidden="false"
                                                style="outline: none; width: 720px;">

                                                <div class="meals">

                                                    @foreach ($hotel_data['menus'] as $menus)
                                                        <div class="c-1e5dvdsq">
                                                            <button type="button" class="c-dymiko"><span
                                                                    class="c-9mf03b"><span>{{ $menus }}</span></span>
                                                            </button>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="c-1r1ps0e" id="1900">

                <div name="1900">

                    <div name="reviewsWidget">

                        <div class="c-1r33t6o">

                            <div class="c-l8dzab">

                                <div class="c-lipvz2 c-1rt0ma c-1rmk5jp c-1uk1gs8"
                                    style="background-color: rgb(255, 71, 66);"><span
                                        class="c-1uxth7l">{{ $rating_array['average_rating'] }} <span
                                            class="c-5ndslz" lazyload="true"><svg viewBox="0 0 9 10"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.25 9.5a.238.238 0 01-.12-.032L4.5 7.948l-2.63 1.52a.238.238 0 01-.265-.017.271.271 0 01-.102-.26l.48-3.042-1.91-2.021a.276.276 0 01-.061-.268.255.255 0 01.197-.18l2.874-.508L4.276.646A.25.25 0 014.5.5c.094 0 .181.057.223.146l1.194 2.526 2.874.508a.255.255 0 01.197.18.275.275 0 01-.061.268l-1.91 2.021.48 3.042c.015.1-.024.201-.102.26a.242.242 0 01-.145.049z">
                                                </path>
                                            </svg></span></span>

                                </div>

                                <h4>Good</h4>

                                <h5>{{ $rating_array['rating_count'] }} ratings</h5>
                            </div>

                            <div class="c-1cnmlv3">

                                <div class="c-19kyb5k">
                                    <div class="c-1q2ekoi">
                                        <div class="c-1uj1k31">5</div><span class=""><svg
                                                xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 10 10">
                                                <path fill="#cdcdcd" fill-rule="evenodd"
                                                    d="M9.495 3.42H6.423L5.473.357A.499.499 0 0 0 5.003 0a.499.499 0 0 0-.472.357L3.568 3.42H.495a.499.499 0 0 0-.47.358.533.533 0 0 0 .177.58L2.7 6.252 1.744 9.32a.54.54 0 0 0 .07.466.49.49 0 0 0 .401.214.496.496 0 0 0 .282-.105l2.498-1.894 2.498 1.894a.495.495 0 0 0 .29.101.49.49 0 0 0 .4-.214.54.54 0 0 0 .07-.466L7.305 6.25l2.498-1.895a.534.534 0 0 0 .171-.583.498.498 0 0 0-.478-.35z">
                                                </path>
                                            </svg></span><span class="c-cgkhb2"><span class="c-seewqf"></span></span>
                                    </div>
                                    <div class="c-bcee81">{{ $rating_array['five_rating'] }}</div>
                                </div>

                                <div class="c-19kyb5k">
                                    <div class="c-1q2ekoi">
                                        <div class="c-1uj1k31">4</div><span class=""><svg
                                                xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 10 10">
                                                <path fill="#cdcdcd" fill-rule="evenodd"
                                                    d="M9.495 3.42H6.423L5.473.357A.499.499 0 0 0 5.003 0a.499.499 0 0 0-.472.357L3.568 3.42H.495a.499.499 0 0 0-.47.358.533.533 0 0 0 .177.58L2.7 6.252 1.744 9.32a.54.54 0 0 0 .07.466.49.49 0 0 0 .401.214.496.496 0 0 0 .282-.105l2.498-1.894 2.498 1.894a.495.495 0 0 0 .29.101.49.49 0 0 0 .4-.214.54.54 0 0 0 .07-.466L7.305 6.25l2.498-1.895a.534.534 0 0 0 .171-.583.498.498 0 0 0-.478-.35z">
                                                </path>
                                            </svg></span><span class="c-cgkhb2"><span class="c-seewqf"></span></span>
                                    </div>
                                    <div class="c-bcee81">{{ $rating_array['four_rating'] }}</div>
                                </div>

                                <div class="c-19kyb5k">
                                    <div class="c-1q2ekoi">
                                        <div class="c-1uj1k31">3</div><span class=""><svg
                                                xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 10 10">
                                                <path fill="#cdcdcd" fill-rule="evenodd"
                                                    d="M9.495 3.42H6.423L5.473.357A.499.499 0 0 0 5.003 0a.499.499 0 0 0-.472.357L3.568 3.42H.495a.499.499 0 0 0-.47.358.533.533 0 0 0 .177.58L2.7 6.252 1.744 9.32a.54.54 0 0 0 .07.466.49.49 0 0 0 .401.214.496.496 0 0 0 .282-.105l2.498-1.894 2.498 1.894a.495.495 0 0 0 .29.101.49.49 0 0 0 .4-.214.54.54 0 0 0 .07-.466L7.305 6.25l2.498-1.895a.534.534 0 0 0 .171-.583.498.498 0 0 0-.478-.35z">
                                                </path>
                                            </svg></span><span class="c-cgkhb2"><span class="c-seewqf"></span></span>
                                    </div>
                                    <div class="c-bcee81">{{ $rating_array['three_rating'] }}</div>
                                </div>

                                <div class="c-19kyb5k">
                                    <div class="c-1q2ekoi">
                                        <div class="c-1uj1k31">2</div><span class=""><svg
                                                xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 10 10">
                                                <path fill="#cdcdcd" fill-rule="evenodd"
                                                    d="M9.495 3.42H6.423L5.473.357A.499.499 0 0 0 5.003 0a.499.499 0 0 0-.472.357L3.568 3.42H.495a.499.499 0 0 0-.47.358.533.533 0 0 0 .177.58L2.7 6.252 1.744 9.32a.54.54 0 0 0 .07.466.49.49 0 0 0 .401.214.496.496 0 0 0 .282-.105l2.498-1.894 2.498 1.894a.495.495 0 0 0 .29.101.49.49 0 0 0 .4-.214.54.54 0 0 0 .07-.466L7.305 6.25l2.498-1.895a.534.534 0 0 0 .171-.583.498.498 0 0 0-.478-.35z">
                                                </path>
                                            </svg></span><span class="c-cgkhb2"><span class="c-seewqf"></span></span>
                                    </div>
                                    <div class="c-bcee81">{{ $rating_array['two_rating'] }}</div>
                                </div>

                                <div class="c-19kyb5k">
                                    <div class="c-1q2ekoi">
                                        <div class="c-1uj1k31">1</div><span class=""><svg
                                                xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 10 10">
                                                <path fill="#cdcdcd" fill-rule="evenodd" data-value="60"
                                                    d="M9.495 3.42H6.423L5.473.357A.499.499 0 0 0 5.003 0a.499.499 0 0 0-.472.357L3.568 3.42H.495a.499.499 0 0 0-.47.358.533.533 0 0 0 .177.58L2.7 6.252 1.744 9.32a.54.54 0 0 0 .07.466.49.49 0 0 0 .401.214.496.496 0 0 0 .282-.105l2.498-1.894 2.498 1.894a.495.495 0 0 0 .29.101.49.49 0 0 0 .4-.214.54.54 0 0 0 .07-.466L7.305 6.25l2.498-1.895a.534.534 0 0 0 .171-.583.498.498 0 0 0-.478-.35z">
                                                </path>
                                            </svg></span><span class="c-cgkhb2"><span class="c-seewqf"></span></span>
                                    </div>
                                    <div class="c-bcee81">{{ $rating_array['one_rating'] }}</div>
                                </div>

                            </div>

                        </div>

                        <div>

                            @foreach ($ratings as $rating)
                                <div class="c-88xcar">
                                    <div class="c-1en5oz">
                                        <div class="c-70qvj9">
                                            <div>
                                                <div class="c-70qvj9">
                                                    <span class="c-1c1e297">{{ $rating->name }}
                                                    </span>
                                                    {{-- <span class="c-1pwsct3">·</span><span class="c-10qo440">
                                                        {{ $rating->created_at->format('d-m-Y') }}
                                                    </span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c-lipvz2 c-1rt0ma c-1uk1gs8"
                                            style="background-color: rgb(52, 96, 0);"><span
                                                class="c-1uxth7l">{{ $rating->rating }}<span class="c-5ndslz"
                                                    lazyload="true"><svg viewBox="0 0 9 10"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.25 9.5a.238.238 0 01-.12-.032L4.5 7.948l-2.63 1.52a.238.238 0 01-.265-.017.271.271 0 01-.102-.26l.48-3.042-1.91-2.021a.276.276 0 01-.061-.268.255.255 0 01.197-.18l2.874-.508L4.276.646A.25.25 0 014.5.5c.094 0 .181.057.223.146l1.194 2.526 2.874.508a.255.255 0 01.197.18.275.275 0 01-.061.268l-1.91 2.021.48 3.042c.015.1-.024.201-.102.26a.242.242 0 01-.145.049z">
                                                        </path>
                                                    </svg></span></span>
                                        </div>
                                    </div>
                                    <p class="c-1wawhq6">{{ $rating->description }}</p>
                                    <div class="c-13cjbiv"></div>
                                </div>
                            @endforeach

                        </div>

                        <div class="c-189zkno">See all reviews</div>

                    </div>

                </div>

            </div>

            <div class="c-1r1ps0e" id="1427">

                <div name="1427">

                    <div class="c-0">

                        <div class="c-gcrtsc">Hotel policies</div>

                        <ul class="c-f0mxva">

                            <li>

                                <div class="c-1f4p2wj">

                                    <div>

                                        <div class="c-1upilqn">Check-in</div>

                                        <div class="c-79elbk">

                                            <div class="c-1xnmrhy"></div>

                                            <div class="c-1lmmwwo">{{ $hotel_data['checkin'] }}</div>

                                        </div>

                                    </div>

                                    <div class="c-1s1axp"></div>

                                    <div>

                                        <div class="c-1upilqn">Check-out</div>

                                        <div class="c-79elbk">

                                            <div class="c-1xnmrhy"></div>

                                            <div class="c-1lmmwwo">{{ $hotel_data['checkout'] }}</div>

                                        </div>

                                    </div>

                                </div>

                            </li>

                            {!! $hotel_data['hotel_policy'] !!}
                        </ul>

                        <div class="c-e4hyu5">
                            <div class="c-2db0jw">View Guest Policy</div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="c-1r1ps0e" id="1426">

                <div name="1426">

                    <div>

                        <h2 class="c-gcrtsc">What's nearby?</h2>

                        <div>

                            <div>

                                <div class="c-ygvspr">

                                    <div class="c-r6z5ec">

                                        <div class="c-18vgffh u-textEllipsis"><span class="c-1160peo"><span
                                                    class="c-1in37i9"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="68" height="24" viewBox="0 0 68 24">
                                                        <path fill="#E52327"
                                                            d="M23.414 12.034c0 6.414-5.173 11.794-11.793 11.794-6.414 0-11.793-5.38-11.587-11.794 0-6.413 5.38-11.793 12-11.586 6.414 0 11.38 5.38 11.38 11.586zm-7.448 0a4.15 4.15 0 00-4.138-4.137 4.15 4.15 0 00-4.138 4.137 4.15 4.15 0 004.138 4.138 4.15 4.15 0 004.138-4.138zm51.724 0c0 6.414-5.173 11.794-11.793 11.794-6.414 0-11.794-5.38-11.587-12 0-6.414 5.38-11.587 12-11.587 6.414.207 11.587 5.38 11.38 11.793zm-7.449 0a4.15 4.15 0 00-4.138-4.137c-2.275 0-4.137 1.862-4.344 4.137a4.15 4.15 0 004.138 4.138c2.482 0 4.344-1.862 4.344-4.138zM45.966.655c-.207.414-.414.828-.621 1.035l-6.207 12.413c-.207.621-.414 1.035-.828 1.449-.207.414-.207.62-.207 1.034v6.828h-8.275V16.38c0-.208 0-.621-.207-.828a154.238 154.238 0 01-4.138-8.276c-1.035-2.07-2.276-4.345-3.31-6.414 0 0 0-.207-.207-.414h8.275c.207 0 .414 0 .414.207 1.035 2.276 2.276 4.345 3.31 6.62 0 0 0 .208.207.208 0-.207.207-.207.207-.207C35.414 5 36.655 2.93 37.69.656c0-.208.208-.208.414-.208h7.863c-.207.207-.207.207 0 .207z">
                                                        </path>
                                                    </svg></span></span><span
                                                class="c-1s9qq6b">{{ $hotel_data['property_name'] }}
                                                Homes</span></div>

                                        {{-- <div class="c-sqr6fe"><span class="u-RTLNegative c-1ohfn8x"><svg
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M20 10.1818C20 16.5455 12 22 12 22C12 22 4 16.5455 4 10.1818C4 8.01187 4.84285 5.93079 6.34315 4.3964C7.84344 2.86201 9.87827 2 12 2C14.1217 2 16.1566 2.86201 17.6569 4.3964C19.1571 5.93079 20 8.01187 20 10.1818Z"
                                                        stroke="#212121" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                                        stroke="#212121" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg></span>

                                            <div class="c-1jww3li">

                                                <div class="c-bsnihp">

                                                    <div class="autocomplete__wrapper c-izlqjv">

                                                        <input class="autocomplete__input c-11k1nuk" type="text"
                                                            placeholder="Find distance from a place">

                                                    </div>

                                                </div>

                                            </div>

                                        </div> --}}

                                    </div>

                                    <div class="c-0">

                                        <div class="c-k008qs">

                                            <div class="c-wezfrt">

                                                <div class="c-n3gimw"></div>

                                                <button class="c-17gmd7u" type="button"><span>

                                                    <a href="daasd">Click here to use map</a></span></button>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="c-542n3y  ">

                                <div class="c-1m4hv2b"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



        </div>

        <div class="c-1e7dqp1">

            <div class="c-1hmw6f1">

                <div class="c-1b11azu"><span class=""><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" viewBox="0 0 16 16">
                            <g fill="none" fill-rule="nonzero">
                                <path fill="white"
                                    d="M8.113.468L9.897.014a.467.467 0 0 1 .44.118l1.318 1.284a.467.467 0 0 0 .2.115l1.771.497a.467.467 0 0 1 .323.323l.498 1.769c.021.075.06.143.115.2l1.285 1.314a.467.467 0 0 1 .119.442l-.455 1.78a.466.466 0 0 0 0 .23l.455 1.78a.467.467 0 0 1-.119.442l-1.284 1.315a.467.467 0 0 0-.116.2l-.498 1.768a.467.467 0 0 1-.323.323l-1.772.498a.466.466 0 0 0-.199.114l-1.318 1.284a.466.466 0 0 1-.44.118l-1.784-.454a.467.467 0 0 0-.23 0l-1.784.454a.467.467 0 0 1-.44-.118L4.34 14.527a.467.467 0 0 0-.2-.115l-1.771-.498a.466.466 0 0 1-.323-.323l-.498-1.768a.466.466 0 0 0-.116-.2L.15 10.308a.466.466 0 0 1-.119-.441l.455-1.78a.466.466 0 0 0 0-.231L.03 6.076a.467.467 0 0 1 .119-.442L1.434 4.32a.467.467 0 0 0 .115-.2l.498-1.768a.467.467 0 0 1 .323-.323l1.772-.497a.466.466 0 0 0 .2-.115L5.658.132a.466.466 0 0 1 .44-.118l1.784.454c.075.02.155.02.23 0z">
                                </path>
                                <path fill="#DA315C"
                                    d="M7.333 6c0 .735-.598 1.333-1.333 1.333A1.335 1.335 0 0 1 4.667 6c0-.735.598-1.333 1.333-1.333S7.333 5.265 7.333 6zM5.536 6a.464.464 0 1 0 .929-.001.464.464 0 0 0-.929.001zM10 8.667c.735 0 1.333.598 1.333 1.333s-.598 1.333-1.333 1.333A1.335 1.335 0 0 1 8.667 10c0-.735.598-1.333 1.333-1.333zm0 1.797a.464.464 0 1 0-.001-.929.464.464 0 0 0 .001.929zm.534-4.998a.455.455 0 0 1 0 .643l-4.425 4.425a.453.453 0 0 1-.643 0 .454.454 0 0 1 0-.643l4.425-4.425a.454.454 0 0 1 .643 0z">
                                </path>
                            </g>
                        </svg></span><span class="c-1s9cs89"> Login now to get upto 15% lower
                        prices</span></div>

                <div class="c-1w5jjrs"><span class="c-22w5bk">Login</span></div>

            </div>

            <div class="c-2xmewo">

                <div class="listingPrice c-1w4qezm">

                    <meta itemprop="priceRange" content="₹894 - ₹3123">

                    <div class="listingPrice__numbers"><span
                            class="listingPrice__finalPrice listingPrice__finalPrice--black">{{ $hotel_data['special_price'] }}</span><span
                            class="listingPrice__slashedPrice d-body-lg">{{ $hotel_data['price'] }}</span><span
                            class="listingPrice__percentage">35% off</span></div>

                    <div class="listingPrice__perRoomNight">inclusive of all taxes</div>

                </div>

                <div class="c-1thcb3a">

                    <div class="c-1pzykbe">

                        <div class="oyo-row oyo-row--no-spacing datePickerDesktop datePickerDesktop--hotel">

                            <div
                                class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold datePickerDesktop__checkInOut u-textEllipsis">
                                <span class="datePickerDesktop__checkInOutText">Mon, 14
                                    Aug</span><span
                                    class="datePickerDesktop__arrowWrapper datePickerDesktop__arrowWrapper--hotel">–</span><span
                                    class="datePickerDesktop__checkInOutText">Tue, 15 Aug</span>
                            </div>
                            <span></span>
                        </div>

                    </div>

                    <div class="c-14mt3w6">

                        <div class="oyo-row oyo-row--no-spacing guestRoomPicker guestRoomPicker--hotel ">

                            <div
                                class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold u-textEllipsis guestRoomPicker__guestRoomCount">
                                1 Room, 2 Guests</div><span></span>
                        </div>

                        <div class="c-18fyjan"> &nbsp; </div>

                    </div>

                </div>

                <div class="c-aw4f1d">

                    <div class="c-1pr5noq"><span class="c-1o86iao" isrtl="true"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20">
                                <path fill="black" fill-rule="nonzero"
                                    d="M4.756.968v.008c-.002 0 0-.002 0-.008zm0 18.55h-.951V.968A.96.96 0 0 1 4.755 0H15.22c.525 0 .95.444.95.968v18.544h-.951V.968c0 .008-10.464.008-10.464.008v18.542zm0-18.55l-.001.008.001-.008zm0 18.056H15.22V.968c0 .008-10.464.008-10.464.008v18.048zm-.951 0V.968A.96.96 0 0 1 4.755 0H15.22c.525 0 .95.444.95.968v18.056h3.353c.263 0 .476.219.476.488 0 .27-.213.488-.476.488H.476A.482.482 0 0 1 0 19.512c0-.27.213-.488.476-.488h3.329zm9.233-8.167s-.878-1.303-.878-1.8c0-.498.393-.9.878-.9a.89.89 0 0 1 .878.9c0 .497-.878 1.8-.878 1.8z"
                                    opacity=".3"></path>
                            </svg></span>

                        <div><span class="c-1w0k317">Classic </span></div>

                    </div>

                    {{-- <div class="c-pbyyuk"><a><span class="c-1qrh5ub"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="18" height="20" viewBox="0 0 18 18">
                                    <path fill="#EE2A24" fill-rule="evenodd"
                                        d="M17.215.785A2.663 2.663 0 0015.32 0a2.66 2.66 0 00-1.896.785l-11.49 11.49a.447.447 0 00-.104.165L.027 17.396a.45.45 0 00.578.577l4.956-1.802a.46.46 0 00.165-.105l11.49-11.49c.506-.506.784-1.18.784-1.896s-.278-1.39-.785-1.896zM5.16 15.359l-3.955 1.438 1.438-3.955 9.974-9.974 2.517 2.517-9.974 9.974zm11.418-11.42l-.807.807-2.517-2.517.807-.807c.336-.336.783-.52 1.258-.52s.922.184 1.258.52c.336.336.521.783.521 1.258s-.185.922-.52 1.258v.001z">
                                    </path>
                                </svg></span></a></div> --}}

                </div>

                <div class="c-1kd3zqj"><span lazyload="true" class="c-k008qs"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g fill="none">
                                <path fill="#F5A623"
                                    d="M8.113.468L9.897.014a.467.467 0 01.44.118l1.318 1.284a.467.467 0 00.2.115l1.771.497a.467.467 0 01.323.323l.498 1.769c.021.075.06.143.115.2l1.285 1.314a.467.467 0 01.119.442l-.455 1.78a.466.466 0 000 .23l.455 1.78a.467.467 0 01-.119.442l-1.284 1.315a.467.467 0 00-.116.2l-.498 1.768a.467.467 0 01-.323.323l-1.772.498a.466.466 0 00-.199.114l-1.318 1.284a.466.466 0 01-.44.118l-1.784-.454a.467.467 0 00-.23 0l-1.784.454a.467.467 0 01-.44-.118L4.34 14.527a.467.467 0 00-.2-.115l-1.771-.498a.466.466 0 01-.323-.323l-.498-1.768a.466.466 0 00-.116-.2L.15 10.308a.466.466 0 01-.119-.441l.455-1.78a.466.466 0 000-.231L.03 6.076a.467.467 0 01.119-.442L1.434 4.32a.467.467 0 00.115-.2l.498-1.768a.467.467 0 01.323-.323l1.772-.497a.466.466 0 00.2-.115L5.658.132a.466.466 0 01.44-.118l1.784.454c.075.02.155.02.23 0z">
                                </path>
                                <path fill="white"
                                    d="M7.333 6c0-.735-.598-1.333-1.333-1.333S4.667 5.265 4.667 6 5.265 7.333 6 7.333 7.333 6.735 7.333 6zM5.536 6a.464.464 0 11.929.001A.464.464 0 015.536 6zM10 8.667c-.735 0-1.333.598-1.333 1.333s.598 1.333 1.333 1.333 1.333-.598 1.333-1.333S10.735 8.667 10 8.667zm0 1.797a.464.464 0 11.001-.929.464.464 0 01-.001.929zm.534-4.998a.454.454 0 00-.643 0L5.466 9.891a.454.454 0 10.643.643l4.425-4.425a.455.455 0 000-.643z">
                                </path>
                            </g>
                        </svg></span>

                    <div class="c-z7mtfw">

                        <div class="c-kawmsn"><span class="c-1ixbp0l"> FIRST50 coupon applied
                            </span>

                            <div class="c-1gxq3sh">More offers</div>

                        </div>

                        <div class="c-siw9gi"><span class="c-g0t5x1">-₹50</span>

                            <label class="checkbox c-1wjqvmt" htmlfor="couponCheckbox">

                                <input name="couponCheckbox" checked="" pagetype="detail"
                                    data-state="coupon_selected" class="c-1wjqvmt" customclassname="c-1l0lhvd"
                                    type="checkbox" value="-₹1050"><span lazyload="true"
                                    class="checkbox__checkmark checkbox__checkmark--detail c-1ltqz98"><!--?xml version='1.0' encoding='UTF-8'?-->
                                    <svg viewBox="0 0 12 9" version="1.1" id="checkmark"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Arash" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="Listing_ListView" transform="translate(-22.000000, -260.000000)"
                                                fill="white">
                                                <g id="component/filters" transform="translate(0.000000, 96.000000)">
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

                                <div class="checkbox__label"></div>

                            </label>

                        </div>

                    </div><span></span>
                </div>

                <div class="c-t958pf">

                    <div class="c-1w7vvml">

                        <div class="c-1trau93">Your savings </div>

                        <div class="c-70qvj9"><span class="c-2jict3">₹50</span></div>

                    </div>

                    <div class="c-1f2lvne">

                        <div class="c-1w7vvml">

                            <div class="c-gcuuxt">

                                <div>Total price </div>

                                <div class="c-1l4repk">(incl. of all taxes) </div>

                            </div>

                            <div class="c-nx2p0o"><span class="c-2jict3">₹{{ $hotel_data['special_price'] - 50 }}
                                </span> </div>

                        </div>

                    </div>

                </div>

                <div class="c-1wso87h">

                    <button type="button" class="c-u65gu2"><span>Continue to Book</span></button>

                </div>

                <div class="c-1glae7g">

                    <div>

                        <div class="c-1y9junu" tabindex="0" role="button">

                            <div class="c-1lxcwxd"> Cancellation Policy </div><span class="c-13zw0qm"
                                lazyload="true"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 18 18">
                                    <path fill-rule="evenodd"
                                        d="M9.004.957c4.436 0 8.047 3.611 8.047 8.047s-3.61 8.047-8.047 8.047c-4.436 0-8.047-3.61-8.047-8.047C.957 4.568 4.568.957 9.004.957zM9 0C4.02 0 0 4.02 0 9s4.02 9 9 9 9-4.02 9-9-4.02-9-9-9zm.524 13.039v-4.96c0-.34-.226-.6-.52-.6-.294 0-.52.26-.52.6v4.96c0 .34.226.6.52.6.294 0 .52-.28.52-.6zM9.04 4.443a.681.681 0 00-.68.679c0 .373.306.679.68.679a.682.682 0 00.679-.68.681.681 0 00-.68-.678z"
                                        opacity=".7"></path>
                                </svg></span>
                        </div>

                    </div>

                    <div>

                        <div class="c-1y9junu" tabindex="0" role="button">

                            <div class="c-1lxcwxd"> Follow safety measures advised at the hotel </div>

                        </div>

                    </div>

                </div>

                <div class="c-1ccy8kh"><span>By proceeding, you agree to our</span> <a
                        href="https://www.oyorooms.com/guest-policy?no_header=true" class="c-nn640c"
                        target="_blank"><span class="c-1u4dhw5">Guest Policies.</span></a></div>

            </div>

        </div>

    </div>



</div>









<!-- content -->

















<!-- Footer Start -->

<div class="cmsWrapper">

    <div class="fadeIn__container fadeIn__container--active">

        <div class="footerAppIcons" data-cms-id="187470" data-cms-template="cWEB-footerAppIconsText">

            <div class="oyo-row footerAppIcons__container">



                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks">

                    <div class="oyo-row oyo-row--no-spacing footerAppIcons__secondryLinksContainer">

                        <a href="=" target="_blank" class="Q-BLNK">Quick Links</a>

                        <a href="" target="_blank">About Us</a>

                        <a href="" target="_blank">Faq</a>

                        <a href="" target="_blank">My Account</a>

                    </div>

                </div>



                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks">

                    <div class="oyo-row oyo-row--no-spacing footerAppIcons__secondryLinksContainer">

                        <a href="" target="_blank" class="Q-BLNK">Categories</a>

                        <a href="" target="_blank">Shop</a>

                        <a href="" target="_blank">Hotel</a>

                        <a href="" target="_blank">Restaurants</a>

                    </div>

                </div>





                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks">

                    <div class="oyo-row oyo-row--no-spacing footerAppIcons__secondryLinksContainer">

                        <a href="" target="_blank" class="Q-BLNK">Contacts</a>

                        <a href="" target="_blank">Teams / Careers</a>

                        <a href="" target="_blank">Blogs</a>

                        <a href="" target="_blank">Support</a>

                    </div>

                </div>









                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks">

                    <div class="oyo-row oyo-row--no-spacing u-alignItemsCenter footerAppIcons__appsMessage">
                        <span>Keep in touch</span><a target="_blank" rel="noopener" href=" ">
                        </a>
                    </div>

                    <div class="oyo-row oyo-row--no-spacing">

                        <div class="subscription_form_wrap">

                            <input type="email" name="to" autocapitalize="off" required="true"
                                id="newsletter_to" class="input_newsletter_subscription_to"
                                placeholder="Your email address" title="" value="" data-ajax-submit="">

                            <button id="newsletter_button_footer"
                                data-et-click="goal:www_subscribe_deals_footer_button_click">

                                Subscribe

                            </button>

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </div>



    <div class="fadeIn__container fadeIn__container--active">

        <div class="footerSocial" data-cms-id="552832" data-cms-template="cWeb-SocialFooter">

            <div class="footerSocial__container">

                <div class="oyo-row oyo-row--no-spacing">

                    <div class="oyo-cell oyo-cell--4-col oyo-cell--middle footerSocial__social"><a
                            href="https://www.facebook.com/oyorooms" target="_blank" rel="nofollow noopener"
                            class="footerSocial__socialMediaLink"><svg>

                                <use xlink:href="#facebook"></use>

                            </svg></a><a href="/" target="_blank" rel="nofollow noopener"
                            class="footerSocial__socialMediaLink"><svg>

                                <use xlink:href="#instagram"></use>

                            </svg></a><a href="" target="_blank" rel="nofollow noopener"
                            class="footerSocial__socialMediaLink"><svg>

                                <use xlink:href="#twitter"></use>

                            </svg></a><a href="" target="_blank" rel="nofollow noopener"
                            class="footerSocial__socialMediaLink"><svg>

                                <use xlink:href="#youtube"></use>

                            </svg></a><a href="" target="_blank" rel="nofollow noopener"
                            class="footerSocial__socialMediaLink"><svg>

                                <use xlink:href="#pinterest"></use>

                            </svg></a></div>

                    <div class="oyo-cell oyo-cell--4-col oyo-cell--middle u-textCenter footerSocial__tagLine">
                    </div>

                    <div class="oyo-cell oyo-cell--4-col oyo-cell--middle u-textRight footerSocial__copyright">
                        2013-2022 © Oravel Stays Limited</div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

</div>

</div>











</body>

</html>



<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>

<script>
    $(document).on('ready', function() {
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<script type="text/javascript">
    const splide = new Splide(".splide", {
        // Optional parameters
        start: 1,
        perPage: 1.5,
        perMove: 1,
        // gap: 20,
        type: "loop",
        drag: "free",
        snap: false,
        interval: 3000,
        arrows: true,
        pagination: true,
        rewind: true,
        rewindByDrag: true,
        lazyLoad: true,

        // Responsive breakpoint
        breakpoints: {
            768: {
                perPage: 1,
                snap: true
            }
        }
    });

    splide.mount();
</script>
<script type="text/javascript">
    function addMRoom(mroom_row) {
        if (mroom_row <= 5) {

            html = '<div class="c-r37xpo" id="mroom_div-' + mroom_row + '">';
            html += '<div class="c-tjpp8s">';
            html += '<div class="c-2i8otg" id="mroom[' + mroom_row + ']">Room ' + mroom_row + '</div>';
            html +=
                '<button type="button" class="guestRoomPickerPopUp__lessRoom guestRoomPickerPopUp__lessRoom--disabled" fdprocessedid="98qndw" id="mdelete-room" style="color: black; text-align: right;" onclick="mdeleteRoom(' +
                mroom_row + ');"><i class="fa fa-trash" aria-hidden="true"></i></button>';
            html += '</div>';
            html += '<div class="c-j4ddf8">';
            html += '<div class="c-mbh36o">Guests</div>';
            html += '<div class="c-1n2mv2k">';
            html +=
                '<span class="guestRoomPickerPopUp__minus" id="mminus-' + mroom_row + '" onclick="mminus(' + mroom_row +
                ')">';
            html += '-';
            html += '</span>';
            html += '<div class="c-4mc9w5" id="mguest-count-' + mroom_row + '">2</div>';
            html +=
                '<span class="guestRoomPickerPopUp__plus" id="mplus-' + mroom_row + '" onclick="mplus(' + mroom_row +
                ')">';
            html += '+';
            html += '</span>';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            $('#mroom-add').append(html);

            document.getElementById('mdelete-room').setAttribute('onclick', 'mdeleteRoom(' + mroom_row + ')');

            // Main guest count update
            var total_value = 0;
            for (i = 1; i <= mroom_row; i++) {
                var sum = document.getElementById("mguest-count-" + i).innerText;
                var total_value = parseInt(total_value) + parseInt(sum);
            }
            document.getElementById("mroom-guest").textContent = parseInt(total_value);
            document.getElementById("mroom-count").textContent = parseInt(mroom_row);

            // Main guest count update End

            // guest and room count for saving
            document.getElementById("mgt-count").value = parseInt(total_value);
            document.getElementById("mrm-count").value = parseInt(mroom_row);
            // End

            mroom_row++;
            document.getElementById('madd-room').setAttribute('onclick', 'addMRoom(' + mroom_row + ')');
        }
    }
</script>

<script>
    function mdeleteRoom(mroom_row) {
        const element = document.getElementById("mroom_div-" + mroom_row);
        element.remove();
        document.getElementById('madd-room').setAttribute('onclick', 'addMRoom(' + mroom_row + ')');
        mroom_row--;
        document.getElementById('mdelete-room').setAttribute('onclick', 'mdeleteRoom(' + mroom_row + ')');

        // Main guest count update
        var total_value = 0;
        for (i = 1; i <= mroom_row; i++) {
            var sum = document.getElementById("mguest-count-" + i).innerText;
            var total_value = parseInt(total_value) + parseInt(sum);
        }
        document.getElementById("mroom-guest").textContent = parseInt(total_value);
        document.getElementById("mroom-count").textContent = parseInt(mroom_row);

        // guest and room count for saving
        document.getElementById("mgt-count").value = parseInt(total_value);
        document.getElementById("mrm-count").value = parseInt(mroom_row);
        // End
        // Main guest count update End

    }

    function done() {
        $("#guest-modal").removeClass("in");
        $(".modal-backdrop").remove();
        $('#guest-modal').modal('hide');
    }

    function mminus(row) {

        var guest = document.getElementById("mguest-count-" + row).innerText;
        var total = 1;
        if (guest > 1) {
            var value = parseInt(guest) - 1;
            document.getElementById("mguest-count-" + row).textContent = parseInt(value);

            // Main guest count update
            var total_value = 0;
            var total_room_count = document.getElementById("mroom-count").textContent;
            for (i = 1; i <= total_room_count; i++) {
                var sum = document.getElementById("mguest-count-" + i).innerText;
                var total_value = parseInt(total_value) + parseInt(sum);
            }
            document.getElementById("mroom-guest").textContent = parseInt(total_value);

            // guest and room count for saving
            document.getElementById("mgt-count").value = parseInt(total_value);
            // End
            // Main guest count update End
        }
    }

    function mplus(row) {
        var guest = document.getElementById("mguest-count-" + row).innerText;
        var total = 0;

        if (guest < 3) {
            var value = parseInt(guest) + 1;
            document.getElementById("mguest-count-" + row).textContent = value;

            // Main guest count update
            var total_value = 0;
            var total_room_count = document.getElementById("mroom-count").textContent;
            for (i = 1; i <= total_room_count; i++) {
                var sum = document.getElementById("mguest-count-" + i).innerText;
                var total_value = parseInt(total_value) + parseInt(sum);
            }
            document.getElementById("mroom-guest").textContent = parseInt(total_value);

            // guest and room count for saving
            document.getElementById("mgt-count").value = parseInt(total_value);
            // End
            // Main guest count update End
        }
    }
</script>

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

            // Main guest count update
            var total_value = 0;
            for (i = 1; i <= room_row; i++) {
                var sum = document.getElementById("guest-count-" + i).innerText;
                var total_value = parseInt(total_value) + parseInt(sum);
            }
            document.getElementById("room-guest").textContent = parseInt(total_value);
            document.getElementById("room-count").textContent = parseInt(room_row);
            // Main guest count update End

            // guest and room count for saving
            document.getElementById("gt-count").value = parseInt(total_value);
            document.getElementById("rm-count").value = parseInt(room_row);
            // End
            room_row++;
            document.getElementById('add-room').setAttribute('onclick', 'addRoom(' + room_row + ')');
        }
    }
</script>

<script>
    function deleteRoom(room_row) {
        const element = document.getElementById("room_div-" + room_row);
        element.remove();
        document.getElementById('add-room').setAttribute('onclick', 'addRoom(' + room_row + ')');
        room_row--;
        document.getElementById('delete-room').setAttribute('onclick', 'deleteRoom(' + room_row + ')');

        // Main guest count update
        var total_value = 0;
        for (i = 1; i <= room_row; i++) {
            var sum = document.getElementById("guest-count-" + i).innerText;
            var total_value = parseInt(total_value) + parseInt(sum);
        }
        document.getElementById("room-guest").textContent = parseInt(total_value);
        document.getElementById("room-count").textContent = parseInt(room_row);

        // guest and room count for saving
        document.getElementById("gt-count").value = parseInt(total_value);
        document.getElementById("rm-count").value = parseInt(room_row);
        // End
        // Main guest count update End

    }

    function minus(row) {

        var guest = document.getElementById("guest-count-" + row).innerText;
        var total = 1;
        if (guest > 1) {
            var value = parseInt(guest) - 1;
            document.getElementById("guest-count-" + row).textContent = parseInt(value);

            // Main guest count update
            var total_value = 0;
            var total_room_count = document.getElementById("room-count").textContent;
            for (i = 1; i <= total_room_count; i++) {
                var sum = document.getElementById("guest-count-" + i).innerText;
                var total_value = parseInt(total_value) + parseInt(sum);
            }
            document.getElementById("room-guest").textContent = parseInt(total_value);

            // guest and room count for saving
            document.getElementById("gt-count").value = parseInt(total_value);
            // End
            // Main guest count update End
        }
    }

    function plus(row) {
        var guest = document.getElementById("guest-count-" + row).innerText;
        var total = 0;

        if (guest < 3) {
            var value = parseInt(guest) + 1;
            document.getElementById("guest-count-" + row).textContent = value;

            // Main guest count update
            var total_value = 0;
            var total_room_count = document.getElementById("room-count").textContent;
            for (i = 1; i <= total_room_count; i++) {
                var sum = document.getElementById("guest-count-" + i).innerText;
                var total_value = parseInt(total_value) + parseInt(sum);
            }
            document.getElementById("room-guest").textContent = parseInt(total_value);

            // guest and room count for saving
            document.getElementById("gt-count").value = parseInt(total_value);
            // End
            // Main guest count update End
        }
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

    function initAutocomplete2() {
        const input2 = document.getElementById('search-loc');
        const autocomplete2 = new google.maps.places.Autocomplete(input2);
        google.maps.event.addListener(autocomplete2, 'place_changed', function() {
            var place = autocomplete2.getPlace();
            document.getElementById('latitude-mob').value = place.geometry.location.lat();
            document.getElementById('longitude-mob').value = place.geometry.location.lng();
        });
    }
    google.maps.event.addDomListener(window, 'load', initAutocomplete1);
    google.maps.event.addDomListener(window, 'load', initAutocomplete2);
</script>


<script>
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
</script>
