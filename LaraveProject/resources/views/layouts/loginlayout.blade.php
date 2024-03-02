<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('pageDescription')">
    <meta name="author" content="">
    <link href="{{URL::to('admintemplate/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('admintemplate/css/sb-admin-2.min.css')}}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        @yield('content')

    </div>

   <script src="{{URL::to('admintemplate/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::to('admintemplate/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{URL::to('admintemplate/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{URL::to('admintemplate/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{URL::to('admintemplate/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{URL::to('admintemplate/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{URL::to('admintemplate/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
