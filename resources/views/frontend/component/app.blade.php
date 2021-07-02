<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Makplus - Marketplace HTML5 Template</title>
    <meta name="description" content="Latu Surya Abadi | Oli dan Ban Ngawi  ">
    <meta name="author" content="https://dmptdev.com">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Latu Surya Abadi | Oli dan Ban Ngawi  ">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Latu Surya Abadi | Oli dan Ban Ngawi  ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://latusurya.com">
    <meta property="og:image" content="{{ asset('frontend') }}/img/logo/logo.png"
        alt="{{ config('app.name', 'Latu Surya Abadi') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/default.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
    @yield('css')

    <script>
        promoBox({
            imagePath: 'https://raw.githubusercontent.com/rolandtoth/promoBox/master/bird.jpg',
            link: 'https://github.com/rolandtoth/promoBox',
            target: '_blank',
            disableOverlay: false,
            disableOverlayClose: false,
            disableStyles: false,
            disableCloseButton: false,
            disableKeyClose: false,
            closeButtonText: '',
            //            showOnHash: '#promo',
            //            startDate: 'April 12, 2014 02:30:00',
            //            endDate: 'May 20, 2014 19:27:00',
            //            frequency: 0.33,
            deleteCookieOnUrl: '#clear',
            fadeInDuration: 0.5,
            fadeOutDuration: 0.2,
            loadDelay: 0.1,
            //            interstitialSkipText: 'Skip this advertisement',
            //            interstitialText: 'or wait %s secs',
            autoCloseSeconds: 30
        });

        var demoImage = 'https://raw.githubusercontent.com/rolandtoth/promoBox/master/breeze.jpg';

        document.getElementById('startPromo').onclick = function() {
            promoBox({
                imagePath: demoImage,
                closeButtonText: 'close',
                fadeInDuration: 0.33,
                fadeOutDuration: 0.2
            });
            return false;
        };

        document.getElementById('startActionButtons').onclick = function() {
            promoBox({
                imagePath: demoImage,
                fadeInDuration: 0.33,
                fadeOutDuration: 0.2,
                actionButtons: [
                    ['Visit GitHub', 'https://github.com/rolandtoth/promoBox', '_blank', 'external github'],
                    ['Jump to anchor', '#anchor', '', 'jumpLink'],
                    ['Cancel']
                ]
            });
            return false;
        };

        document.getElementById('startDelayed').onclick = function() {
            promoBox({
                imagePath: demoImage,
                fadeInDuration: 0.33,
                fadeOutDuration: 0.2,
                loadDelay: 2
            });
            return false;
        };

        document.getElementById('startInterstitial').onclick = function() {
            promoBox({
                imagePath: demoImage,
                fadeInDuration: 0.33,
                fadeOutDuration: 0.2,
                interstitialDuration: 30,
                interstitialSkipText: 'Close interstitial',
                interstitialText: 'or wait %s seconds to continue'
            });
            return false;
        };

        // callback functions

        var promoBoxStart = function() {
            if (typeof console !== "undefined") {
                console.log('promoBox has started...');
            }
        };

        var promoBoxClick = function() {
            if (typeof console !== "undefined") {
                console.log('promoBox image was clicked');
            }
        };

        var promoBoxClose = function() {
            if (typeof console !== "undefined") {
                console.log('promoBox terminated');
            }
        };
    </script>
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <div class="popup-wrap">
        <div class="popup">
            <div class="popup-timer"><span class="seconds"></span> second(s) left</div>
            <div class="btn-close">x</div>
        </div>
    </div>
    <!-- preloader-end -->

    @include('frontend.component.header')
    <!-- main-area -->
    <main>
        <!-- slider-area -->
        @yield('slider')
        <!-- slider-area-end -->
        <!-- features-items -->
        @yield('content')
        <!-- newsletter-area-end -->
    </main>
    <!-- main-area-end -->

    @include('frontend.component.footer')

    <!-- JS here -->
    <script src="{{ asset('frontend') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.meanmenu.min.js"></script>
    <script src="{{ asset('frontend') }}/js/ajax-form.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/js/aos.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            // Set close and open variable
            var btn_close = document.querySelector('.dialog__button--close');
            var btn_open = document.querySelector('.dialog__button--open');

            if (typeof(btn_close) != 'undefined' && btn_close != null) {
                // Click event to close dialog
                btn_close.addEventListener('click', function(event) {
                    // btn.parentNode.parentNode.classList.add('dialog--close');
                    btn_close.parentNode.parentNode.setAttribute('aria-hidden', 'true');
                    if (typeof(btn_open) != 'undefined' && btn_open != null) {
                        btn_open.classList.add('dialog__button--toggle');
                    }
                });
            }

            if (typeof(btn_open) != 'undefined' && btn_open != null) {
                // Click event to open dialog
                btn_open.addEventListener('click', function(event) {
                    // btn.parentNode.parentNode.classList.add('dialog--close');
                    btn_close.parentNode.parentNode.setAttribute('aria-hidden', 'false');
                    if (typeof(btn_open) != 'undefined' && btn_open != null) {
                        btn_open.classList.remove('dialog__button--toggle');
                    }
                });
            }
        });
    </script>
</body>

</html>
