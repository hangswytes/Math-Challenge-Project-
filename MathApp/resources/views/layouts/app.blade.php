<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light-bootstrap/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('light-bootstrap/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ $title ?? 'Dashboard' }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('light-bootstrap/css/light-bootstrap-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('light-bootstrap/css/demo.css') }}" rel="stylesheet" />
    @stack('css') <!-- Stack for additional CSS if needed -->
</head>
<body>
    <div class="wrapper @if (!auth()->check() || request()->route()->getName() == "") wrapper-full-page @endif">

        @if (auth()->check() && request()->route()->getName() != "")
            @include('layouts.navbars.sidebar')
            @include('pages/sidebarstyle') <!-- Ensure you have this file or modify accordingly -->
        @endif

        <div class="@if (auth()->check() && request()->route()->getName() != "") main-panel @endif">
            @include('layouts.navbars.navbar')
            <div class="content">
                @yield('content') <!-- Content of the page -->
            </div>
            @include('layouts.footer.nav') <!-- Ensure this footer exists or modify as needed -->
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('light-bootstrap/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light-bootstrap/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light-bootstrap/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('light-bootstrap/js/plugins/jquery.sharrre.js') }}"></script>
    <!-- Plugin for Switches -->
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-switch.js') }}"></script>
    <!-- Google Maps Plugin -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist Plugin -->
    <script src="{{ asset('light-bootstrap/js/plugins/chartist.min.js') }}"></script>
    <!-- Notifications Plugin -->
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Light Bootstrap Dashboard -->
    <script src="{{ asset('light-bootstrap/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods -->
    <script src="{{ asset('light-bootstrap/js/demo.js') }}"></script>
    @stack('js') <!-- Stack for additional JS if needed -->
    <script>
        $(document).ready(function () {
            $('#facebook').sharrre({
                share: { facebook: true },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                click: function(api, options) {
                    api.simulateClick();
                    api.openPopup('facebook');
                },
                template: '<i class="fab fa-facebook-f"></i> Facebook',
                url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
            });

            $('#google').sharrre({
                share: { googlePlus: true },
                enableCounter: false,
                enableHover: false,
                enableTracking: true,
                click: function(api, options) {
                    api.simulateClick();
                    api.openPopup('googlePlus');
                },
                template: '<i class="fab fa-google-plus"></i> Google',
                url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
            });

            $('#twitter').sharrre({
                share: { twitter: true },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                buttons: { twitter: { via: 'CreativeTim' } },
                click: function(api, options) {
                    api.simulateClick();
                    api.openPopup('twitter');
                },
                template: '<i class="fab fa-twitter"></i> Twitter',
                url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
            });
        });
    </script>
</body>
</html>