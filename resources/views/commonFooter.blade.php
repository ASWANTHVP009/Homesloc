                <div class="cmsWrapper">
                    <div class="fadeIn__container fadeIn__container--active">
                        <div class="footerAppIcons" data-cms-id="187470" data-cms-template="cWEB-footerAppIconsText">
                            <div class="oyo-row footerAppIcons__container">
                                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks">
                                    <div class="oyo-row oyo-row--no-spacing footerAppIcons__secondryLinksContainer">
                                        <a href="=" target="_blank" class="Q-BLNK">Quick Links</a>
                                        <a href="" target="_blank">My Account</a>
                                    </div>
                                </div>
                                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks">
                                    <div class="oyo-row oyo-row--no-spacing footerAppIcons__secondryLinksContainer">
                                        <a href="/about-us" target="_blank" class="Q-BLNK">About Us</a>
                                        <a href="/contact" target="_blank">Contact Us</a>

                                    </div>
                                </div>
                                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks">
                                    <div class="oyo-row oyo-row--no-spacing footerAppIcons__secondryLinksContainer">
                                        <a href="/privacy" target="_blank">Privacy Policy</a>
                                        <a href="/terms" target="_blank">Terms & Condition</a>
                                        <a href="/refund" target="_blank">Refund & cancellation</a>

                                    </div>
                                </div>
                                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks newsl">
                                    <div
                                        class="oyo-row oyo-row--no-spacing u-alignItemsCenter footerAppIcons__appsMessage">
                                        <span style="color: #fff;">Keep in touch</span>
                                        <a target="_blank" rel="noopener" href=" "></a>
                                    </div>
                                    <form method="POST" action="{{ route('newsletter') }}">
                                        <div class="oyo-row oyo-row--no-spacing">
                                            <div class="subscription_form_wrap">
                                                <input type="email" name="email" autocapitalize="off"
                                                    required="true" id="newsletter_to"
                                                    class="input_newsletter_subscription_to"
                                                    placeholder="Your email address" title="" value=""
                                                    data-ajax-submit="">
                                                <button id="newsletter_button_footer"
                                                    data-et-click="goal:www_subscribe_deals_footer_button_click"
                                                    type="sumbit">
                                                    Subscribe </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fadeIn__container fadeIn__container--active">
                        <div class="footerSocial" data-cms-id="552832" data-cms-template="cWeb-SocialFooter">
                            <div class="footerSocial__container">
                                <div class="oyo-row oyo-row--no-spacing">
                                    <div class="oyo-cell oyo-cell--4-col oyo-cell--middle footerSocial__social">
                                        <a href="https://www.facebook.com/oyorooms" target="_blank"
                                            rel="nofollow noopener" class="footerSocial__socialMediaLink">
                                            <svg>
                                                <use xlink:href="#facebook"></use>
                                            </svg>
                                        </a>
                                        <a href="/" target="_blank" rel="nofollow noopener"
                                            class="footerSocial__socialMediaLink">
                                            <svg>
                                                <use xlink:href="#instagram"></use>
                                            </svg>
                                        </a>
                                        <a href="" target="_blank" rel="nofollow noopener"
                                            class="footerSocial__socialMediaLink">
                                            <svg>
                                                <use xlink:href="#twitter"></use>
                                            </svg>
                                        </a>
                                        <a href="" target="_blank" rel="nofollow noopener"
                                            class="footerSocial__socialMediaLink">
                                            <svg>
                                                <use xlink:href="#youtube"></use>
                                            </svg>
                                        </a>
                                        <a href="" target="_blank" rel="nofollow noopener"
                                            class="footerSocial__socialMediaLink">
                                            <svg>
                                                <use xlink:href="#pinterest"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div
                                        class="oyo-cell oyo-cell--4-col oyo-cell--middle u-textCenter footerSocial__tagLine">
                                    </div>
                                    <div
                                        class="oyo-cell oyo-cell--4-col oyo-cell--middle u-textRight footerSocial__copyright">
                                        2023 © HomesLoc</div>
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
                <script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"></script>
                <script src="{{ asset('assets/js/moment.min.js') }}"></script>

                <script>
                    $(function() {
                        $('input[name="daterange"]').daterangepicker({
                            opens: 'left',
                            minYear: 2023,
                            minDate: new Date(),
                        }, function(start, end, label) {});
                    });
                </script>


                <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

                {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb1d1Vqks7Wdf8OlUYl8BOGeFthpScZMY&libraries=places"> --}}
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

                {{-- Mobile Js --}}

                <script>
                    window.onload = function() {
                        console.log('12121212112');
                        var default_room = document.getElementById("mroom-count").innerText;
                        console.log('dadasd' + default_room);
                        var total_value = 0;
                        for (i = 1; i <= default_room; i++) {
                            var sum = document.getElementById("mguest-count-" + i).innerText;
                            var total_value = parseInt(total_value) + parseInt(sum);

                        }

                        document.getElementById("mroom-guest").textContent = parseInt(total_value);
                        document.getElementById("mroom-count").textContent = parseInt(default_room);
                        // Main guest count update End
                        // guest and room count for saving
                        document.getElementById("mgt-count").value = parseInt(total_value);
                        document.getElementById("rm-count").value = parseInt(default_room);
                    };
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
                            html += '<input type="hidden" id="mconfig-' + mroom_row + '" name="config-' + mroom_row + '" value="2">';

                            $('#mroom-add').append(html);

                            document.getElementById('mdelete-room').setAttribute('onclick', 'mdeleteRoom(' + mroom_row + ')');

                            // Main guest count update
                            var total_value = 0;
                            for (i = 1; i <= mroom_row; i++) {
                                var sum = document.getElementById("mguest-count-" + i).innerText;
                                var total_value = parseInt(total_value) + parseInt(sum);

                                document.getElementById("mconfig-" + i).value = sum;
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

                            document.getElementById("mconfig-" + i).value = sum;
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

                                document.getElementById("mconfig-" + i).value = sum;
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

                                document.getElementById("mconfig-" + i).value = sum;
                            }
                            document.getElementById("mroom-guest").textContent = parseInt(total_value);

                            // guest and room count for saving
                            document.getElementById("mgt-count").value = parseInt(total_value);
                            // End
                            // Main guest count update End
                        }
                    }
                </script>
                {{-- Mobile Js End --}}

                <script>
                    window.onload = function() {
                        console.log('ddddddddddddddd');

                        var default_room = document.getElementById("room-count").innerText;

                        var total_value = 0;
                        for (i = 1; i <= default_room; i++) {
                            var sum = document.getElementById("guest-count-" + i).innerText;
                            var total_value = parseInt(total_value) + parseInt(sum);

                        }

                        document.getElementById("room-guest").textContent = parseInt(total_value);
                        document.getElementById("room-count").textContent = parseInt(default_room);
                        // Main guest count update End
                        // guest and room count for saving
                        document.getElementById("gt-count").value = parseInt(total_value);
                        document.getElementById("rm-count").value = parseInt(default_room);
                    };
                </script>

                {{-- Web Js --}}
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
                            html += '<input type="hidden" id="config-' + room_row + '" name="config-' + room_row + '" value="2">';
                            $('#room-add').append(html);

                            document.getElementById('delete-room').setAttribute('onclick', 'deleteRoom(' + room_row + ')');

                            // Main guest count update
                            var total_value = 0;
                            for (i = 1; i <= room_row; i++) {
                                var sum = document.getElementById("guest-count-" + i).innerText;
                                var total_value = parseInt(total_value) + parseInt(sum);

                                // update param guest count value
                                document.getElementById("config-" + i).value = sum;
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

                    // function update(room_row) {
                    // }
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
                            // update param guest count value
                            document.getElementById("config-" + i).value = sum;
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
                                // update param guest count value
                                document.getElementById("config-" + i).value = sum;
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
                                // update param guest count value
                                document.getElementById("config-" + i).value = sum;
                            }
                            document.getElementById("room-guest").textContent = parseInt(total_value);

                            // guest and room count for saving
                            document.getElementById("gt-count").value = parseInt(total_value);
                            // End
                            // Main guest count update End
                        }
                    }
                </script>

                {{-- Web Js End --}}

                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
                <script type="text/javascript">
                    const splide = new Splide(".splide", {
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
                        breakpoints: {
                            768: {
                                perPage: 1,
                                snap: true
                            }
                        }
                    });
                    splide.mount();
                </script>
