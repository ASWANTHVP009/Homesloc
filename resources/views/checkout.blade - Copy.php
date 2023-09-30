{{-- @include('header') --}}

<link href="{{ asset('assets/css/commoncss.30eb71d6d0e27125599b.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/detail.5451d231bc1ca452b6f9.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/main.e953701e38dac851bad4.css') }}" rel="stylesheet">

<style>
    .c-9zatoj {
        /* display: flex; */
    }

    .c-10izwvm {
        width: 100%;
        margin: 0px auto;
        padding-top: 50px;
    }

    .c-1vrj4pl {
        font-size: 16px;
        font-weight: 600;
        color: rgb(238, 42, 36);
        width: 1130px;
        margin: 52px auto 28px;
    }

    .c-1aivkbe {
        margin-right: 5px;
        vertical-align: text-bottom;
        outline: 0px;
        pointer-events: auto;
    }

    .c-1aivkbe svg {
        fill: rgb(238, 42, 36);
        transform: rotate(180deg);
        height: 16px;
    }

    .c-isphd1 {
        outline: 0px;
        pointer-events: auto;
    }

    .c-9ugfym {
        width: 100%;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        position: relative;
    }

    .c-172kp3s {
        width: 648px;
        border-radius: 4px;
        margin-right: 24px;
    }

    .c-12qt2ez {
        border-radius: 4px;
        border: 1px solid rgba(245, 166, 35, 0.19);
        background-color: rgb(254, 246, 233);
        padding: 16px;
        color: rgb(211, 140, 23);
        font-size: 16px;
        text-align: center;
        margin-bottom: 16px;
    }

    c-8kaq9v {
        border: 1px solid rgba(122, 122, 122, 0.17);
        border-radius: 4px;
    }

    .c-i9gwvb {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        padding: 14px 24px;
        color: rgb(0, 0, 0);
        background: rgb(249, 249, 251);
        font-size: 20px;
        font-weight: bold;
        line-height: 1.6;
    }

    .c-1kz1i96 {
        font-size: 12px;
        font-weight: bold;
        color: rgb(255, 255, 255);
        padding: 0px 7px;
        border-radius: 4px;
        margin-right: 12px;
        background: rgb(0, 0, 0);
    }

    .c-i9gxme {
        -webkit-box-flex: 1;
        flex-grow: 1;
    }

    .c-1rhsl0p {
        text-align: left;
        padding: 0px 24px 24px;
    }

    .c-mjbegz {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .c-1s0ylt3 {
        text-align: center;
        font-size: 14px;
        line-height: 1.7;
        margin: 24px 0px;
    }

    .c-qln3k6 {
        flex: 0 1 46%;
        box-sizing: border-box;
        margin: 14px 20px 6px 0px;
    }

    .textInput__container {
        position: relative;
        border-radius: 4px;
    }

    .textInput__inputLabel {
        margin: 0 0 9px;
        font-weight: 600;
        font-size: 16px;
    }

    .textInput__inputLabelHelper {
        font-size: 14px;
        color: #ee2e24;
        position: absolute;
        top: calc(50% - 18px);
        cursor: text;
        left: 80%;
        cursor: pointer;
        display: inline-block;
    }

    .c-qln3k6 {
        flex: 0 1 46%;
        box-sizing: border-box;
        margin: 14px 20px 6px 0px;
    }

    .textInput__container {
        position: relative;
        border-radius: 4px;
    }

    .textInput__inputLabel {
        margin: 0 0 9px;
        font-weight: 600;
        font-size: 16px;
    }

    .textInput__inputLabelHelper {
        font-size: 14px;
        color: #ee2e24;
        position: absolute;
        top: calc(50% - 18px);
        cursor: text;
        left: 80%;
        cursor: pointer;
        display: inline-block;
    }

    .textInput__inputLabel {
        margin: 0 0 9px;
        font-weight: 600;
        font-size: 16px;
    }

    .textTelInput__container {
        position: relative;
    }

    input:not([type="checkbox"]):not([type="radio"]) {
        -webkit-appearance: none;
        border-radius: 0;
        border: 1px solid #e4e2e2;
    }

    .textInput__inputLabelHelper {
        font-size: 14px;
        color: #ee2e24;
        position: absolute;
        top: calc(50% - 18px);
        cursor: text;
        left: 80%;
        cursor: pointer;
        display: inline-block;
    }

    .checkIcon {
        object-fit: contain;
    }

    .verifiedCheck {
        font-size: 12px;
        font-weight: 600;
        line-height: 2;
        color: #1ab64f;
        display: flex;
        top: 14px;
        position: absolute;
        right: 16px;
    }

    .iconClass {
        position: relative;
        top: 3px;
        right: 5px;
    }

    .iconClass svg {
        width: 14px !important;
        height: 14px !important;
    }

    .c-1j05m3z {
        text-align: left;
        margin-top: 16px;
        height: 100%;
    }

    .c-1njsfze {
        border-radius: 4px;
        background-color: rgb(26, 182, 79);
        border: 0px;
        color: rgb(255, 255, 255);
        font-size: 16px;
        font-weight: bold;
        line-height: 1.2;
        padding: 14px;
        height: auto;
        margin-bottom: -12px;
        flex: 1 1 50%;
        margin-right: 24px;
        display: block;
        cursor: pointer;
        outline: 0px;
        width: 40%;
    }

    .c-1l4w6pd {
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
    }

    .c-1yn8ri2 {
        font-size: 12px;
        line-height: 1.33;
        text-align: left;
        margin-top: 16px;
        color: rgb(109, 120, 125);
    }

    .c-1qpcdvy {
        min-width: 376px;
        max-width: 450px;
        border-radius: 4px;
        border: solid 1px rgba(122, 122, 122, 0.17);
        box-shadow: 0 2px 26px 0 rgba(125, 125, 125, 0.1);
        padding: 24px;
        box-sizing: border-box;
        position: -webkit-sticky;
        position: sticky;
        top: 24px;
    }

    .c-gg4vpm {
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
    }

    .c-5hicrt {
        margin-right: 12px;
    }

    .c-6a3y35 {
        font-size: 16px;
        font-weight: bold;
        line-height: 1.5;
        width: 280px;
        margin-bottom: 8px;
    }

    .c-zpzivj {
        opacity: 0.4;
        font-size: 14px;
        line-height: 1.71;
        color: rgb(12, 10, 21);
        margin-bottom: 8px;
    }

    .hotelRating {
        position: relative;
        display: flex;
    }

    .hotelRating__wrapper {
        outline: none;
        display: flex;
        align-content: center;
        align-items: center;
    }

    .hotelRating__rating--clickable {
        cursor: pointer;
    }

    .hotelRating__rating--good {
        background-color: #8fc400;
    }

    .hotelRating__rating {
        border-radius: 2px;
        padding: 3px 6px;
        margin-right: 9px;
        background-color: #52b520;
        font-size: 12px;
        color: #fff;
        display: flex;
        align-items: center;
    }

    .is-fontBold {
        font-weight: 600;
    }

    .hotelRating__ratingSummary {
        font-size: 12px;
        color: #222;
    }

    .hotelRating__rating--clickable {
        cursor: pointer;
    }

    .hotelRating__dot {
        margin: 0 4px;
        color: #222;
    }

    .hotelRating__ratingSummary {
        font-size: 12px;
        color: #222;
    }

    .c-sh83s0 {
        font-size: 12px;
        font-weight: bold;
        line-height: 2;
        color: rgb(12, 10, 21);
        margin-top: 8px;
    }

    .c-2clfy8 {
        border-radius: 4px;
        box-shadow: rgba(125, 125, 125, 0.1) 0px 2px 6px 0px;
        width: 79px;
        height: 62px;
        opacity: 1.2;
        border: 1px solid rgb(151, 151, 151);
        background-color: rgb(216, 216, 216);
    }

    .c-e2r6u2 {
        color: rgba(0, 0, 0, 0.54);
        height: 100%;
        width: 100%;
        background: rgb(243, 245, 247);
        animation: auto ease 0s 1 normal none running none;
    }

    .c-2tglnv {
        width: 100%;
        height: 100%;
        vertical-align: middle;
    }

    .c-1six52r {
        border-radius: 4px;
        margin: 18px 0px;
    }

    .c-79elbk {
        position: relative;
    }

    .c-g4aqpa {
        box-shadow: none;
        cursor: default;
        border-width: 0px 0px 1px;
        border-top-style: initial;
        border-right-style: initial;
        border-left-style: initial;
        border-top-color: initial;
        border-right-color: initial;
        border-left-color: initial;
        border-image: initial;
        border-bottom-style: solid;
        border-bottom-color: rgb(240, 240, 240);
    }

    .c-gx0lhm {
        margin-bottom: 0px;
    }

    .c-1thcb3a {
        display: flex;
        margin-top: 16px;
        width: 100%;
        box-shadow: rgba(125, 125, 125, 0.1) 0px 2px 6px 0px;
        cursor: pointer;
        border: 1px solid rgb(240, 240, 240);
    }

    .c-9whsf3 {
        max-width: 100%;
    }

    .c-1pzykbe {
        display: flex;
        border-radius: 4px 0px 0px 4px;
        padding: 0px;
        -webkit-box-align: center;
        align-items: center;
    }

    .c-1a5t1qn {
        margin-top: 2px;
        height: 20px;
        width: 20px;
    }

    .datePickerDesktop--hotel {
        border: 0;
        width: 100%;
        margin: 0 12px;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 14px 0 !important;
    }

    .datePickerDesktop {
        position: relative;
        color: rgba(0, 0, 0, .87);
        background-color: transparent;
        border: 1px solid rgba(0, 0, 0, .07);
        transition: .2s;
        box-sizing: border-box;
    }

    .oyo-row.oyo-row--no-spacing>.oyo-cell {
        margin: 0;
    }

    .datePickerDesktop--hotel .datePickerDesktop__checkInOut {
        font-size: 14px;
        color: #0c0a15;
        line-height: 1.71;
        font-weight: 600;
        background: #fff;
        padding: 0;
        display: block;
    }

    .datePickerDesktop .datePickerDesktop__checkInOutText {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .datePickerDesktop__arrowWrapper--hotel {
        margin: 0 4px;
    }

    .datePickerDesktop__arrowWrapper {
        display: inline-block;
        margin: 0 10px;
    }

    .datePickerDesktop .datePickerDesktop__checkInOutText {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .c-107tt68 {
        border: 0px;
    }

    .c-14mt3w6 {
        display: flex;
        padding: 0px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        position: relative;
    }

    .guestRoomPicker--hotel {
        border: 0;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 14px 0 !important;
    }

    .guestRoomPicker {
        position: relative;
        color: rgba(0, 0, 0, .87);
        background-color: transparent;
        border: 1px solid rgba(0, 0, 0, .07);
        transition: .2s;
        box-sizing: border-box;
    }

    .guestRoomPicker--hotel .guestRoomPicker__guestRoomCount {
        font-size: 14px;
        color: #0c0a15;
        line-height: 1.71;
        font-weight: 600;
        background: #fff;
        padding: 0;
        margin-left: 22px !important;
        margin-right: 12px !important;
    }

    .c-18fyjan {
        position: absolute;
        border-right: 1px solid rgb(240, 240, 240);
        top: 10px;
        height: 30px;
        left: 0px;
    }

    .c-abzw2p {
        position: absolute;
        top: 0px;
        left: 0px;
        height: 100%;
        width: 100%;
    }

    .c-2pbfgc {
        display: flex;
        padding: 12px 0px;
        border-radius: 4px;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        position: relative;
        width: 100%;
        max-width: 100%;
        margin-top: 0px;
        box-shadow: none;
        border: 0px;
    }

    .c-1953uyt {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71;
        display: flex;
        margin: 0px;
    }

    .c-1o86iao {
        display: inline-flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        height: 20px;
        width: 20px;
    }

    .c-1o86iao svg {
        height: 100%;
        width: 100%;
    }

    .c-1w0k317 {
        margin-left: 10px;
    }

    .c-1jbawm2 {
        margin: 16px 0px;
    }

    .c-18axi1k {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin: 12px 0px;
    }

    .c-6xf37g {
        font-size: 14px;
        line-height: 2;
        color: rgb(34, 34, 34);
    }

    .c-tvy9fi {
        font-size: 14px;
        font-weight: 600;
        line-height: 2;
        color: rgb(34, 34, 34);
    }

    .c-bjdcis {
        border: 1px solid rgb(240, 240, 240);
        margin: 24px 0px;
    }

    .c-18axi1k {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin: 12px 0px;
    }

    .c-dgqod7 {
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 1.56;
        width: 70%;
    }

    .c-m8gzcb {
        font-size: 12px;
        font-weight: 600;
        line-height: 1.67;
        opacity: 0.54;
    }

    .c-11tk0uk {
        color: rgb(34, 34, 34);
        font-size: 22px;
        font-weight: bold;
        line-height: 1.33;
    }
</style>

<div class="c-b8pzrm">
    <div class="oyo-row oyo-row--no-spacing headerSticky">
        <div class="oyo-cell headerSticky__leftHeader">
            <a class="c-nn640c headerSticky__logoWrapper" href="/">
                <svg class="headerSticky__logo">
                    <use xlink:href="#logo"></use>
                </svg>
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
                            <span>Yay! you just saved ₹948 on this booking!</span>
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
                                            <input class="textInput__input" id="name" required="" type="search"
                                                placeholder="Enter first and last name" label="[object Object]"
                                                maxlength="50">
                                            <div class="textInput__inputLabelHelper"></div>
                                        </div>
                                    </div>
                                    <div class="c-qln3k6">
                                        <div class="textInput__container">
                                            <div class="textInput__inputLabel" htmlfor="email">
                                                <span>Email Address</span>
                                            </div>
                                            <input class="textInput__input" id="email" required="" type="search"
                                                label="[object Object]" placeholder="name@abc.com" maxlength="75"
                                                notshowflag="true">
                                            <div class="textInput__inputLabelHelper"></div>
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
                                                notshowflag="true" ismargin="true" id="36" required=""
                                                type="tel" minlength="8" pattern="[0-9]*" autocomplete="off">
                                            <label class="textTelInput__inputLabel" for="36"></label>
                                            <span tabindex="-1"
                                                class="c-1wjqvmt textTelInput__inputCountryCode textTelInput__inputCountryCode--noLabel c-1o67u6n">
                                                <span>+91</span>
                                                <span class="c-1in37i9 textTelInput__inputCountryCode--svg ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="chevron"
                                                        viewBox="0 0 8 14">
                                                        <path
                                                            d="M.68-.04c.173 0 .346.066.48.2L8 7l-6.84 6.84a.677.677 0 01-.96 0 .677.677 0 010-.96L6.08 7 .2 1.12a.675.675 0 010-.96c.13-.134.305-.2.48-.2z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="textTelInput__inputCountryCodeBorder"></div>
                                            </span>
                                            <div class="verifiedCheck">
                                                <span class="checkIcon">
                                                    <span class="iconClass">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <g fill="#1ab64f">
                                                                    <path
                                                                        d="M28.912 66.046a4 4 0 0 1 5.657 0l21.213 21.213-2.828 2.829a4 4 0 0 1-5.657 0L28.912 71.703a4 4 0 0 1 0-5.657z">
                                                                    </path>
                                                                    <path
                                                                        d="M55.782 87.26l-5.656-5.658L90.43 41.297a4 4 0 1 1 5.657 5.657L55.782 87.26z">
                                                                    </path>
                                                                </g>
                                                                <path stroke="#1AB64F" stroke-width="6"
                                                                    d="M62 121c32.585 0 59-26.415 59-59S94.585 3 62 3c-17.503 0-33.225 7.621-44.03 19.726C8.66 33.157 3 46.918 3 62c0 32.585 26.415 59 59 59z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <span>
                                                    <span>Verified</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-1j05m3z">
                                    <button type="button" class="c-1njsfze">
                                        <span>Continue</span>
                                    </button>
                                </div>
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
                    <div class="c-1qpcdvy">
                        <div>
                            <div class="c-gg4vpm">
                                <div class="c-5hicrt">
                                    <div class="c-6a3y35">OYO Flagship Malabar Tourist Home Koduvally</div>
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
                                            <meta itemprop="reviewCount" content="8">
                                            <meta itemprop="bestRating" content="5">
                                            <span class="hotelRating__ratingSummary  hotelRating__rating--clickable">(8
                                                Ratings)</span>
                                            <span class="hotelRating__dot">·</span>
                                            <span class="hotelRating__ratingSummary">Good</span>
                                        </div>
                                    </div>
                                    <div class="c-sh83s0">1 Night</div>
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
                                                    <span class="datePickerDesktop__checkInOutText">Thu, 31 Aug</span>
                                                    <span
                                                        class="datePickerDesktop__arrowWrapper datePickerDesktop__arrowWrapper--hotel">–</span>
                                                    <span class="datePickerDesktop__checkInOutText">Fri, 1 Sep</span>
                                                </div>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="c-14mt3w6 c-107tt68">
                                            <div
                                                class="oyo-row oyo-row--no-spacing guestRoomPicker guestRoomPicker--hotel ">
                                                <div
                                                    class="oyo-cell oyo-cell--12-col oyo-cell--8-col-tablet oyo-cell--4-col-phone d-text16 is-fontBold u-textEllipsis guestRoomPicker__guestRoomCount">
                                                    1 Room, 2 Guests</div>
                                                <span></span>
                                            </div>
                                            <div class="c-18fyjan"> &nbsp; </div>
                                        </div>
                                    </div>
                                    <div class="c-abzw2p"></div>
                                </div>
                                <div class="c-2pbfgc">
                                    <div class="c-1953uyt">
                                        <span class="c-1o86iao" isrtl="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20">
                                                <path fill="black" fill-rule="nonzero"
                                                    d="M4.756.968v.008c-.002 0 0-.002 0-.008zm0 18.55h-.951V.968A.96.96 0 0 1 4.755 0H15.22c.525 0 .95.444.95.968v18.544h-.951V.968c0 .008-10.464.008-10.464.008v18.542zm0-18.55l-.001.008.001-.008zm0 18.056H15.22V.968c0 .008-10.464.008-10.464.008v18.048zm-.951 0V.968A.96.96 0 0 1 4.755 0H15.22c.525 0 .95.444.95.968v18.056h3.353c.263 0 .476.219.476.488 0 .27-.213.488-.476.488H.476A.482.482 0 0 1 0 19.512c0-.27.213-.488.476-.488h3.329zm9.233-8.167s-.878-1.303-.878-1.8c0-.498.393-.9.878-.9a.89.89 0 0 1 .878.9c0 .497-.878 1.8-.878 1.8z"
                                                    opacity=".3"></path>
                                            </svg>
                                        </span>
                                        <div>
                                            <span class="c-1w0k317">Classic </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-1jbawm2">
                                    <div class="c-18axi1k">
                                        <div class="c-6xf37g">Room price for 1 Night X 2 Guests</div>
                                        <div class="c-tvy9fi">₹3499</div>
                                    </div>
                                    <div class="c-18axi1k">
                                        <div class="c-6xf37g">Instant discount</div>
                                        <div class="c-tvy9fi">-₹2025</div>
                                    </div>
                                    <div class="c-18axi1k">
                                        <div class="c-6xf37g">56% Coupon Discount</div>
                                        <div class="c-tvy9fi">-₹833</div>
                                    </div>
                                    <div class="c-18axi1k">
                                        <div class="c-6xf37g">OYO Money Applied</div>
                                        <div class="c-tvy9fi">-₹115</div>
                                    </div>
                                    <div class="c-bjdcis"></div>
                                    <div class="c-18axi1k">
                                        <div class="c-dgqod7">
                                            <span>Payable Amount</span>
                                            <div class="c-m8gzcb">inclusive of all taxes</div>
                                        </div>
                                        <div class="c-11tk0uk">₹526</div>
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
{{-- @include('footer') --}}
