<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') - NAWFPMAN</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4" />
    <meta name="theme-color" content="#206bc4" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="robots" content="noindex,nofollow,noarchive" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <!-- CSS files -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/summernote.min.css') }}">
    @livewireStyles
    <style>
        body {
            display: none;
        }

    </style>
</head>

<body class="antialiased">
    @include('partials.sidebar')
    <div class="page">
        @include('partials.top')
        <div class="content">
            @yield('content')
            @include('partials.foot')
        </div>
    </div>
    <script src="{{ asset('js/summernote.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    @livewireScripts
    <script>
        document.body.style.display = "block";
        $(document).ready(function() {
            $('.summernote').summernote();
        });

    </script>
</body>

</html>
