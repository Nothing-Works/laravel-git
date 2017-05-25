<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Custom styles for this template -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
@include('layouts.navblog')
<div class="container">
    @include('flash::message')
</div>
@include('layouts.headerblog')
<div class="container">
    <div class="row">
        @yield('contentblog')
        @include('layouts.slide')
    </div>
</div>
@include('layouts.footerblog')
<script src="/js/jquery-3.2.1.min.js" ></script>
<script src="/js/bootstrap.min.js" ></script>
<script src="/js/appall.js" ></script>
</body>
</html>
