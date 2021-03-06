<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Milestone">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Milestone">

    <meta name="theme-color" content="#4C7FF0">

    <title>Milestone - Bootstrap 4 Dashboard Template</title>


    <link rel="stylesheet" href="{{asset('vendor/ui-select/dist/select.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/select2/select2.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/selectize/dist/css/selectize.css')}}">

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/pace/themes/blue/pace-theme-minimal.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/app.css')}}" id="load_styles_before"/>
    <link rel="stylesheet" href="{{asset('styles/app.skins.css')}}"/>
    <!-- endbuild -->
    @yield('css')

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
                        <img src="{{asset('images/logo_white.png')}}" alt="logo"/>
                    </a>
                    <!-- /logo -->
                </div>
                <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="#">
                    <span>@yield('title-page')</span>
                </a>
                <div class="navbar-search navbar-item">
                    <form class="search-form">
                        <i class="material-icons">search</i>
                        <input class="form-control" type="text" placeholder="Search"/>
                    </form>
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
            trackMethods: ['POST', 'GET']
        }
    };
</script>
<script src="{{asset('vendor/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('vendor/pace/pace.js')}}"></script>
<script src="{{asset('vendor/tether/dist/js/tether.js')}}"></script>
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{asset('vendor/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('scripts/constants.js')}}"></script>
<script src="{{asset('scripts/main.js')}}"></script>
<script src="{{asset('js/customize.js')}}"></script>


{{--<!-- page scripts -->--}}
{{--<script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>--}}
{{--<!-- end page scripts -->--}}
@include('sweetalert::alert')
@yield('scripts')

</body>
</html>
