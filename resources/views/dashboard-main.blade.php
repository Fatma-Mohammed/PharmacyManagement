<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' href='assets/images/favicon.jpg' type='image/x-icon' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pharmacy Manager') }}</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/css/nprogress.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="assets/css/custom.min.css" rel="stylesheet">

    @yield('addional_css_includes')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
    @include('dashboard_includes.sidebar-menu')

    <!-- top navigation -->
    @include('dashboard_includes.top-nav')
    <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
    @include('dashboard_includes.footer')
    <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="assets/js/fastclick.js"></script>
<!-- NProgress -->
<script src="assets/js//nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="assets/js/custom.min.js"></script>

@yield('addional_js_includes')
</body>
</html>
