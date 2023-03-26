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
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-menu"></i></a>
            <a class="navbar-brand" href="dashboard1.html">
                <img class="brand-img d-inline-block mr-5" src="dist/img/logo.png" alt="brand" />Deepor
            </a>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item">
                    <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-search"></i></a>
                </li>
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-settings"></i></a>
                </li>
                <li class="nav-item dropdown dropdown-notifications">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ion ion-ios-notifications"></i><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                        <div class="notifications-nicescroll-bar">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ url('public/dist/img/avatar1.jpg')}}" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                            <div class="notifications-time">12m</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                            <div class="notifications-time">1h</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Deepor head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                            <div class="notifications-time">2d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                            <div class="notifications-time">1w</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Last 2 days left for the project</div>
                                            <div class="notifications-time">15d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="{{ url ('dist/img/avatar10.jpg')}}" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                        <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><i class="ion ion-ios-search"></i></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><i class="ion ion-ios-close"></i></a>
            </div>
        </form>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                            <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="dashboard1.html">CRM</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard2.html">Project</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard3.html">Statistics</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-with-badge" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                                <i class="ion ion-ios-apps"></i>
                                <span class="nav-link-text">Application</span>
                                <span class="badge badge-warning badge-pill">4</span>
                            </a>
                            <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chats.html">Chat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">Email</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="file-manager.html">File Manager</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">
                                <i class="ion ion-ios-person-add"></i>
                                <span class="nav-link-text">Authentication</span>
                            </a>
                            <ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signup_drp">
													Sign Up
												</a>
                                            <ul id="signup_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="signup.html">Cover</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="signup-simple.html">Simple</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signin_drp">
													Login
												</a>
                                            <ul id="signin_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="login.html">Cover</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="login-simple.html">Simple</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#recover_drp">
													Recover Password
												</a>
                                            <ul id="recover_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="forgot-password.html">Forgot Password</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="reset-password.html">Reset Password</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="404.html">Error 404</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="maintenance.html">Maintenance</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
                                <i class="ion ion-ios-copy"></i>
								<span class="nav-link-text">Pages</span>
                            </a>
                            <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile.html">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice.html">Invoice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gallery.html">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="activity.html">Activity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="faq.html">Faq</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr class="nav-separator">
                    <div class="nav-header">
                        <span>User Interface</span>
                        <span>UI</span>
                    </div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
                                <i class="ion ion-ios-wallet"></i>
                                <span class="nav-link-text">Components</span>
                            </a>
                            <ul id="Components_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="alerts.html">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="avatar.html">Avatar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="badge.html">Badge</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="buttons.html">Buttons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cards.html">Cards</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="carousel.html">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="collapse.html">Collapse</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dropdowns.html">Dropdown</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="list-group.html">List Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modal.html">Modal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="nav.html">Nav</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="navbar.html">Navbar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="nestable.html">Nestable</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pagination.html">Pagination</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="popovers.html">Popovers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="progress.html">Progress</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tooltip.html">Tooltip</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_drp">
                                <i class="ion ion-ios-filing"></i>
                                <span class="nav-link-text">Content</span>
                            </a>
                            <ul id="content_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="typography.html">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="images.html">Images</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="media-object.html">Media Object</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
                                <i class="ion ion-ios-construct"></i>
                                <span class="nav-link-text">Utilities</span>
                            </a>
                            <ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="background.html">Background</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="border.html">Border</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="colors.html">Colors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="embeds.html">Embeds</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons.html">Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shadow.html">Shadow</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sizing.html">Sizing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="spacing.html">Spacing</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">Forms</span>
                            </a>
                            <ul id="forms_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-element.html">Form Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="input-groups.html">Input Groups</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-layout.html">Form Layout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-mask.html">Form Mask</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-validation.html">Form Validation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-wizard.html">Form Wizard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="file-upload.html">File Upload</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="editor.html">Editor</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#tables_drp">
                                <i class="ion ion-ios-today"></i>
                                <span class="nav-link-text">Tables</span>
                            </a>
                            <ul id="tables_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="basic-table.html">Basic Table</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="data-table.html">Data Table</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="responsive-table.html">Responsive Table</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="editable-table.html">Editable Table</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#charts_drp">
                                <i class="ion ion-ios-stats"></i>
                                <span class="nav-link-text">Charts</span>
                            </a>
                            <ul id="charts_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="line-charts.html">Line Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="area-charts.html">Area Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="bar-charts.html">Bar Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pie-charts.html">Pie Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="realtime-charts.html">Realtime Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="mini-charts.html">Mini Chart</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_drp">
                                <i class="ion ion-ios-map"></i>
                                <span class="nav-link-text">Maps</span>
                            </a>
                            <ul id="maps_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="google-map.html">Google Map</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="vector-map.html">Vector Map</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr class="nav-separator">
                    <div class="nav-header">
                        <span>Getting Started</span>
                        <span>GS</span>
                    </div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="documentation.html">
                                <i class="ion ion-ios-book"></i>
                                <span class="nav-link-text">Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
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
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Users</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500">+10%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5">36.1K</span>
											<small class="d-block">172,458 Target Users</small>
										</div>
									</div>
								</div>

							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Campaign Leads</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500">+12.5%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5"><span class="counter-anim">168,856</span></span>
											<small class="d-block">472,458 Targeted</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">New Contacts</span>
											</div>
											<div>
												<span class="text-warning font-14 font-weight-500">-2.8%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5">73</span>
											<small class="d-block">100 Targeted</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Win/Loss Ratio</span>
											</div>
											<div>
												<span class="text-danger font-14 font-weight-500">-75%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5">48:65</span>
											<small class="d-block">42:32 Targeted</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="hk-row">
							<div class="col-lg-7">
								<div class="card card-refresh">
									<div class="refresh-container">
										<div class="loader-pendulums"></div>
									</div>
									<div class="card-header card-header-action">
										<div>
											<h6 class="mb-10">Monthly Adwords Views</h6>
											<p class="font-14 w-80">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
										</div>
										<div class="d-flex align-items-center card-action-wrap">
											<a href="#" class="inline-block refresh mr-15">
												<i class="ion ion-md-radio-button-off"></i>
											</a>
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-md-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div id="area_adwords"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="card">
									<div class="card-header card-header-action">
										<div>
											<h6 class="mb-10">Stock Price Movement</h6>
											<p class="font-14 w-80">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</div>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div id="columnchart" style="height:250px;"></div>
										<div class="hk-legend-wrap mt-20">
											<div class="hk-legend">
												<span class="d-10 bg-sky-light-3 rounded-circle d-inline-block"></span><span>18-24</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-sky-light-4 rounded-circle d-inline-block"></span><span>25-34</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-sky-light-5 rounded-circle d-inline-block"></span><span>35-44</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-sky-light-2 rounded-circle d-inline-block"></span><span>45-54</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-light-20 rounded-circle d-inline-block"></span><span>55-64</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="hk-row">
							<div class="col-lg-7">
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Country Stats<small class="text-muted pl-10">sub heading</small></h6>
										<div class="d-flex align-items-center card-action-wrap">
											<a href="#" class="inline-block refresh mr-15">
												<i class="ion ion-md-arrow-down"></i>
											</a>
											<a href="#" class="inline-block full-screen">
												<i class="ion ion-md-expand"></i>
											</a>
										</div>
									</div>
									<div class="card-body pa-0">
										<div class="pa-20">
											<div id="world_map_marker_1" style="height: 390px"></div>
										</div>
										<div class="table-wrap">
											<div class="table-responsive">
												<table class="table table-sm table-hover mb-0">
													<thead>
														<tr>
															<th class="w-25">Country</th>
															<th>Sessions</th>
															<th>Goals</th>
															<th>Goals Rate</th>
															<th>Bounce Rate</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Canada</td>
															<td>55,555</td>
															<td>210</td>
															<td>2.46%</td>
															<td>0.26%</td>
														</tr>
														<tr>
															<td>India</td>
															<td>24,152</td>
															<td>135</td>
															<td>0.58%</td>
															<td>0.43%</td>
														</tr>
														<tr>
															<td>UK</td>
															<td>15,640</td>
															<td>324</td>
															<td>5.15%</td>
															<td>2.47%</td>
														</tr>
														<tr>
															<td>Botswana</td>
															<td>12,148</td>
															<td>854</td>
															<td>4.19%</td>
															<td>0.1%</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="card overflow-hide border-0">
									<div class="card-body pa-0">
										<div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
											<div class="fadeOut item img-background overlay-wrap bg-warning">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p>Very easy to use. Thanks to design, we've just launched our 5th website! Thank you for making it painless, pleasant and most of all hassle free! Just what I was looking for.</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-yellow rounded-circle"><span class="initial-wrap"><span>ZC</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">Zuck Chan</span>
																<span class="d-block font-12">Design Lead, Hencework</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="fadeOut item img-background overlay-wrap bg-warning">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p>Nice work on your design. Design is worth much more than I paid. We've used design for the last five years. I just can't get enough of design.</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-green rounded-circle"><span class="initial-wrap"><span>NT</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">Normand T.</span>
																<span class="d-block font-12">Sales Executive, Media</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header card-header-action">
										<h6>Recent Activity</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="user-activity user-activity-sm">
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Laura Thompson</span><span class="pl-5">joined josh groben team.</span></span>
														<span class="d-block font-13">3 hours ago</span>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Meayme Fletcher</span><span class="pl-5">liked photos</span></span>
														<span class="d-block font-13 mb-10">6 hours ago</span>
													</div>
													<div class="d-flex">
														<a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/slide1.jpg" alt="Card image cap"></a>
														<a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/slide2.jpg" alt="Card image cap"></a>
														<a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/slide3.jpg" alt="Card image cap"></a>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="dist/img/avatar4.jpg" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Billy Flowers</span><span class="pl-5">Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text.</span></span>
														<span class="d-block font-13">32 days ago</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="hk-row">
							<div class="col-lg-12">
									<div class="card">
									<div class="card-body pa-0">
										<div class="table-wrap">
											<div class="table-responsive">
												<table class="table table-hover mb-0">
													<thead>
														<tr>
															<th>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck4">
																	<label class="custom-control-label" for="customCheck4">Lead Title</label>
																</div>
															</th>
															<th>Sales</th>
															<th>Company</th>
															<th>Date Created</th>
															<th>Lead Status</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck41" checked="">
																	<label class="custom-control-label" for="customCheck41"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
																</div>
															</td>
															<td>$2000</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-primary rounded-circle"><span class="initial-wrap"><span>A</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">American Express</span>
																	</div>
																</div>
															</td>
															<td>
																22/10/2018
															</td>
															<td><span class="badge badge-soft-primary">On track</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck42">
																	<label class="custom-control-label" for="customCheck42"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
																</div>
															</td>
															<td>$1600</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-danger rounded-circle"><span class="initial-wrap"><span>M</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Exxon Mobil</span>
																	</div>
																</div>
															</td>
															<td>
																15/09/2018
															</td>
															<td><span class="badge badge-soft-primary">On track</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck43">
																	<label class="custom-control-label" for="customCheck43"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
																</div>
															</td>
															<td>$1265</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-teal rounded-circle"><span class="initial-wrap"><span>B</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Big Blackship</span>
																	</div>
																</div>
															</td>
															<td>
																30/08/2018
															</td>
															<td><span class="badge badge-soft-danger">Behind</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck44">
																	<label class="custom-control-label" for="customCheck44"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
																</div>
															</td>
															<td>$4562</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-indigo rounded-circle"><span class="initial-wrap"><span>F</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Folkswagan</span>
																	</div>
																</div>
															</td>
															<td>
																14/03/2018
															</td>
															<td><span class="badge badge-soft-purple">Negotiation</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck45">
																	<label class="custom-control-label" for="customCheck45"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
																</div>
															</td>
															<td>$5012</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-purple rounded-circle"><span class="initial-wrap"><span>N</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Novotel</span>
																	</div>
																</div>
															</td>
															<td>
																21/02/2018
															</td>
															<td><span class="badge badge-soft-orange">Offer Made</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck46">
																	<label class="custom-control-label" for="customCheck46"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
																</div>
															</td>
															<td>$1245</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-pink rounded-circle"><span class="initial-wrap"><span>D</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Displaypic</span>
																	</div>
																</div>
															</td>
															<td>
																3/02/2018
															</td>
															<td><span class="badge badge-soft-orange">Offer Made</span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="#" class="text-dark" >Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
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
