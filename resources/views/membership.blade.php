<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>National Wheat Farmers Processors and Marketers Association of Nigeria</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('logo.jpeg') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

</head>

<body data-plugin-page-transition>

    <div class="body">
        <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="/">
                                        <img alt="Porto" width="148" height="60"
                                            src="{{ asset('nawfpman.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div
                                    class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown dropdown-reverse">
                                                    <a class="dropdown-item dropdown-reverse" href="/">
                                                        Home
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-reverse">
                                                    <a class="dropdown-item active" href="{{ route('membership') }}">
                                                        Membership Registration
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-reverse">
                                                    <a class="dropdown-item" href="{{ route('about') }}">
                                                        About
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-reverse">
                                                    <a class="dropdown-item" href="{{ route('team') }}">
                                                        Executive Members
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-reverse">
                                                    <a class="dropdown-item" href="{{ route('news') }}">
                                                        News/Events
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-reverse">
                                                    <a class="dropdown-item" href="#">
                                                        Contact Us
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">

            <section
                class="page-header page-header-modern page-header page-header-modern bg-color-primary page-header-md m-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-light text-10"><strong>Membership Registration</strong></h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center breadcrumb-light">
                                <li><a href="#">Home</a></li>
                                <li class="active">Membership Registration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0">

            <section class="section section-default border-0 m-0">
                <div class="container py-4">
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="row pb-4">
                        <div class="col">
                            <form action="{{ route('members.store') }}" class="row" method="POST">
                                @csrf
                                <div class="col-md-6">
                                    First Name
                                    <input type="text" name="firstname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    Last Name
                                    <input type="text" name="lastname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    Email
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    Phone
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    State
                                    <select name="state" id="state" class="form-control">
                                        <option selected value="">Select State...</option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state }}">{{ $state }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    LGA
                                    <select name="lga" id="lga" class="form-control">
                                        @foreach ($states as $state)
                                            <option>{{ $state }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    Address
                                    <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>

        </div>

        <footer id="footer" class="mt-0">
            <div class="footer-copyright footer-copyright-style-2">
                <div class="container py-2">
                    <div class="row py-4">
                        <div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                            <p>© Copyright 2022. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/lazysizes/lazysizes.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <script>
        var state = document.getElementById("state");
        var lga = document.getElementById("lga");
        let Url = '{{ url('/api/') }}';

        lga.length = 0;

        let defaultOption = document.createElement('option');
        defaultOption.text = 'Choose LGA';

        lga.add(defaultOption);
        lga.selectedIndex = 0;

        state.addEventListener("change", function() {
            // alert(state.value);

            fetch(Url + '/getLGA/' + state.value)
                .then((res) => res.json())
                .then((data) => {
                    console.log(data)
					document.getElementById("lga").innerHTML = "";
                    let option;
                    for (let i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.text = data[i];
                        option.value = data[i];
                        lga.add(option);
                    }

                });
        })
    </script>

</body>

</html>
