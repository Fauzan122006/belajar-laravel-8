<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL 3 | {{ $title }}</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    @include('partials.navbar')

    <div class="container mt-3 text-white">
        @yield('container')
    </div>

    <script src="/js/bootstrap.js"></script>

</body>

</html>
