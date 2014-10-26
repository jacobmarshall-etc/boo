<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/error.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="error-title">@yield('title', 'Internal Server Error')</h1>
        <div class="error-details">@yield('details')</div>
    </div>
</body>
</html>
