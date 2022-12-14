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
		<link rel="shortcut icon" href="{{asset('logo.jpeg')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

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
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="Porto" width="148" height="60" src="{{asset('nawfpman.png')}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown dropdown-reverse">
														<a class="dropdown-item dropdown-reverse" href="/">
															Home
														</a>
													</li>
													<li class="dropdown dropdown-reverse">
														<a class="dropdown-item" href="{{route('membership')}}">
															Membership Registration
														</a>
													</li>
													<li class="dropdown dropdown-reverse">
														<a class="dropdown-item" href="{{route('about')}}">
															About
														</a>
													</li>
													<li class="dropdown dropdown-reverse">
														<a class="dropdown-item" href="{{route('team')}}">
															Executive Members
														</a>
													</li>
													<li class="dropdown dropdown-reverse">
														<a class="dropdown-item active" href="{{route('news')}}">
															News/Events
														</a>
													</li>
													<li class="dropdown dropdown-reverse">
														<a class="dropdown-item" href="{{route('contact')}}">
															Contact Us
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
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

				<section class="page-header page-header-modern page-header page-header-modern bg-color-primary page-header-md m-0">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-light text-10"><strong>Contact Us</strong></h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb d-block text-center breadcrumb-light">
									<li><a href="{{route('welcome')}}">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<hr class="m-0">

				<section class="section section-default border-0 m-0">
					<div class="container py-4">

						<div class="row pb-4">
							<div class="col">
									

					<div class="row py-4">
						<div class="col-lg-6">

							<h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
							<p class="mb-4">Feel free to ask for details, don't save any questions!</p>

							<form class="contact-form" action="php/contact-form.php" method="POST" novalidate="novalidate">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<div class="row">
									<div class="form-group col-lg-6">
										<label class="form-label mb-1 text-2">Full Name</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required="">
									</div>
									<div class="form-group col-lg-6">
										<label class="form-label mb-1 text-2">Email Address</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required="">
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label mb-1 text-2">Subject</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required="">
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label mb-1 text-2">Message</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required=""></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
						<div class="col-lg-6">

							<div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="800" style="animation-delay: 800ms;">
								<h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> 1234 Street Name, City Name, United States</li>
									<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (123) 456-789</li>
									<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
								</ul>
							</div>

							<div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" style="animation-delay: 950ms;">
								<h4 class="pt-5">Business <strong>Hours</strong></h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
									<li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
									<li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
								</ul>
							</div>

							<h4 class="pt-5">Get in <strong>Touch</strong></h4>
							<p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div>

					</div>

						
							</div>
						</div>

					</div>
				</section>

			</div>

			<footer id="footer" class="mt-0">
				{{-- <div class="container my-4">
					<div class="row py-5">
						<div class="col-md-5 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Contact Details</h5>
							<p class="text-4 mb-1">NAWFPMAN 123</p>
							<p class="text-4 mb-4 pb-1">NAWFPMAN Blvd, Suite</p>

							<p class="text-5 mb-1 pt-2">Call: <a href="tel:1234567890" class="text-decoration-none">123-456-7890</a></p>
							<p class="text-5 mb-0">Email: <a href="mailto:info@porto.com">info@porto.com</a></p>
						</div>
						<div class="col-md-7 col-lg-5 mb-5 mb-lg-0">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
							<div class="row">
								<div class="col-6">
									<p class="mb-1"><a href="elements-call-to-action.html" class="text-4 link-hover-style-1">Call to Action</a></p>
									<p class="mb-1"><a href="elements-pricing-tables.html" class="text-4 link-hover-style-1">Pricing Tables</a></p>
									<p class="mb-1"><a href="elements-word-rotator.html" class="text-4 link-hover-style-1">Word Rotator</a></p>
									<p class="mb-1"><a href="elements-tooltips-popovers.html" class="text-4 link-hover-style-1">Tooltips & Popovers</a></p>
									<p class="mb-1"><a href="elements-sticky-elements.html" class="text-4 link-hover-style-1">Sticky Elements</a></p>
								</div>
								<div class="col-6">
									<p class="mb-1"><a href="elements-progressbars.html" class="text-4 link-hover-style-1">Progress Bars</a></p>
									<p class="mb-1"><a href="elements-sections.html" class="text-4 link-hover-style-1">Sections</a></p>
									<p class="mb-1"><a href="elements-lists.html" class="text-4 link-hover-style-1">Lists</a></p>
									<p class="mb-1"><a href="elements-image-frames.html" class="text-4 link-hover-style-1">Image Frames</a></p>
									<p class="mb-1"><a href="elements-testimonials.html" class="text-4 link-hover-style-1">Testimonials</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5>
							<p class="text-4 mb-1">Get all the latest informationon Sales and Offers.</p>
							<p class="text-4">Sign up for newsletter today.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="email">
									<button class="btn btn-primary text-color-light text-2 py-3 px-4" type="submit"><strong>SUBSCRIBE!</strong></button>
								</div>
							</form>
						</div>
					</div>
				</div> --}}
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
								<p>?? Copyright 2022. All Rights Reserved.</p>
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

	</body>
</html>