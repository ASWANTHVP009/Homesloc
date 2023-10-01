{{-- @include('header') --}}

<meta content="width=device-width, initial-scale=1" name="viewport" />

<link href="{{ asset('assets/css/commoncss.30eb71d6d0e27125599b.css') }}" rel="stylesheet">

<link href="{{ asset('assets/css/detail.5451d231bc1ca452b6f9.css') }}" rel="stylesheet">

<link href="{{ asset('assets/css/main.e953701e38dac851bad4.css') }}" rel="stylesheet">

<link href="{{ asset('assets/css/checkout.css') }}" rel="stylesheet">

<div class="c-b8pzrm">
    <div class="oyo-row oyo-row--no-spacing headerSticky">

        <div class="oyo-cell headerSticky__leftHeader">
            <a class="c-nn640c headerSticky__logoWrapper" href="/" style="margin-left: 120px;">
                <img src="{{ asset('uploads/images/logo.png') }}" alt="Homeslocss" class="mob-logo"
                    style=" width: 165px;">
            </a>
        </div>
    </div>

    <div class="c-13x3f2z">
        <div class="c-9zatoj">
            <div class="c-10izwvm">
                <div class="c-1vrj4pl">
                    <span class="c-1aivkbe">
                        <svg xmlns="http://www.w3.org/2000/svg" id="chevron" viewBox="0 0 8 14">
                            <path
                                d="M.68-.04c.173 0 .346.066.48.2L8 7l-6.84 6.84a.677.677 0 01-.96 0 .677.677 0 010-.96L6.08 7 .2 1.12a.675.675 0 010-.96c.13-.134.305-.2.48-.2z">
                            </path>
                        </svg>
                    </span>&nbsp; <span class="c-isphd1">
                        <span>Modify your booking</span>
                    </span>
                </div>
            </div>

            <div class="c-9ugfym">
                <div class="c-172kp3s">
                    <div class="c-12qt2ez">
                        <span>
                            <span role="img" aria-label="discount">🎉</span>
                            <span>Continue to Book Room...</span>
                        </span>
                    </div>

                    <div class="c-8kaq9v">
                        <div class="c-0">
                            <div>
                                <div class="c-i9gwvb">
                                    <div class="c-1kz1i96">1</div>
                                    <div class="c-i9gxme">
                                        <span>Enter your details</span>
                                    </div>
                                </div>
                            </div>

                            <div class="c-1rhsl0p">
                                <div class="c-mjbegz">
                                    <div class="c-1s0ylt3">
                                        <span>We will use these details to share your booking information</span>
                                    </div>
                                    <div class="c-qln3k6">
                                        <div class="textInput__container">
                                            <div class="textInput__inputLabel" htmlfor="name">
                                                <span>Full Name</span>
                                            </div>
                                            @auth
                                                <input class="textInput__input" id="name" required="" type="search"
                                                    name="name" placeholder="Enter first and last name"
                                                    label="[object Object]" maxlength="50" value="{{ Auth::user()->name }}">
                                            @else
                                                <input class="textInput__input" id="name" required="" type="search"
                                                    name="name" placeholder="Enter first and last name"
                                                    label="[object Object]" maxlength="50">
                                            @endauth
                                            <span class="check-error" id="err-name">Please enter Name</span>
                                        </div>
                                    </div>

                                    <div class="c-qln3k6">
                                        <div class="textInput__container">
                                            <div class="textInput__inputLabel" htmlfor="email">
                                                <span>Email Address</span>
                                            </div>
                                            @auth
                                                <input class="textInput__input" id="email" required="" type="search"
                                                    name="email" label="[object Object]" placeholder="name@abc.com"
                                                    maxlength="75" notshowflag="true" value="{{ Auth::user()->email }}">
                                            @else
                                                <input class="textInput__input" id="email" required="" type="search"
                                                    name="email" label="[object Object]" placeholder="name@abc.com"
                                                    maxlength="75" notshowflag="true">

                                            @endauth
                                            <span class="check-error" id="err-email">Please enter Email ID</span>
                                        </div>
                                    </div>

                                    <div class="c-qln3k6">
                                        <div class="textInput__inputLabel">
                                            <span>Mobile Number</span>
                                        </div>
                                        <div class="textTelInput__container">
                                            <input
                                                class="textTelInput__input textTelInput__input--noLabel textTelInput__input--margin"
                                                aria-label="input" verifieduser="true" countrycodeclassname="c-1o67u6n"
                                                maxlength="12" countrycode="+91" placeholder="e.g. 1234567890"
                                                notshowflag="true" ismargin="true" id="mobile" required=""
                                                name="mobile" type="tel" minlength="8" pattern="[0-9]*"
                                                autocomplete="off">

                                            <span class="check-error" id="err-mobile">Please enter Mobile No</span>

                                            <span tabindex="-1"
                                                class="c-1wjqvmt textTelInput__inputCountryCode textTelInput__inputCountryCode--noLabel c-1o67u6n">
                                                <span>+91</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-1j05m3z">
                                    <button type="button" class="c-1njsfze" id="personal">
                                        <span>Continue</span>
                                    </button>
                                </div>

                                {{-- pay --}}

                                <div class="c-1qjslut" id="Payment-Block">
                                    <div class="c-1xaekgw">
                                        <div class="c-1vg4djo"><span style="margin-left:20px">Pay Now</span></div>
                                        <div class="c-1xx1cp5">
                                            <div class="c-o4evj4"><span>100% safe and secure payments</span></div>
                                        </div>
                                    </div>
                                    <div class="c-fc1q1s">
                                        <div class="c-1eivi3x">
                                            <div class="c-9j5geu">
                                                <div class="c-1lekzkb"><span>Pay Now</span><span
                                                        class="c-1nn86ld"><svg xmlns="http://www.w3.org/2000/svg"
                                                            id="chevron" viewBox="0 0 8 14">
                                                            <path
                                                                d="M.68-.04c.173 0 .346.066.48.2L8 7l-6.84 6.84a.677.677 0 01-.96 0 .677.677 0 010-.96L6.08 7 .2 1.12a.675.675 0 010-.96c.13-.134.305-.2.48-.2z">
                                                            </path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                        <div class="c-slzaab">
                                            <div class="c-b93e9j">
                                                <div class="c-u7l2ok"><span class="c-wvxjsw"></span><span>Payment
                                                        Now</span></div>
                                                <div class="c-193xivm"><span>We will confirm your stay after the
                                                        payment. After visit the hotel during your stay.</span></div>
                                                <div class="c-1veb3nf">
                                                    <button type="submit" class="c-u65gu2" id="rzp-button1">
                                                        Pay Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Pay end --}}
                                <div class="c-1l4w6pd"></div>
                                <div class="c-1yn8ri2"></div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <form action="" method="GET"></form>
                        <div id="redirectionForm"></div>
                    </div>
                </div>
                <div>
                    <div class="c-1qpcdvy c-172kp3s">
                        <div>
                            <div class="c-gg4vpm">
                                <div class="c-5hicrt">
                                    <div class="c-6a3y35">Thottathil resort Munnar</div>
                                    <div class="c-zpzivj"></div>
                                    <div class="hotelRating">
                                        <div itemprop="aggregateRating" itemscope="true"
                                            itemtype="http://schema.org/AggregateRating" class="hotelRating__wrapper"
                                            tabindex="-1">
                                            <meta itemprop="ratingValue" content="3.6">
                                            <span
                                                class="is-fontBold hotelRating__rating hotelRating__rating--good hotelRating__rating--clickable">
                                                <span>3.6</span>
                                                <span class="hotelRating__star">
                                                    <span lazyload="true" class="c-1in37i9">
                                                        <svg viewBox="0 0 9 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.25 9.5a.238.238 0 01-.12-.032L4.5 7.948l-2.63 1.52a.238.238 0 01-.265-.017.271.271 0 01-.102-.26l.48-3.042-1.91-2.021a.276.276 0 01-.061-.268.255.255 0 01.197-.18l2.874-.508L4.276.646A.25.25 0 014.5.5c.094 0 .181.057.223.146l1.194 2.526 2.874.508a.255.255 0 01.197.18.275.275 0 01-.061.268l-1.91 2.021.48 3.042c.015.1-.024.201-.102.26a.242.242 0 01-.145.049z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="c-2clfy8">
                                    <div class="c-e2r6u2">
                                        <img alt="" loading="auto" importance="auto"
                                            src="https://images.oyoroomscdn.com/uploads/hotel_image/213527/thumb/mpsoewrcnulj.jpg"
                                            lazyload="true" class="c-2tglnv">
                                    </div>
                                </div>
                            </div>

                            <div class="c-1six52r">
                                <div class="c-79elbk">
                                    <div class="c-1thcb3a c-9whsf3 c-gx0lhm c-g4aqpa">
                                        <div class="c-1pzykbe">
                                            <span class="c-1a5t1qn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                                                    viewBox="0 0 18 20">
                                                    <path fill-opacity=".3" fill-rule="evenodd"
                                                        d="M13.6 1.111V.556A.553.553 0 0013.05 0a.553.553 0 00-.55.556v.555h-7V.556A.553.553 0 004.95 0a.553.553 0 00-.55.556v.555H1.65C.74 1.111 0 1.86 0 2.778v15.555C0 19.253.74 20 1.65 20h14.7c.91 0 1.65-.748 1.65-1.667V2.778a1.66 1.66 0 00-1.65-1.667H13.6zM4.4 2.222V3.89c0 .307.246.555.55.555.304 0 .55-.248.55-.555V2.222h7V3.89c0 .307.246.555.55.555.304 0 .55-.248.55-.555V2.222h2.75c.304 0 .55.25.55.556v2.778H1.1V2.778c0-.307.246-.556.55-.556H4.4zM1.65 18.89a.553.553 0 01-.55-.556V6.667h15.8v11.666a.553.553 0 01-.55.556H1.65zm4.5-7.879h1.1c.304 0 .55-.249.55-.555a.553.553 0 00-.55-.556h-1.1a.553.553 0 00-.55.556c0 .306.246.555.55.555zm4.3 0h1.1c.304 0 .55-.249.55-.555a.553.553 0 00-.55-.556h-1.1a.553.553 0 00-.55.556c0 .306.246.555.55.555zm-4.3 3.434h1.1c.304 0 .55-.248.55-.555a.553.553 0 00-.55-.556h-1.1a.553.553 0 00-.55.556c0 .307.246.555.55.555zm4.3 0h1.1c.304 0 .55-.248.55-.555a.553.553 0 00-.55-.556h-1.1a.553.553 0 00-.55.556c0 .307.246.555.55.555z"
                                                        style="mix-blend-mode:luminosity"></path>

                                                </svg>
                                            </span>
                                            <div
                                                class="oyo-row oyo-row--no-spacing datePickerDesktop datePickerDesktop--hotel">
                                                <div
                                                    class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold datePickerDesktop__checkInOut u-textEllipsis">
                                                    <span
                                                        class="datePickerDesktop__checkInOutText">{{ app('request')->input('daterange') }}</span>
                                                </div>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="c-14mt3w6 c-107tt68">
                                            <div
                                                class="oyo-row oyo-row--no-spacing guestRoomPicker guestRoomPicker--hotel ">
                                                <div
                                                    class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold u-textEllipsis guestRoomPicker__guestRoomCount">
                                                    {{ app('request')->input('rm-count') }} Room,
                                                    {{ app('request')->input('gt-count') }} Guests</div>
                                                <span></span>
                                            </div>
                                            <div class="c-18fyjan"> &nbsp; </div>
                                        </div>
                                    </div>
                                    <div class="c-abzw2p"></div>
                                </div>

                                <div class="c-1jbawm2">
                                    <div class="c-18axi1k">
                                        <div class="c-6xf37g">Room price </div>
                                        <div class="c-tvy9fi">₹{{ $unit_price }}</div>
                                    </div>
                                    <div class="c-bjdcis"></div>
                                    <div class="c-18axi1k">
                                        <div class="c-dgqod7">
                                            <span>Sub Total</span>
                                        </div>
                                        <div class="c-11tk0uk" style="font-size: 15px;">
                                            ₹{{ $total }}</div>
                                    </div>

                                    <div class="c-18axi1k">
                                        <div class="c-dgqod7">
                                            <span>Payable Amount</span>
                                            <div class="c-m8gzcb">inclusive of all taxes</div>
                                        </div>
                                        <div class="c-11tk0uk">₹{{ $total }}</div>
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

