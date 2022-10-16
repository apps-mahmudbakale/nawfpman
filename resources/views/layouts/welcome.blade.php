<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gigante | Consultancy Limited</title>
    <meta name="description" content="Transcrew | Courier & Delivery Service HTML Template" />
    <meta name="keywords"
        content="cargo, courier, delivery, freight, logistics, mover, moving company, packaging, responsive, shipment, shipping, transport, warehouse" />
    <!-- Plugins CSS -->
    <link href="css/app.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Transcrew | Courier & Delivery Service HTML Template</title>
        <meta name="description" content="Transcrew | Courier & Delivery Service HTML Template" />
        <meta name="keywords"
            content="cargo, courier, delivery, freight, logistics, mover, moving company, packaging, responsive, shipment, shipping, transport, warehouse" />
        <!-- Plugins CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        @livewireStyles
    </head>

    <body>
        <div class="page-wrapper">
            <div id="dvLoading"></div>
            @include('partials.header')
            @yield('content')
            @include('partials.footer')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        @livewireScripts
    </body>

    </html>
