@include('header')
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>HomesLoc</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="{{ asset('assets/css/mainstyle.css') }}">

</head>
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title">Contact</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="/">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="contact-page">
        <div class="" style="padding: 50px;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-left">
                        <div class="ot-heading">
                            <span>// contact details</span>
                            <h2 class="main-heading">Contact us</h2>
                        </div>
                        <div class="space-5"></div>
                        <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on
                            business days. We will be happy to answer your questions.</p>
                        <div class="contact-info box-style1">
                            <i class="flaticon-world-globe"></i>
                            <div class="info-text">
                                <h6>Our Address:</h6>
                                <p> SHIGATHA TOURISM PRIVATE LIMITED COMPANY</p>
                                <p> NIRAMARUTHUR PO</p>
                                <p> TIRUR.676109</p>
                            </div>
                        </div>
                        <div class="contact-info box-style1">
                            <i class="flaticon-envelope"></i>
                            <div class="info-text">
                                <h6>Our Mailbox:</h6>
                                <p>info@homesloc.com</p>
                            </div>
                        </div>
                        <div class="contact-info box-style1">
                            <i class="flaticon-phone-1"></i>
                            <div class="info-text">
                                <h6>Our Phone:</h6>
                                <p>+91 8590391009</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form id="ajax-form" name="ajax-form" action="{{ url('/mail') }}" method="get" class="wpcf7">
                        <div class="main-form">
                            <h2>Ready to Get Started?</h2>
                            <p class="font14">Your email address will not be published. Required fields are marked *</p>
                            <p>
                                <label for="name"> <span class="error" id="err-name">please enter
                                        name</span></label>
                                <input type="text" name="name" value="" size="40" class=""
                                    aria-required="true" aria-invalid="false" placeholder="Your Name *" required="">
                            </p>
                            <p>
                                <label for="email">
                                    <span class="error" id="err-email">please enter e-mail</span>
                                    <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                </label>
                                <input type="email" name="email" id="email" value="" size="40"
                                    class="" aria-required="true" aria-invalid="false" placeholder="Your Email *"
                                    required="">
                            </p>
                            <p>
                                <label for="message"></label>
                                <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false"
                                    placeholder="Message..." required=""></textarea>
                            </p>
                            <p><button type="submit" id="send" class="octf-btn octf-btn-light">Send
                                    Message</button></p>
                            <div class="clear"></div>


                            @if (session('msg'))
                                <div class="alert alert-success alr">
                                    {{ session('msg') }}
                                </div>
                                <script>
                                    window.scrollTo(10, document.body.scrollHeight);
                                </script>
                            @endif
                            <div class="error" id="err-form">There was a problem validating the form please check!
                            </div>
                            <div class="error" id="err-timedout">The connection to the server timed out!</div>
                            <div class="error" id="err-state"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                    <div id="ajaxsuccess">Successfully sent!!</div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="no-padding">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.496918106015!2d75.90579949394973!3d10.92578624909459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7b397159b328b%3A0xda5b9b9393dbdcc3!2sMangad%20tirur!5e0!3m2!1sen!2sin!4v1695790852628!5m2!1sen!2sin"
                width="1500" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>



</div><!-- #page -->
</body>

</html>
@include('footer')
