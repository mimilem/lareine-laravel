<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>La Souveraine - Admin Dashboard</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

    <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo-dark.png" class="logo-lg" alt="" height="22">
                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">

                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input" type="search" placeholder="Search" />
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div>

                        <ul class="navbar-right ml-auto list-inline float-right mb-0">

                            <li class="list-inline-item dropdown notification-list d-none d-md-inline-block">
                                <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                                    <i class="fas fa-search noti-icon"></i>
                                </a>
                            </li>

                            <!-- language-->
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/flags/us_flag.jpg" class="mr-2" height="12" alt="" /> English <span class="mdi mdi-chevron-down"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16" /><span> French </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16" /><span> Russian </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16" /><span> Italian </span></a>
                                </div>
                            </li>

                            <!-- full screen -->
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                    <i class="fas fa-expand noti-icon"></i>
                                </a>
                            </li>

                            <!-- notification -->
                            <li class="dropdown notification-list list-inline-item">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fas fa-bell noti-icon"></i>
                                    <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                                    <!-- item-->
                                    <h6 class="dropdown-item-text">
                                            Notifications
                                        </h6>
                                    <div class="slimscroll notification-item-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                        </a>

                                    </div>
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                            View all <i class="fi-arrow-right"></i>
                                        </a>
                                </div>
                            </li>

                            <li class="dropdown notification-list list-inline-item">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <!-- item-->
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> My Wallet</a>
                                        <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- start content -->
            <div class="bg-dark">
                <div class="container-fluid">
                    <div class="row align-items-center ">
                        <div class="col-md-8">
                            <div class="page-title-box">
                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Welcome to Zegva Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block app-datepicker">
                                <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" readonly="readonly" id="datepicker">
                                <i class="mdi mdi-chevron-down mdi-drop"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row top-content">
                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Total Expenses</h5>
                                    <h4 class="text-info pt-1 mb-0">$67,670</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart1"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Total Invoice</h5>
                                    <h4 class="text-warning pt-1 mb-0">$7,360</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Amount Due</h5>
                                    <h4 class="text-primary pt-1 mb-0">$5000</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart3"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">

                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Unpaid Invoices</h5>
                                    <h4 class="text-danger pt-1 mb-0">$2,480</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.html"><i class="dripicons-meter"></i> Dashboard</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-briefcase"></i> UI Elements</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="ui-alerts.html">Alerts</a></li>
                                            <li><a href="ui-badge.html">Badge</a></li>
                                            <li><a href="ui-buttons.html">Buttons</a></li>
                                            <li><a href="ui-cards.html">Cards</a></li>
                                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                            <li><a href="ui-navs.html">Navs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                            <li><a href="ui-modals.html">Modals</a></li>
                                            <li><a href="ui-images.html">Images</a></li>
                                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                            <li><a href="ui-pagination.html">Pagination</a></li>
                                            <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li><a href="ui-spinner.html">Spinner</a></li>
                                            <li><a href="ui-carousel.html">Carousel</a></li>
                                            <li><a href="ui-video.html">Video</a></li>
                                            <li><a href="ui-typography.html">Typography</a></li>
                                            <li><a href="ui-grid.html">Grid</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-broadcast"></i> Advanced UI</a>
                                <ul class="submenu">
                                            <li><a href="advanced-alertify.html">Alertify</a></li>
                                            <li><a href="advanced-rating.html">Rating</a></li>
                                            <li><a href="advanced-nestable.html">Nestable</a></li>
                                            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                            <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                                            <li><a href="advanced-lightbox.html">Lightbox</a></li>
                                        </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-view-thumb"></i> Components</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Email</a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html">Inbox</a></li>
                                            <li><a href="email-read.html">Email Read</a></li>
                                            <li><a href="email-compose.html">Email Compose</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-material.html">Material Design</a></li>
                                            <li><a href="icons-ion.html">Ion Icons</a></li>
                                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                            <li><a href="icons-themify.html">Themify Icons</a></li>
                                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                                            <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="calendar.html">Calendar </a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Forms</a>
                                        <ul class="submenu">
                                            <li><a href="form-elements.html">Form Elements</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-advanced.html">Form Advanced</a></li>
                                            <li><a href="form-editors.html">Form Editors</a></li>
                                            <li><a href="form-uploads.html">Form File Upload</a></li>
                                            <li><a href="form-mask.html">Form Mask</a></li>
                                            <li><a href="form-summernote.html">Summernote</a></li>
                                            <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Tables </a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-datatable.html">Data Table</a></li>
                                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                                            <li><a href="tables-editable.html">Editable Table</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="maps-google.html"> Google Map</a></li>
                                            <li><a href="maps-vector.html"> Vector Map</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-graph-bar"></i>Charts </a>
                                <ul class="submenu">
                                    <li><a href="charts-morris.html">Morris Chart</a></li>
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-c3.html">C3 Chart</a></li>
                                    <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-to-do"></i> Pages</a>
                                <ul class="submenu megamenu">

                                    <li>
                                        <ul>
                                            <li><a href="pages-pricing.html">Pricing</a></li>
                                            <li><a href="pages-invoice.html">Invoice</a></li>
                                            <li><a href="pages-timeline.html">Timeline</a></li>
                                            <li><a href="pages-faqs.html">FAQs</a></li>
                                            <li><a href="pages-maintenance.html">Maintenance</a></li>
                                            <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                            <li><a href="pages-starter.html">Starter Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="pages-login.html">Login</a></li>
                                            <li><a href="pages-register.html">Register</a></li>
                                            <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                            <li><a href="pages-404.html">Error 404</a></li>
                                            <li><a href="pages-500.html">Error 500</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->

    <div class="wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Sales Statistics</h4>
                            <ul class="list-inline widget-chart mt-4 mb-0 text-center">
                                <li class="list-inline-item">
                                    <h5>3654</h5>
                                    <p class="text-muted">Marketplace</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5>954</h5>
                                    <p class="text-muted">Last week</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5>8462</h5>
                                    <p class="text-muted">Last Month</p>
                                </li>
                            </ul>
                            <div id="morris-bar-stacked" style="height: 350px;"></div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Trends Monthly</h4>
                            <ul class="list-inline widget-chart mt-4 mb-0 text-center">
                                <li class="list-inline-item">
                                    <h5>3654</h5>
                                    <p class="text-muted">Marketplace</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5>954</h5>
                                    <p class="text-muted">Last week</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5>8462</h5>
                                    <p class="text-muted">Last Month</p>
                                </li>
                            </ul>
                            <div id="morris-donut-example" class="morris-charts morris-chart-height" style="height: 350px;"></div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                <div class="col-xl-4">
                    <div class="card messages">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Latest Messages</h4>
                            <nav>
                                <div class="nav nav-tabs messages-tabs tab-wid nav-justified" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="true">
                                        <h5 class="mt-0 date">14</h5>
                                        <p class="text-muted mb-0">April</p>
                                    </a>
                                    <a class="nav-item nav-link" id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="false">
                                        <h5 class="mt-0 date">16</h5>
                                        <p class="text-muted mb-0">April</p>
                                    </a>
                                </div>
                            </nav>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                                    <div class="p-2 mt-2">
                                        <ul class="list-unstyled latest-message-list mb-0">
                                            <li class="message-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-2.jpg" alt="">
                                                        <div class="media-body">
                                                            <p class="float-right font-12 text-muted">Just Now</p>
                                                            <h6 class="mt-0">Mary Frye</h6>
                                                            <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="message-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-3.jpg" alt="">
                                                        <div class="media-body">
                                                            <p class="float-right font-12 text-muted">11:42am</p>
                                                            <h6 class="mt-0">David Smith</h6>
                                                            <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="message-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-4.jpg" alt="">
                                                        <div class="media-body">
                                                            <p class="float-right font-12 text-muted">01:56pm</p>
                                                            <h6 class="mt-0">Troy Long</h6>
                                                            <p class="text-muted mb-0">This theme is awesome!</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                                    <div class="p-2 mt-2">
                                        <ul class="list-unstyled latest-message-list mb-0">
                                            <li class="message-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-5.jpg" alt="">
                                                        <div class="media-body">
                                                            <p class="float-right font-12 text-muted">09:42am</p>
                                                            <h6 class="mt-0">John Carle</h6>
                                                            <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="message-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-6.jpg" alt="">
                                                        <div class="media-body">
                                                            <p class="float-right font-12 text-muted">11:07am</p>
                                                            <h6 class="mt-0">Jerry Carter</h6>
                                                            <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="message-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-7.jpg" alt="">
                                                        <div class="media-body">
                                                            <p class="float-right font-12 text-muted">01:17pm</p>
                                                            <h6 class="mt-0">Shane Hill</h6>
                                                            <p class="text-muted mb-0">This theme is awesome!</p>

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab-content -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                            <ol class="activity-feed mb-0 pl-3">
                                <li class="feed-item">
                                    <div class="feed-item-list">
                                        <p class="text-muted mb-1">Now</p>
                                        <p class="font-15 mt-0 mb-0">Andrei Coman magna sed porta finibus, risus posted a new article: <b class="text-primary">Forget UX Rowland</b></p>
                                    </div>
                                </li>
                                <li class="feed-item">
                                    <p class="text-muted mb-1">Yesterday</p>
                                    <p class="font-15 mt-0 mb-0">Andrei Coman posted a new article: <b class="text-primary">Designer Alex</b></p>
                                </li>
                                <li class="feed-item">
                                    <p class="text-muted mb-1">2:30PM</p>
                                    <p class="font-15 mt-0 mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace Commented <b class="text-primary"> Developer Moreno</b></p>
                                </li>
                                <li class="feed-item pb-1">
                                    <p class="text-muted mb-1">12:48 PM</p>
                                    <p class="font-15 mt-0 mb-2">Zack Wetass, Chris combined with Wallace They Commented <b class="text-primary">UX Murphy</b></p>
                                </li>

                            </ol>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="social-box text-center">
                                <i class="mdi mdi-facebook text-primary h1"></i>
                                <h5 class="font-19 mt-3"><span class="text-primary">8.625K</span> New Peoples</h5>
                                <p class="text-muted">Your main list is growing</p>

                                <div class="mt-2 pt-1 mb-2">
                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Follwing you</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="social-box text-center">
                                <i class="mdi mdi-twitter text-info h1"></i>
                                <h5 class="font-19 mt-3"><span class="text-info">125.3K</span> New Peoples</h5>
                                <p class="text-muted">Your main list is growing</p>

                                <div class="mt-2 pt-1 mb-2">
                                    <button type="button" class="btn btn-info btn-sm waves-effect waves-light">Follwing you</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Latest Projects</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Assigned</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Priority</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- start 1 -->
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck1">Zegva Themes</label>
                                                </div>
                                            </td>
                                            <td> <img src="assets/images/users/user-1.jpg" alt="" class="thumb-md rounded-circle mr-2"> Philip Smead</td>
                                            <td>April, 25</td>
                                            <td><span class="badge badge-primary">High</span></td>
                                        </tr>
                                        <!-- end 1 -->

                                        <!-- start 2 -->

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck2"> Themesdesign</label>
                                                </div>
                                            </td>
                                            <td><img src="assets/images/users/user-2.jpg" alt="" class="thumb-md rounded-circle mr-2"> Brent Shipley</td>
                                            <td>April, 28</td>
                                            <td><span class="badge badge-danger">Low</span></td>
                                        </tr>

                                        <!-- end 2 -->

                                        <!-- start 3 -->
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck3">Zegva Themes</label>
                                                </div>
                                            </td>
                                            <td><img src="assets/images/users/user-3.jpg" alt="" class="thumb-md rounded-circle mr-2">Kevin Ashley</td>
                                            <td>June, 12</td>
                                            <td><span class="badge badge-success">Medium</span></td>
                                        </tr>
                                        <!-- end 3 -->

                                        <!-- start 4 -->
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck4">Themesdesign</label>
                                                </div>
                                            </td>
                                            <td><img src="assets/images/users/user-4.jpg" alt="" class="thumb-md rounded-circle mr-2">Martin Whitmer</td>
                                            <td>June, 28</td>
                                            <td><span class="badge badge-success">Medium</span></td>
                                        </tr>
                                        <!-- end 4 -->

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Latest Projects</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Assigned</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Priority</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- start 5 -->
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck5">Zegva Themes</label>
                                                </div>
                                            </td>
                                            <td> <img src="assets/images/users/user-5.jpg" alt="" class="thumb-md rounded-circle mr-2"> Enrique Peters</td>
                                            <td>July, 15</td>
                                            <td><span class="badge badge-danger">Low</span></td>
                                        </tr>
                                        <!-- end 5 -->

                                        <!-- start 6 -->

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck6"> Themesdesign</label>
                                                </div>
                                            </td>
                                            <td><img src="assets/images/users/user-6.jpg" alt="" class="thumb-md rounded-circle mr-2"> Richard Schnell</td>
                                            <td>July, 30</td>
                                            <td><span class="badge badge-primary">High</span></td>
                                        </tr>

                                        <!-- end 6 -->

                                        <!-- start 7 -->
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck7">Zegva Themes</label>
                                                </div>
                                            </td>
                                            <td><img src="assets/images/users/user-7.jpg" alt="" class="thumb-md rounded-circle mr-2">Dennis Jackson</td>
                                            <td>August, 08</td>
                                            <td><span class="badge badge-success">Medium</span></td>
                                        </tr>
                                        <!-- end 7 -->

                                        <!-- start 8 -->

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck8">Zegva Themes</label>
                                                </div>
                                            </td>
                                            <td> <img src="assets/images/users/user-8.jpg" alt="" class="thumb-md rounded-circle mr-2">Carlos Rodrigues</td>
                                            <td>August, 23</td>
                                            <td><span class="badge badge-danger">Low</span></td>
                                        </tr>

                                        <!-- end 8 -->

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->

    <!-- Footer -->
    <footer class="footer">
        © 2019 Zegva <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</span>.
    </footer>

    <!-- End Footer -->

    <!-- jQuery  -->
    <script src="admin/assets/js/jquery.min.js"></script>
    <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="admin/assets/js/jquery.slimscroll.js"></script>
    <script src="admin/assets/js/waves.min.js"></script>

    <!-- Plugins js -->
    <script src="../plugins/apexchart/apexcharts.min.js"></script>
    <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael.min.js"></script>

    <script src="admin/assets/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="admin/assets/js/app.js"></script>

</body>

</html>