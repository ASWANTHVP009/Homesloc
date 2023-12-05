<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/main.e953701e38dac851bad4.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/commoncss.a004585cb69526bcfe1d.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/home.4a868bd3e530d1605317.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-aswome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="uploads/images/homeslogoic.png">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>HomesLoc</title>
</head>
<style>
    a:hover {
        text-decoration: none;
    }

    .dropbtn {
        background-color: #fff;
        color: #007bff;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<body>
    <div id="root" style="height:100vh;" style="display: none">
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

                            {{-- mobile Start --}}
                            <div class="mobile-container">
                                <div class="topnav ">
                                    <a href="/" class="active">
                                        <img src="https://homesloc.com/uploads/images/logo.png" alt="Homesloc"
                                            style="width: 175px;">
                                    </a>
                                    <div id="myLinks">
                                        <a href="/about-us">About Us</a>
                                        <a href="/contact">Contact Us</a>
                                        <a href="/join">List Properties</a>

                                        @auth
                                            <a href="/profile">My account</a>
                                            <a href="/order">Orders</a>
                                        @else
                                            <a href="{{ route('login') }}" style="text-decoration: none;">
                                                Login / Signup
                                            </a>
                                        @endauth

                                        @auth
                                            <form method="POST" action="{{ route('logout') }}"
                                                style="font-size: 16px; font-weight: 600;">
                                                @csrf
                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>

                                        @endauth
                                    </div>
                                    <a href="javascript:void(0);" class="icon" onclick="myFunction()"
                                        style="text-indent: unset;">
                                        <i class="fa fa-bars" style="margin-top: 9px;  font-size: 41px;"></i>
                                    </a>
                                </div>
                            </div>

                            <script>
                                function myFunction() {
                                    var x = document.getElementById("myLinks");
                                    if (x.style.display === "block") {
                                        x.style.display = "none";
                                    } else {
                                        x.style.display = "block";
                                    }
                                }
                            </script>

                            {{-- mobile End --}}


                            <div class="oyo-row oyo-row--no-spacing headerSticky">
                                <div class="oyo-cell headerSticky__leftHeader">
                                    <a class="c-nn640c headerSticky__logoWrapper"
                                        href="\">
                                        <img src="uploads/images/logo.png"
                                        alt="Homesloc" class="mob-logo" style="margin-left: 52px;">
                                    </a>
                                </div>
                                <div class="oyo-cell headerSticky__rightHeader">
                                    <div class="headerSticky__menu">
                                        <div class="promoCard hidden-cs" data-cms-id="686940"
                                            data-cms-template="cWeb-Properties">
                                            <div class="promoCard__card promoCard__card--cta">
                                                <div class="promoCard__contentWrapper">
                                                    <div class="promoCard__text d-text14 is-fontBold">
                                                        <span class=""><a href="/about-us"
                                                                style="text-decoration: none; font-weight: 500;">About
                                                                Us</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="promoCard hidden-cs" data-cms-id="686940"
                                            data-cms-template="cWeb-Properties">
                                            <div class="promoCard__card promoCard__card--cta">
                                                <div class="promoCard__contentWrapper">
                                                    <div class="promoCard__text d-text14 is-fontBold">
                                                        <span class=""><a href="/contact"
                                                                style="text-decoration: none;font-weight: 500;">Contact
                                                                Us</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sideMenuAuthButton sideMenuAuthButton--headerSecondary"
                                            data-cms-id="490974" data-cms-template="cWEB-SideMenu">
                                            <div class="sideMenuAuthButton__btnWrap">
                                                <div class="">
                                                    <div class="sideMenuAuthButton__text"><a class="listp"
                                                            href="/join" style="text-decoration: none;">List Your
                                                            Properties</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="promoCard " data-cms-id="686940"
                                            data-cms-template="cWeb-Properties">
                                            <div class="promoCard__card promoCard__card--cta">
                                                <div class="promoCard__contentWrapper">
                                                    <div class="promoCard__text d-text14 is-fontBold">
                                                        <span class="">

                                                            @auth
                                                                <div class="dropdown">
                                                                    <button class="dropbtn">Hi,
                                                                        {{ Auth::user()->name }}</button>
                                                                    <div class="dropdown-content">
                                                                        <a href="/profile">My account</a>
                                                                        <a href="/order">Orders</a>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <a href="{{ route('login') }}"
                                                                    style="text-decoration: none;">
                                                                    Login / Signup
                                                                </a>
                                                            @endauth

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @auth
                                            <div class="promoCard " data-cms-id="686940"
                                                data-cms-template="cWeb-Properties">
                                                <div class="promoCard__card promoCard__card--cta">
                                                    <form method="POST" action="{{ route('logout') }}"
                                                        style="font-size: 16px; font-weight: 500;">
                                                        @csrf
                                                        <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </div>
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </span>
                    </div>
