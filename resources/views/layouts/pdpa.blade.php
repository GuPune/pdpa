<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->

    <!-- end of global css -->
    {{-- <link href="{{ asset('template/vendors/iCheck/css/all.css') }}" rel="stylesheet">
    <!--page level css -->
    <link href="{{ asset('template/vendors/iCheck/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/pages/alertmessage.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/pages/mail_box.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('template/vendors/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/pages/calendar_custom.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/pages/only_dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/pages/tables.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/datatables/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/awesome-bootstrap-checkbox/css/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/assets/css/pages/radio_checkbox.css') }}">



    <script src="{{ asset("template/assets/js/app.js") }}"></script>
    <script src="{{ asset("template/vendors/iCheck/js/icheck.js") }}"></script>
    <script src="{{ asset("template/assets/js/pages/mail_box.js") }}"></script>

    <script src="{{ asset("template/vendors/jquery.easy-pie-chart/js/easypiechart.min.js") }}"></script>
    <script src="{{ asset("template/vendors/jquery.easy-pie-chart/js/jquery.easypiechart.min.js") }}"></script>
    <script src="{{ asset("template/vendors/moment/js/moment.min.js") }}"></script>
    <script src="{{ asset("template/vendors/fullcalendar/js/fullcalendar.min.js") }}"></script>
    <script src="{{ asset("template/vendors/flotchart/js/jquery.flot.js") }}"></script>
    <script src="{{ asset("template/vendors/sparklinecharts/jquery.sparkline.js") }}"></script>
    <script src="{{ asset("template/vendors/flotchart/js/jquery.flot.js") }}"></script>
    <script src="{{ asset("template/vendors/flotchart/js/jquery.flot.resize.js") }}"></script>
    <script src="{{ asset("template/vendors/sparklinecharts/jquery.sparkline.js") }}"></script>
    <script src="{{ asset("template/vendors/countUp.js/js/countUp.js") }}"></script>
    <script src="{{ asset("template/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js") }}"></script>
    <script src="{{ asset("template/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js") }}"></script>
    <script src="{{ asset("template/vendors/countUp.js/js/countUp.js") }}"></script>
    <script src="{{ asset("template/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js") }}"></script>
    <script src="{{ asset("template/vendors/chartjs/Chart.js") }}"></script>
    <script src="{{ asset("template/assets/js/pages/todolist.js") }}"></script>
    <script src="{{ asset("template/assets/js/pages/dashboard.js") }}"></script>
    <script src="{{ asset("template/vendors/datatables/js/jquery.dataTables.js") }}"></script>
    <script src="{{ asset("template/vendors/datatables/js/dataTables.bootstrap.js") }}"></script> --}}








    <!-- page level css ends-->
</head>


<body class="skin-josh">
    @include('template.navbar')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        @include('template.menu')
        <!-- Right side column. Contains the navbar and content of the page -->

        <aside>
            <div class="content-wrapper">
                @yield('content')
            </div>

        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->

    <!-- end of page level js -->
</body>

</html>
