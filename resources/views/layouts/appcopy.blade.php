<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <link href="{{ asset('template/icons/icomoon/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('template/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/layout.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/components.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/colors.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template/plugins/formvalidation/dist/css/formValidation.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/plugins/fancy-box/jquery.fancybox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template/assets/css/font.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">

    @stack('styles')

    <script src="{{ asset('template/assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/main/sweet_alert.min.js')}}"></script>
    <script src="{{ asset('template/assets/js/main/datatables.min.js')}}"></script>

    <script src="{{ asset('template/plugins/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('template/plugins/formvalidation/dist/js/plugins/Bootstrap.min.js')}}"></script>

    <script src="{{ asset('template/plugins/fancy-box/jquery.fancybox.min.js')}}"></script>

    <script src="{{ asset("template/assets/js/app.js") }}"></script>
</head>
<body>
    @auth
        @include('template.navbar')
        <div class="page-content">
            @include('template.menu')
            <div class="content-wrapper">
                @yield('content')
                @include('template.footer')
            </div>
        </div>
        @include('template.pattern.alert')
    @endauth

    @guest
        @yield('login')
    @endguest

    @stack('scripts')
</body>
</html>
