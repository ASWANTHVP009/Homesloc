                <div class="cmsWrapper">
                    <div class="fadeIn__container fadeIn__container--active">
                        <div class="footerAppIcons" data-cms-id="187470" data-cms-template="cWEB-footerAppIconsText">
                            <div class="oyo-row footerAppIcons__container">
                                
                                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks">
                                    <div class="oyo-row oyo-row--no-spacing footerAppIcons__secondryLinksContainer">
                                        <a target="_blank" class="Q-BLNK">Quick Links</a>
                                        <a href="/about-us" target="_blank" class="">About Us</a>
                                        <a href="/contact" target="_blank">Contact Us</a>

                                    </div>
                                </div>
                                
                                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks">
                                    <div class="oyo-row oyo-row--no-spacing footerAppIcons__secondryLinksContainer">
                                        <a  target="_blank" class="">Home Stay</a>
                                        <a  target="_blank">Resorts</a>
                                        <a  target="_blank">Hotels</a>
                                        <a  target="_blank">Appartments</a>

                                    </div>
                                </div>
                                
                                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks newsl">
                                    <div
                                        class="oyo-row oyo-row--no-spacing u-alignItemsCenter footerAppIcons__appsMessage">
                                        <span style="color: #fff;">Keep in touch</span>
                                        <a target="_blank" rel="noopener" href=" "></a>
                                    </div>
                                    <form action="{{ url('/newsletter') }}" method="POST" id="newsl">
                                        @csrf
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

                                        @if (session('success'))
                                            <div class="alert alert-success alr">
                                                {{ session('success') }}
                                            </div>
                                            <script>
                                                window.scrollTo(0, document.body.scrollHeight);
                                            </script>
                                        @endif

                                    </form>
                                </div>
                                <div class="oyo-cell oyo-cell--3-col footerAppIcons__topLinks">
                                    <div class="oyo-row oyo-row--no-spacing address-footer"
                                        style="padding: 0 32px;font-size: 14px;  text-align: left; color: #fff;display: block;    line-height: 21px;">
                                        <p style=" margin: 0 0 7px;">SHIGATHA TOURISM PRIVATE LIMITED COMPANY</p>
                                        <p style=" margin: 0 0 7px;">NIRAMARUTHUR PO</p>
                                        <p style=" margin: 0 0 7px;">TIRUR.676109</p>
                                    </div><br>
                                    <div class="soc">
                                        <a href="https://www.facebook.com/profile.php?id=61554143541070&mibextid=ZbWKwL" target="_blank"><i
                                                class="fa-brands fa-facebook social-ic"></i></a>
                                        <a href="https://www.instagram.com/homes_loc/" target="_blank"><i
                                                class="fa-brands fa-instagram social-ic"></i></a>
                                        <a href="https://www.linkedin.com/in/homesloc-homes-loc-8651282a1" target="_blank"><i
                                                class="fa-brands fa-linkedin social-ic"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fadeIn__container fadeIn__container--active">
                        <div class="footerSocial" data-cms-id="552832" data-cms-template="cWeb-SocialFooter">
                            <div class="footerSocial__container">
                                <div class="oyo-row oyo-row--no-spacing">

                                    <div
                                        class="oyo-cell oyo-cell--4-col oyo-cell--middle u-textRight footerSocial__copyright">
                                        2023 © HomesLoc</div>
                                    <div
                                        class="oyo-cell oyo-cell--8-col oyo-cell--middle u-textRight footerSocial__copyright1 foot-pvc">
                                        <a href="/privacy" target="_blank">Privacy Policy</a>
                                        <a href="/terms" target="_blank">Terms & Condition</a>
                                        <a href="/refund" target="_blank">Refund & cancellation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>

                <style>
                    .whats-app {
                        position: fixed;
                        width: 60px;
                        height: 60px;
                        bottom: 40px;
                        /*background-color: #25d366;*/
                        color: green;
                        border-radius: 50px;
                        text-align: center;
                        font-size: 40px;
                        z-index: 100;
                        right: 15px;
                    }

                    .my-float {
                        margin-top: 16px;
                    }
                </style>

                <a class="whats-app" href="https://wa.me/+918590391009" target="_blank">
                    <i class="fa-brands fa-whatsapp my-float"></i>
                </a>

                </body>

                </html>

                <script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"></script>
                <script src="{{ asset('assets/js/moment.min.js') }}"></script>
                {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

                <script>
                    //                     $('#newsl').on('submit', function(e) {
                    //                         e.preventDefault(); // Prevent default form submission
                    // 
                    //                         jQuery.ajax({
                    //                             type: 'POST',
                    //                             url: $(this).attr('action'),
                    //                             data: $(this).serialize(),
                    //                             success: function(response) {
                    //                                 console.log(response.message);
                    //                             },
                    //                             error: function(error) {
                    //                                 console.log(error.responseJSON);
                    //                             }
                    //                         });
                    //                     });
                </script>

                <script>
                    $(function() {
                        $('input[name="daterange"]').daterangepicker({
                            opens: 'left',
                            minYear: 2023,
                            minDate: new Date(),
                            locale: {
                                format: 'DD-MM-YYYY'
                            }
                        }, function(start, end, label) {});
                    });
                </script>


                <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

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


                            // mobile config add
                            html_mob = '<input type="hidden" id="mconfig-' + mroom_row + '" name="config-' + mroom_row + '" value="2">';
                            $('#mobile-config').append(html_mob);
                            // mobile config end

                            document.getElementById('mdelete-room').setAttribute('onclick', 'mdeleteRoom(' + mroom_row + ')');

                            // Main guest count update
                            var total_value = 0;
                            for (i = 1; i <= mroom_row; i++) {
                                var sum = document.getElementById("mguest-count-" + i).innerText;
                                var total_value = parseInt(total_value) + parseInt(sum);

                                // update param guest count value
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
                            // update param guest count value
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
                                // update param guest count value
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
                                // update param guest count value
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

                        //                         var default_room = document.getElementById("room-count").innerText;
                        //                         var total_value = 0;
                        //                         for (i = 1; i <= default_room; i++) {
                        //                             var sum = document.getElementById("guest-count-" + i).innerText;
                        //                             var total_value = parseInt(total_value) + parseInt(sum);
                        //                         }
                        // 
                        //                         document.getElementById("room-guest").textContent = parseInt(total_value);
                        //                         document.getElementById("room-count").textContent = parseInt(3);
                        //                         // Main guest count update End
                        //                         // guest and room count for saving
                        //                         document.getElementById("gt-count").value = parseInt(total_value);
                        //                         document.getElementById("rm-count").value = parseInt(3);
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
