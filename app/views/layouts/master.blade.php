<!DOCTYPE html>
<html lang="en" class="@yield('flags')">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Boo Photos')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="//use.typekit.net/zjn6avp.js"></script>
    <script>try { Typekit.load(); } catch(e) {}</script>

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>
    @yield('content')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
