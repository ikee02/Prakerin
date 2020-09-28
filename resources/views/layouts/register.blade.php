<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="asset2/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="asset2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="asset2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="asset2/vendor/animate/animate.css">
    <!--===============================================================================================-->  
        <link rel="stylesheet" type="text/css" href="asset2/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="asset2/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="asset2/css/util.css">
        <link rel="stylesheet" type="text/css" href="asset2/css/main.css">
    <!--===============================================================================================-->


    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
    <script src="asset2/js/index.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register</title>
</head>
<body>
    @guest
    @if (Route::has('register'))
    @endif
    @else
    @endguest

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
