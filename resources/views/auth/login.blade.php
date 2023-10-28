@include('header')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('assets/css/property.css') }}" rel="stylesheet">
<style>
    #login-app {
        padding: 85px;
        height: auto;
    }

    .flPQcn input {
        border: 1px solid #ebe5e5 !important;
    }

    .LoginLayout {
        height: 36rem;

    }

    body {
        padding: 0;
    }

    #togglePassword {
        float: right;
        margin-top: -26px;
        margin-right: 10px;
        font-size: 12px;
    }
</style>
<div id="login-app">
    <div class="LoginLayout">
        <div class="LoginLayout-leftBanner LoginLeftBanner">
            <div overflow="hidden" class="styles__Container-sc-zz2x1k-0 iDMIRC"></div>
            <div
                class="styles__Container-sc-zz2x1k-0 gSJkEV LoginUpsellBanner__LoginUpsellContainer-sc-1xab2hr-3 dVFqFd">
                <div display="flex" height="100%" class="styles__Container-sc-zz2x1k-0 iyMoMC">
                    <div class="styles__Container-sc-zz2x1k-0 cKDynS">
                        <img src="https://media.sproutsocial.com/uploads/UI_Employee-Advocacy-Metrics-Overview-Login-Page.png"
                            alt="Employee advocacy" title="" data-qa-image="Employee advocacy"
                            data-qa-image-src="https://media.sproutsocial.com/uploads/UI_Employee-Advocacy-Metrics-Overview-Login-Page.png"
                            class="styles__ImageContainer-sc-dngsi7-0 gwsYyO Image">
                    </div>
                    <div class="styles__Container-sc-zz2x1k-0 klMRqZ">
                        <div class="styles__Container-sc-zz2x1k-0 bMlgID">
                            <h1>
                                <span color="neutral.0" font-weight="extrabold"
                                    class="styles__Container-sc-99cuku-0 hAGISW LoginUpsellBanner__HeaderText-sc-1xab2hr-0 fjsnWV">World's
                                    leading chain of hotels and homes</span>
                            </h1>
                        </div>
                    </div>
                    <div class="styles__Container-sc-zz2x1k-0 klMRqZ">
                        <div class="styles__Container-sc-zz2x1k-0 hcuLUi">
                            <span color="neutral.0" font-weight="semibold"
                                class="styles__Container-sc-99cuku-0 geZbGf LoginUpsellBanner__BodyText-sc-1xab2hr-1 kJXPIz">Sign
                                up with your details and get exclusive access to discounts and savings on Homesloc
                                stays and with our many travel partners.</span>
                        </div>
                    </div>
                    <div class="styles__Container-sc-zz2x1k-0 klMRqZ">
                        <a href="" target="_blank" rel="noopener noreferrer" data-qa-button=""
                            data-qa-button-isdisabled="false" color="neutral.0"
                            class="styles__Container-sc-17njgx1-0 hMJwac LoginUpsellBanner__DarkModeButton-sc-1xab2hr-2 jffoWx">
                            <span role="img" data-qa-icon="external-link-alt"
                                class="styles__Container-sc-1v500hw-0 jfhzmF Icon">
                                <svg class="Icon-svg" viewBox="0 0 16 16" focusable="false"
                                    data-qa-icon-svg="external-link-alt-svg">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xlink:href="#ssiconsvg-external-link-alt">
                                    </use>
                                </svg>
                            </span>Learn More </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="LoginLayout-content">
            <div class="LoginContent">
                <div class="LoginContent-info">
                    <h2 data-qa-text="Welcome back, good to see you again!" font-weight="semibold"
                        class="styles__Container-sc-99cuku-0 gBkBky">Welcome back, good to see you again!</h2>
                </div>
                <div class="LoginContent-body">
                    <form method="POST" class="LoginForm" action="{{ route('login') }}">
                        @csrf
                        <div class="f1">
                            <div class="InputField">
                                <div class="FormField">
                                    <div class="FormField-label">
                                        <label color="text.headline" font-weight="semibold" data-qa-label="email"
                                            for="email"
                                            class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Email
                                            Address</label>
                                    </div>
                                    <div class="FormField-input">
                                        <div label="First Name" class="styles__Container-sc-4stdun-0 flPQcn">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="InputField">
                                <div class="FormField">
                                    <div class="FormField-label">
                                        <label color="text.headline" font-weight="semibold" data-qa-label="email"
                                            class="styles__Container-sc-99cuku-0 jYEMBA Label__StyledLabel-sc-dh0olx-0 hbqZgN">Password</label>
                                    </div>
                                    <div class="FormField-input">
                                        <div label="Email Address" class="styles__Container-sc-4stdun-0 flPQcn">

                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
                                            <i class="fa fa-eye" id="togglePassword"></i>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4 remr">
                                <div style="font-size: 12px; text-decoration: underline; font-weight: 600;">
                                    <a href="/forgot-password" style="color: #273333;"> Forgot Password ? </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary styles__Container-sc-17njgx1-0 cDBdJO">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="styles__Container-sc-99cuku-0 fYBUKv">Don't have an account?
                            <a data-qa-text="Sign up now" href="{{ route('register') }}" data-qa-link=""
                                data-qa-link-isdisabled="false"
                                class="styles__Container-sc-99cuku-0 kDsXFJ styles__Container-sc-t42egr-0 dxiHzB">
                                Sign up now
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>
