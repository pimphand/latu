<!DOCTYPE html>
<html>

<head>
    <title>CarService - Mechanic Auto Shop Template</title>
    <!--meta-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="keywords" content="Mechanic, Car, Auto" />
    <meta name="description" content="Responsive Mechanic Auto Shop Template" />
    <!--slider revolution-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/rs-plugin/css/settings.css" media="screen" />
    <!--style-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700,800&amp;subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style/reset.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style/superfish.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style/jquery.qtip.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style/animations.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style/odometer-theme-default.css">
    <!--fonts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/fonts/streamline-small/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/fonts/template/styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/fonts/social/styles.css">
    <link rel="shortcut icon" href="{{ asset('frontend') }}/images/favicon.ico">
    {{-- Faont Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="site-container">
        @include('frontend.component.header')
        <!-- Slider Revolution -->
        @yield('content')

        @include('frontend.component.footer')
    </div>
    <a href="#top" class="scroll-top animated-element template-arrow-up" title="Scroll to top"></a>
    <div class="background-overlay"></div>
    <!--js-->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-migrate-1.4.1.min.js"></script>
    <!--slider revolution-->
    <script type="text/javascript" src="{{ asset('frontend') }}/rs-plugin/js/jquery.themepunch.tools.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('frontend') }}/rs-plugin/js/jquery.themepunch.revolution.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.ba-bbq.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-ui-1.11.4.custom.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.transit.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.hint.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.costCalculator.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.parallax.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.qtip.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.blockUI.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/main.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/odometer.min.js"></script>

    <link rel="stylesheet" href="https://cdn.rawgit.com/stevenmonson/googleReviews/master/google-places.css">
    <script
        src="https://cdn.jsdelivr.net/gh/stevenmonson/googleReviews@6e8f0d794393ec657dab69eb1421f3a60add23ef/google-places.js">
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDeivU57j-macv2fXXgbhKGM6cqMLmnAFI&signed_in=true&libraries=places">
    </script>

    <script>
        jQuery(document).ready(function($) {
            $("#google-reviews").googlePlaces({
                placeId: 'ChIJ08VtldDneS4RgDnGbgGYEAk' //Find placeID @: https://developers.google.com/places/place-id
                    ,
                render: ['reviews'],
                min_rating: 4,
                max_rows: 4
            });
        });

    </script>
</body>

</html>