<script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script>
    $('#Payment-Block').hide();
    $('#personal').on('click', function(e) {
        var name = $('#name').val();
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var error_value = 0;
        if (name === null || name == '') {
            $('#err-name').show();
            error_value = 1;
        } else {
            $('#err-name').hide();
        }

        if (email === null || email == '' || !isValidEmail(email)) {
            // if (email === null || email == '') {
            $('#err-email').show();
            error_value = 1;

        } else {
            $('#err-email').hide();
        }

        if (mobile === null || mobile == '' || mobile.length < 10 || mobile.length > 10 || isNaN(mobile)) {
            $('#err-mobile').show();
            error_value = 1;

        } else {
            $('#err-mobile').hide();
        }

        if (error_value == 0) {
            $('#Payment-Block').show();

        }

    });

    function isValidEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        return emailPattern.test(email);
    }
</script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var urls = "{{ route('razorpay.payment.store') }}";

    var options = {
        "key": "rzp_test_7jzaCCPRSnsuFj", // Enter the Key ID generated from the Dashboard
        "amount": "{{ $razorpayOrder->amount }}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        "name": "Homesloc",
        "description": "Homesloc Transaction",
        "image": "https://homesloc.com/uploads/images/logo.png",
        "order_id": "{{ $razorpayOrder->id }}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        "handler": function(response) {

            var name = $('#name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var property_id = "{{ app('request')->input('property') }}";
            var room_count = "{{ app('request')->input('rm-count') }}";
            var guest_count = "{{ app('request')->input('gt-count') }}";
            var daterange = "{{ app('request')->input('daterange') }}";

            window.location.href = urls + '?payment_id=' + response.razorpay_payment_id + '&name=' + name +
                '&email=' + email + '&mobile=' + mobile + '&property_id=' + property_id + '&room_count=' +
                room_count + '&guest_count=' + guest_count + '&daterange=' + daterange;
            // alert(response.razorpay_payment_id);
            // alert(response.razorpay_order_id);
            // alert(response.razorpay_signature)
        },
        "prefill": {
            "name": "Gaurav Kumar",
            "email": "gaurav.kumar@example.com",
            "contact": "9000090000"
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.on('payment.failed', function(response) {
        // alert(response.error.code);
        // alert(response.error.description);
        // alert(response.error.source);
        // alert(response.error.step);
        // alert(response.error.reason);
        // alert(response.error.metadata.order_id);
        // alert(response.error.metadata.payment_id);
    });
    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
</script>

{{-- @include('footer') --}}
