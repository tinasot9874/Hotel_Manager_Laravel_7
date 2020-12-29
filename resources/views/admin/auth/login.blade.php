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
    <!-- end page stylesheets -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/pace/themes/blue/pace-theme-minimal.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/app.css')}}" id="load_styles_before/">
    <link rel="stylesheet" href="{{asset('styles/app.skins.css')}}"/>
    <!-- endbuild -->
</head>
<body>

<div class="app no-padding no-footer layout-static">
    <div class="session-panel">
        <div class="session">
            <div class="session-content">
                <div class="card card-block form-layout">
                    <form role="form" action="{{route('admin.login')}}" id="validate" method="POST">
                        @csrf
                        <div class="text-xs-center m-b-3">
                            <img src="images/logo-icon.png" height="80" alt="" class="m-b-1"/>
                            <h5>
                                Welcome back!
                            </h5>
                            <p class="text-muted">
                                Sign in with your app id to continue.
                            </p>
                        </div>
                        <fieldset class="form-group">
                            <label for="username">
                                Enter your Email
                            </label>
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" autocomplete="email" autofocus id="email" placeholder="email" required/>
                            @error('email')
                            <span class="invalid-feedback error" role="alert">
                                        <strong><label class="error">{{ $message }}</label></strong>
                                    </span>
                            @enderror
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="password">
                                Enter your password
                            </label>
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password"
                                   name="password" autocomplete="current-password" placeholder="********" required/>
                            @error('password')
                            <span class="invalid-feedback error" role="alert">
                                        <strong><label class="error">{{ $message }}</label></strong>
                                    </span>
                            @enderror
                        </fieldset>

                        <div class="form-control">
                            <button class="btn btn-primary btn-block btn-lg" type="submit">
                                Login
                            </button>

                        </div>

                        <div class="form-control-sm">
                            <a href="/"> ← Go to Shop page</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
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

<!-- build:js({.tmp,app}) scripts/app.min.js -->
<script src="{{asset('vendor/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('vendor/pace/pace.js')}}"></script>
<script src="{{asset('vendor/tether/dist/js/tether.js')}}"></script>
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{asset('vendor/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('scripts/constants.js')}}"></script>
<!-- endbuild -->

<!-- page scripts -->
<script src="{{asset('vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<!-- end page scripts -->

<!-- initialize page scripts -->
<script type="text/javascript">
    $('#validate').validate();
</script>
<!-- end initialize page scripts -->

</body>
</html>
