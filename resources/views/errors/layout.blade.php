<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error @yield('code')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="error-container">
    @yield('content')
</div>

<script>
    function goBack() {
        var previousUrl = '{{ Session::get("previous_url") }}';
        var currentUrl = '{{ url()->current() }}';

        if (previousUrl && previousUrl !== currentUrl) {
            window.location.href = previousUrl;
        } else {
            window.history.back();
        }
    }
</script>
</body>
</html>
