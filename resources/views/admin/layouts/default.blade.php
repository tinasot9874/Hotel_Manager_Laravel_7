<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
    <meta name="msapplication-tap-highlight" content="no">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Milestone">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Milestone">

    <meta name="theme-color" content="#4C7FF0">

    <title>Milestone - Bootstrap 4 Dashboard Template</title>

    <!-- page stylesheets -->
    <link rel="stylesheet" href="{{asset('vendor/bower-jvectormap/jquery-jvectormap-1.2.2.css')}}"/>
    <!-- end page stylesheets -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/pace/themes/blue/pace-theme-minimal.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/app.css')}}" id="load_styles_before"/>
    <link rel="stylesheet" href="{{asset('styles/app.skins.css')}}"/>
    <!-- endbuild -->
</head>
<body>

<div class="app">
    <!--sidebar panel-->
@include('admin.includes.sidebar-panel')
<!-- /sidebar panel -->
    <!-- content panel -->
    <div class="main-panel">
        <!-- top header -->
        <nav class="header navbar">
            <div class="header-inner">
                <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
                    <!-- toggle offscreen menu -->
                    <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen">
                        <i class="material-icons">menu</i>
                    </a>
                    <!-- /toggle offscreen menu -->
                    <!-- logo -->
                    <a class="brand-logo hidden-xs-down">
                        <img src="images/logo_white.png" alt="logo"/>
                    </a>
                    <!-- /logo -->
                </div>
                <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="#">
                    <span>Dashboard</span>
                </a>
                <div class="navbar-search navbar-item">
                    <form class="search-form">
                        <i class="material-icons">search</i>
                        <input class="form-control" type="text" placeholder="Search" />
                    </form>
                </div>
                <div class="navbar-item nav navbar-nav">
                    <div class="nav-item nav-link dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <span>English</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:;">English</a>
                            <a class="dropdown-item" href="javascript:;">Russian</a>
                        </div>
                    </div>
                    <div class="nav-item nav-link dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">notifications</i>
                            <span class="tag tag-danger">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notifications">
                            <div class="dropdown-item">
                                <div class="notifications-wrapper">
                                    <ul class="notifications-list">
                                        <li>
                                            <a href="javascript:;">
                                                <div class="notification-icon">
                                                    <div class="circle-icon bg-success text-white">
                                                        <i class="material-icons">arrow_upward</i>
                                                    </div>
                                                </div>
                                                <div class="notification-message">
                                                    <b>Sean</b>
                                                    launched a new application
                                                    <span class="time">2 seconds ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="notification-icon">
                                                    <div class="circle-icon bg-danger text-white">
                                                        <i class="material-icons">check</i>
                                                    </div>
                                                </div>
                                                <div class="notification-message">
                                                    <b>Removed calendar</b>
                                                    from app list
                                                    <span class="time">4 hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                            <span class="notification-icon">
                              <span class="circle-icon bg-info text-white">J</span>
                            </span>
                                                <div class="notification-message">
                                                    <b>Jack Hunt</b>
                                                    has
                                                    <b>joined</b>
                                                    mailing list
                                                    <span class="time">9 days ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                            <span class="notification-icon">
                              <span class="circle-icon bg-primary text-white">C</span>
                            </span>
                                                <div class="notification-message">
                                                    <b>Conan Johns</b>
                                                    created a new list
                                                    <span class="time">9 days ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="notification-footer">Notifications</div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:;" class="nav-item nav-link nav-link-icon" data-toggle="modal" data-target=".chat-panel" data-backdrop="false">
                        <i class="material-icons">chat_bubble</i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- /top header -->

        @yield('content')

    </div>
    <!-- /content panel -->

</div>

<script type="text/javascript">
    window.paceOptions = {
        document: true,
        eventLag: true,
        restartOnPushState: true,
        restartOnRequestAfter: true,
        ajax: {
            trackMethods: [ 'POST','GET']
        }
    };
</script>

{{--<!-- build:js({.tmp,app}) scripts/app.min.js -->--}}
<script src="{{asset('vendor/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('vendor/pace/pace.js')}}"></script>
<script src="{{asset('vendor/tether/dist/js/tether.js')}}"></script>
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{asset('vendor/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('scripts/constants.js')}}"></script>
<script src="{{asset('scripts/main.js')}}"></script>
<!-- endbuild -->

<!-- page scripts -->
<script src="{{asset('vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('vendor/flot-spline/js/jquery.flot.spline.js')}}"></script>
<script src="{{asset('vendor/bower-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('data/maps/jquery-jvectormap-us-aea.js')}}"></script>
<script src="{{asset('vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js')}}"></script>
<script src="{{asset('vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js')}}"></script>
<script src="{{asset('scripts/helpers/noty-defaults.js')}}"></script>
<!-- end page scripts -->

<!-- initialize page scripts -->
<script src="{{asset('scripts/dashboard/dashboard.js')}}"></script>
<!-- end initialize page scripts -->

</body>
</html>
