<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Designs Ninja">
    <meta name="description"
        content="Professional and Great template with 10 unique home page designs for corporate, classic, creative, parallax, studio, crypto Currency, business and minimal concept">
    <meta name="keywords"
        content="animation, creative, digital, flex, marketing, minimal, one page, parallax, portfolio, responsive, revolution slider, startup, studio, video background">
    <title>KETAPANG TRAVEL GUIDE</title>
    <link rel="shortcut icon" href="{{ url('public') }}/assets/images/favicon.ico">

    <!-- Core Style Sheets -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/master.css">
    <!-- Responsive Style Sheets -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/responsive.css">
    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/revolution/css/navigation.css">

</head>

<body>

    <!--== Loader Start ==-->
    <div id="loader-overlay">
        <div class="loader">
            <div class="spinner-double-dot-in"></div>
        </div>
    </div>
    <!--== Loader End ==-->

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <!--== Header Start ==-->
        <x-layout.web.header />
        <!--== Header End ==-->
        {{$slot}}
        <!--== Footer Start ==-->
        <x-layout.web.footer />
        <!--== Footer End ==-->

        <!--== Go to Top  ==-->
        <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
        <!--== Go to Top End ==-->

    </div>
    <!--== Wrapper End ==-->

    <!--== Javascript Plugins ==-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1eO-IAC9PhPE5APzZDSs8W40ewuxnsu8"></script>
    <script src="{{ url('public') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets/js/smoothscroll.js"></script>
    <script src="{{ url('public') }}/assets/js/plugins.js"></script>
    <script src="{{ url('public') }}/assets/js/master.js"></script>

    <!-- Revolution js Files -->
    <script src="{{ url('public') }}/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ url('public') }}/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ url('public') }}/revolution/js/revolution.extension.actions.min.js"></script>
    <script src="{{ url('public') }}/revolution/js/revolution.extension.carousel.min.js"></script>
    <script src="{{ url('public') }}/revolution/js/revolution.extension.kenburn.min.js"></script>
    <script src="{{ url('public') }}/revolution/js/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ url('public') }}/revolution/js/revolution.extension.migration.min.js"></script>
    <script src="{{ url('public') }}/revolution/js/revolution.extension.navigation.min.js"></script>
    <script src="{{ url('public') }}/revolution/js/revolution.extension.parallax.min.js"></script>
    <script src="{{ url('public') }}/revolution/js/revolution.extension.slideanims.min.js"></script>
    <script src="{{ url('public') }}/revolution/js/revolution.extension.video.min.js"></script>
    <!--== Javascript Plugins End ==-->

</body>

</html>
