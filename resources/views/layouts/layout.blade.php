<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Application')</title>
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
</head>
<body>
@yield('content')
</body>
</html>

