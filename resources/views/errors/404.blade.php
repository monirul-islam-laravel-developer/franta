<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifa - Online Lotto & Lottery HTML Template</title>
    <!-- site favicon -->
    <link rel="icon" type="image/png" href="{{asset('/')}}fronts/assets/images/favicon.png" sizes="16x16">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/vendor/bootstrap.min.css">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/line-awesome.min.css">
    <!-- custom select css -->
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/vendor/nice-select.css">
    <!-- animate css  -->
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/vendor/animate.min.css">
    <!-- lightcase css -->
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/vendor/lightcase.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/vendor/slick.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/vendor/jquery-ui.min.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/vendor/datepicker.min.css">
    <!-- style main css -->
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/main.css">
    <link rel="stylesheet" href="{{asset('/')}}fronts/assets/css/dark-version.css">
</head>
<body>

<div class="preloader">
    <svg class="mainSVG" viewBox="0 0 800 600" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <path id="puff" d="M4.5,8.3C6,8.4,6.5,7,6.5,7s2,0.7,2.9-0.1C10,6.4,10.3,4.1,9.1,4c2-0.5,1.5-2.4-0.1-2.9c-1.1-0.3-1.8,0-1.8,0
        s-1.5-1.6-3.4-1C2.5,0.5,2.1,2.3,2.1,2.3S0,2.3,0,4.4c0,1.1,1,2.1,2.2,2.1C2.2,7.9,3.5,8.2,4.5,8.3z" fill="#fff"/>
            <circle id="dot"  cx="0" cy="0" r="5" fill="#fff"/>
        </defs>

        <circle id="mainCircle" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400" cy="300" r="130"/>
        <circle id="circlePath" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400" cy="300" r="80"/>

        <g id="mainContainer" >
            <g id="car">
                <path id="carRot" fill="#FFF"  d="M45.6,16.9l0-11.4c0-3-1.5-5.5-4.5-5.5L3.5,0C0.5,0,0,1.5,0,4.5l0,13.4c0,3,0.5,4.5,3.5,4.5l37.6,0
      C44.1,22.4,45.6,19.9,45.6,16.9z M31.9,21.4l-23.3,0l2.2-2.6l14.1,0L31.9,21.4z M34.2,21c-3.8-1-7.3-3.1-7.3-3.1l0-13.4l7.3-3.1
      C34.2,1.4,37.1,11.9,34.2,21z M6.9,1.5c0-0.9,2.3,3.1,2.3,3.1l0,13.4c0,0-0.7,1.5-2.3,3.1C5.8,19.3,5.1,5.8,6.9,1.5z M24.9,3.9
      l-14.1,0L8.6,1.3l23.3,0L24.9,3.9z"/>
            </g>
        </g>
    </svg>
</div>

<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="las la-arrow-up"></i>
    </span>
</div>
<!-- scroll-to-top end -->


<!-- theme-switcher start -->
<div class="theme-switcher">
    <div class="theme-switcher__icon">
        <i class="las la-cog"></i>
    </div>
    <div class="theme-switcher__body">
        <div class="single dark">
            <a href="index.html">Dark Version</a>
        </div>
        <div class="single light active mt-4">
            <a href="light-index.html">Light Version</a>
        </div>
    </div>
</div>
<!-- theme-switcher end -->
<!-- page-wrapper start -->
<div class="page-wrapper">

    <!-- error-section start -->
    <div class="error-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-wrapper">
                        <div class="error-wrapper__inner">
                            <img src="{{asset('/')}}fronts/assets/images/elements/error.png" alt="image">
                        </div>
                        <div class="error-wrapper__content">
                            <h2 class="title">The page you are looking for doesn't exist!</h2>
                            <a href="{{route('home')}}" class="cmn-btn d-inline-flex flex-wrap align-items-center active">GO BACK HOME <i class="las la-long-arrow-alt-right"></i></a>
                        </div>
                    </div><!-- error-wrapper -->
                </div>
            </div>
        </div>
    </div>
    <!-- error-section end -->

</div><!-- page-wrapper end -->
<!-- page-wrapper end -->
<!-- jQuery library -->
<script src="{{asset('/')}}fronts/assets/js/vendor/jquery-3.5.1.min.js"></script>
<!-- bootstrap js -->
<script src="{{asset('/')}}fronts/assets/js/vendor/bootstrap.bundle.min.js"></script>
<!-- custom select js -->
<script src="{{asset('/')}}fronts/assets/js/vendor/jquery.nice-select.min.js"></script>
<!-- lightcase js -->
<script src="{{asset('/')}}fronts/assets/js/vendor/lightcase.js"></script>
<!-- wow js -->
<script src="{{asset('/')}}fronts/assets/js/vendor/wow.min.js"></script>
<!-- slick slider js -->
<script src="{{asset('/')}}fronts/assets/js/vendor/slick.min.js"></script>
<!-- countdown js -->
<script src="{{asset('/')}}fronts/assets/js/vendor/jquery.countdown.js"></script>
<!-- jquery ui js -->
<script src="{{asset('/')}}fronts/assets/js/vendor/jquery-ui.min.js"></script>
<!-- datepicker js -->
<script src="{{asset('/')}}fronts/assets/js/vendor/datepicker.min.js"></script>
<script src="{{asset('/')}}fronts/assets/js/vendor/datepicker.en.js"></script>
<!-- preloader -->
<script src='{{asset('/')}}fronts/assets/js/vendor/TweenMax.min.js'></script>
<script src='{{asset('/')}}fronts/assets/js/vendor/MorphSVGPlugin.min.js'></script>
<script src="{{asset('/')}}fronts/assets/js/preloader.js"></script>
<!-- contact js -->
<script src="{{asset('/')}}fronts/assets/js/contact.js"></script>
<!-- custom js -->
<script src="{{asset('/')}}fronts/assets/js/app.js"></script>
</body>

</html>
