<div>
    <!DOCTYPE html>
<!--
Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Deepor I CRM Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- vector map CSS -->
    <link href="{{url("vendors/vectormap/jquery-jvectormap-2.0.3.css")}}vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{url("vendors/jquery-toggles/css/toggles.css")}}" rel="stylesheet" type="text/css">
    <link href="{{url("vendors/jquery-toggles/css/themes/toggles-light.css")}}" rel="stylesheet" type="text/css">

	<!-- Toastr CSS -->
    <link href="{{url("vendors/jquery-toast-plugin/dist/jquery.toast.min.css")}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{url("dist/css/style.css")}}"rel="stylesheet" type="text/css">
</head>

<body>


	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <x-layout.header/>

        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <x-layout.sidebar/>

        <!-- /Vertical Nav -->

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head mb-15">
                       <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>

                    <h6 class="mb-5">Layout</h6>
                    <p class="font-14">Choose your preferred layout</p>
                    <div class="layout-img-wrap">
                        <div class="row">
                            <a href="javascript:void(0);" class="col-6 mb-30 active">
                                <img class="rounded opacity-70" src="dist/img/layout1.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard2.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="dist/img/layout2.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard3.html" class="col-6">
                                <img class="rounded opacity-70" src="dist/img/layout3.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
            <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            {{$slot}}
            <!-- /Container -->

            <!-- Footer -->
            <x-layout.footer/>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{url("vendors/jquery/dist/jquery.min.js")}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url("vendors/popper.js/dist/umd/popper.min.js")}}"></script>
    <script src="{{url("vendors/bootstrap/dist/js/bootstrap.min.js")}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{url("dist/js/jquery.slimscroll.js")}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{url("dist/js/dropdown-bootstrap-extended.js")}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{url("dist/js/feather.min.js")}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{url("vendors/jquery-toggles/toggles.min.js")}}"></script>
    <script src="{{url("dist/js/toggle-data.js")}}"></script>

	<!-- Counter Animation JavaScript -->
	<script src="{{url("vendors/waypoints/lib/jquery.waypoints.min.js")}}"></script>
	<script src="{{url("vendors/jquery.counterup/jquery.counterup.min.js")}}"></script>

	<!-- Sparkline JavaScript -->
    <script src="{{url("vendors/jquery.sparkline/dist/jquery.sparkline.min.js")}}"></script>

	<!-- Vector Maps JavaScript -->
    <script src="{{url("vendors/vectormap/jquery-jvectormap-2.0.3.min.js")}}"></script>
    <script src="{{url("vendors/vectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
	<script src="{{url("dist/js/vectormap-data.js")}}"></script>

	<!-- Owl JavaScript -->
    <script src="{{url("vendors/owl.carousel/dist/owl.carousel.min.js")}}"></script>

	<!-- Toastr JS -->
    <script src="{{url("vendors/jquery-toast-plugin/dist/jquery.toast.min.js")}}"></script>

	<!-- Apex JavaScript -->
    <script src="{{url("vendors/apexcharts/dist/apexcharts.min.js")}}"></script>
	<script src="{{url("dist/js/irregular-data-series.js")}}"></script>

    <!-- Init JavaScript -->
    <script src="{{url("dist/js/init.js")}}"></script>
	<script src="{{url("dist/js/dashboard-data.js")}}"></script>

</body>

</html>

</div>
