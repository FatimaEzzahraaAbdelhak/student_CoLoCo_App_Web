<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name')  }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/slicknav.css') }}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">

    @yield("leaflet-css")
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
@include('front.layout.shared.header')
<!-- header-end -->

@yield('content')

@include('front.layout.shared.footer')

<!-- JS here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="{{ asset('assets/front/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/front/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/scrollIt.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/plugins.js') }}"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
   

    
    <!--contact js-->
    <script src="{{ asset('assets/front/js/contact.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/mail-script.js') }}"></script>


    <script src="{{ asset('assets/front/js/main.js') }}"></script>
    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function (parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') :200
            ],

            slide: function (event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html( ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html( ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);

                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>
</body>

</html>