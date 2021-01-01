@if (config('sweetalert.alwaysLoadJS') === true && config('sweetalert.neverLoadJS') === false )
    <script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>
@endif
@if (Session::has('alert.config'))
        <link rel="stylesheet" href="{{ config('sweetalert.animatecss') }}">
        <script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>
    <script>
        Swal.fire({!! Session::pull('alert.config') !!});
    </script>
@endif
