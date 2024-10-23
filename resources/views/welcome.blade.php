<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="VisionM Technology">
	<meta name="description" content="VisionM Technology">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@200;300;400;500;600;700&Open+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('one-page/css/et-line.css') }}">
	<link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
	<link rel="stylesheet" href="{{ asset('css/business.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link href="{{ asset('images/visionm-fav.png') }}" rel="icon">

	@yield('css')

	<!-- <title>@yield('title') | VisionM Technology</title> -->
	<title>Home | VisionM Technology</title>

</head>

<body class="stretched">

	<div id="wrapper">
		<header id="header" class="full-header transparent-header dark header-size-md" data-sticky-class="not-dark" data-responsive-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="auto">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">
						<div id="logo">
							<a href="/">
								<img class="logo-default" src="{{ asset('images/visionm-light-nobg.png') }}" alt="VisionM Technology">
								<img class="logo-dark" src="{{ asset('images/visionm-light-nobg.png') }}" alt="VisionM Technology">
							</a>
						</div>

						<div class="header-misc">
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i class="bi-x-lg"></i></a>
							</div>
						</div>

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>
						<nav class="primary-menu">
							<ul class="menu-container">
                <li class="menu-item active"><a class="menu-link" href="/"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('solution') }}"><div>Solutions</div></a>
								<li class="menu-item"><a class="menu-link" href="#"><div>Services</div></a>
								<li class="menu-item"><a class="menu-link" href="{{ url('blog') }}"><div>Blog</div></a>
								<li class="menu-item"><a class="menu-link" href="{{ url('events') }}"><div>Events</div></a>
								<li class="menu-item"><a class="menu-link" href="#"><div>About VisionM</div></a>
								<!-- <li class="menu-item"><a class="menu-link" href="#"><div>Contact us</div></a>
									<ul class="sub-menu-container" data-class="up-lg:not-dark">
										<li class="menu-item"><a class="menu-link" href="#"><div>NextGen Framework</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div>Stunning Graphics</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div>Secured Solutions</div></a></li>
									</ul>
								</li> -->
							</ul>

						</nav>

						<!-- <form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form> -->
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header>

		<section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-loop="true">
			<div class="slider-inner">
				<div class="swiper swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<div>
										<h2 class="font-primary text-transform-none">Creative Work.</h2>
										<p class="fw-light font-primary d-none d-sm-block">Quickly communicate bleeding-edge best practices.</p>
										<a href="#" class="button button-rounded button-large text-transform-none ls-0 font-primary">Get Started</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('/images/slider/1.jpg');"></div>
						</div>
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<div>
										<h2 class="font-primary">Amazing Prospects.</h2>
										<p class="fw-light font-primary d-none d-sm-block">Seamlessly engineer effective synergy after e-business experiences.</p>
										<a href="#" class="button button-rounded button-large text-transform-none ls-0 font-primary">Get Started</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('/images/slider/2.jpg');"></div>
						</div>
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<div>
										<h2 class="font-primary">Flexible Works.</h2>
										<p class="fw-light font-primary d-none d-sm-block">Completely incubate worldwide users before imperatives.</p>
										<a href="#" class="button button-rounded button-large text-transform-none ls-0 font-primary">Get Started</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('/images/slider/3.jpg');"></div>
						</div>
					</div>

					<div class="slider-arrow-left" class="bg-transparent"><i class="bi-arrow-left"></i></div>
					<div class="slider-arrow-right" class="bg-transparent"><i class="bi-arrow-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><img class="infinite animated fadeInDown" src="{{ asset('images/mouse.svg') }}" alt="Image" ></a>
			</div>

		</section>

		<section id="content">

			<div class="content-wrap pb-0" style="z-index: 1;">
				<div class="container mt-5">
					<div class="heading-block text-center border-0" data-heading="W">
						<h3>What We Do</h3>
					</div>
					<div class="row">
						<div class="text-center col-lg-8 offset-lg-2 mb-3">
							<h3 class="text-rotater font-secondary" data-separator="," data-rotate="fadeInRight" data-speed="3500">Canvas is a Powerful, Responsive &amp; Raw Multi-Purpose Multi-Page &amp; One-Page HTML5 Template. Build whatever you like with this Template. Be it <span class="t-rotate color">Business,Corporate,Medical,Travel,Construction,Real Estate,Media Agency,Portfolio,Restaurant,Magazine,Wedding,Christmas,Blog,App Showcase</span><br> just everything is possible with Canvas.</h3>
						</div>
					</div>
				</div>

        <div class="line"></div>

				<div class="section bg-transparent">
					<div class="container">
						<div class="heading-block mb-6 text-center border-0" data-heading="M">
							<h3 class="text-transform-none ls-0">Technology's Expertise</h3>
						</div>
					</div>

					<div id="oc-features" class="owl-carousel owl-carousel-full image-carousel carousel-widget customjs">
						<div class="oc-item">
							<div class="row cleafix">
								<div class="col-xl-8">
									<img src="{{ asset('images/carousel/1.jpg') }}" alt="Image">
								</div>
								<div class="col-xl-4" style="padding: 20px 0 0 20px;">
									<h3>IT Infrastructure</h3>
									<p>ออกแบบ ให้คําปรึกษาและติดตั้งระบบโครงสร้างพื้นฐานทาง IT ภายในองค์กร ให้ทุกธุรกิจสามารถ เชื่อมต่อและเข้าถึงข้อมูลได้อย่างรวดเร็วและปลอดภัย ทั้งในส่วนของ Server, Network (Wire & Wireless), Data Center และ Cabling System</p>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="row cleafix">
								<div class="col-xl-8">
									<img src="{{ asset('images/carousel/2.jpg') }}" alt="Image">
								</div>
								<div class="col-xl-4" style="padding: 20px 0 0 20px;">
									<h3>IT Security</h3>
									<p>ออกแบบ ให้คําปรึกษาและติดตั้งระบบรักษาความปลอดภัย ปกป้องความปลอดภัยของระบบเครือข่าย ให้ธุรกิจสามารถทํางานได้อย่างต่อเนื่องปราศจากภัยร้ายรบกวน ทั้งในส่วนของ Data Center Security, System Security, Network Security และ Endpoint Security</p>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="row cleafix">
								<div class="col-xl-8">
									<img src="{{ asset('images/carousel/3.jpg') }}" alt="Image">
								</div>
								<div class="col-xl-4" style="padding: 20px 0 0 20px;">
									<h3>Video Surveillance</h3>
									<p>ออกแบบ ให้คําปรึกษาและติดตั้งระบบกล้องวงจรปิดสําหรับองค์กรขนาดใหญ่ (Enterprise Solution) เพื่อรักษาความปลอดภัยพื้นที่ที่สําคัญ พร้อมระบบบริหารจัดและเฝ้าติดตามแบบอัจฉริยะ (Intelligence)</p>
								</div>
							</div>
						</div>
            <div class="oc-item">
							<div class="row cleafix">
								<div class="col-xl-8">
									<img src="{{ asset('images/carousel/3.jpg') }}" alt="Image">
								</div>
								<div class="col-xl-4" style="padding: 20px 0 0 20px;">
									<h3>Application Software Development</h3>
									<p>มีทีมงานที่มีความเชี่ยวชาญที่คอยให้คําปรึกษาระบบแอพพลิเคชั่น ตามความต้องการของลูกค้า</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section p-0 mt-0 bg-transparent" style="border-top: 1px solid #EEE; border-bottom: 1px solid #EEE;">
					<div class="row align-items-stretch">
						<div class="col-lg-6 text-center col-padding" style="background: url('/images/sections/1.jpg') center center no-repeat; background-size: cover;">
							<div>&nbsp;</div>
						</div>

						<div class="col-lg-6 col-padding">
							<div>
								<div style="position: relative;">
									<div class="heading-block border-0" data-heading="A">
										<h3 class="text-transform-none ls-0">About Us</h3>
									</div>
								</div>

								<div class="row g-5">
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-globe"></i></a>
											</div>
											<div class="fbox-content">
												<h3>All over the World</h3>
												<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-gears"></i></a>
											</div>
											<div class="fbox-content">
												<h3>Fully Customisable</h3>
												<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-document"></i></a>
											</div>
											<div class="fbox-content">
												<h3>Helpfull Documentation</h3>
												<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="section bg-transparent mt-0">
					<div class="container">
						<div class="row mt-2">
							<div class="col-lg-6 p-0">
								<!-- Youtube Video Link
								============================================= -->
								<a href="https://www.youtube.com/watch?v=NS0txu_Kzl8" data-lightbox="iframe">
									<img src="{{ asset('images/sections/video.jpg') }}" alt="Youtube Video"  style="box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.15); border-radius: 6px;">
									<i class="bi-play" style="position: absolute; top: 50%; left: 50%; font-size: 60px; color: #FFF; margin-top: -45px; margin-left: -23px"></i>
								</a>
							</div>
							<!-- Video Texts
							============================================= -->
							<div class="col-lg-6" style="padding-left: 60px;">
								<div class="heading-block mt-4 mb-4 border-0">
									<h3 class="text-transform-none" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">A small Video from Our Customers.</h3>
								</div>
								<p class="fw-normal">Interactively facilitate.<br>Tactical systems with compelling materials. Objectively re-engineer diverse relationships long-term impact methodologies.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Parallax Area
				============================================= -->
				<div class="section parallax scroll-detect mt-6 mb-0 border-top-0">
					<img src="{{ asset('images/sections/2.jpg') }}" class="parallax-bg">
					<div class="container">

						<div class="row col-mb-50 cleafix">
							<div class="col-md-6 dark" style="padding-left: 60px;">
								<div class="heading-block mb-4 border-0">
									<h3 class="text-transform-none" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">Collections from Our Customers.</h3>
								</div>
								<p>Appropriately implement user friendly e-markets and backend processes. Competently expedite competitive vortals rather than client-based testing procedures. Professionally matrix exceptional schemas vis-a-vis leveraged paradigms. Authoritatively coordinate just in time networks with strategic potentialities.</p>
								<a href="#" class="button-link ms-0">Read More</a>
							</div>

							<!-- Testimonials slider
							============================================= -->
							<div class="col-md-5 offset-md-1">
								<h4 class="dark">Testimonials Scroller</h4>
								<div class="fslider testimonial bg-white p-5 rounded" data-animation="slide" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide">
												<p class="mb-4 font-primary">Great support, great documentation and you guys done a fantastic job in commenting everything, makes it very easy to customize, so thank you.</p>
												<h4 class="h6 mb-1 fw-bold text-uppercase ls-1">SmileyDot</h4>
												<small class="text-muted d-block mb-3">ThemeForest user</small>
												<div>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
												</div>
											</div>
											<div class="slide">
												<p class="mb-4 font-primary">I wish that I could choose more than one reason for my 5-star rating! The Design is great, the features are fantastic, the documentation top-notch.</p>
												<h4 class="h6 mb-1 fw-bold text-uppercase ls-1">georgewhoffman</h4>
												<small class="text-muted d-block mb-3">ThemeForest user</small>
												<div>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
												</div>
											</div>
											<div class="slide">
												<p class="mb-4 font-primary">Excellent Template really versatile and well documented. Makes anyone look like a design professional.</p>
												<h4 class="h6 mb-1 fw-bold text-uppercase ls-1">georgeuser077</h4>
												<small class="text-muted d-block mb-3">ThemeForest user</small>
												<div>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
												</div>
											</div>
											<div class="slide">
												<p class="mb-4 font-primary">This is the most robust template I've ever worked with. So much can be done with this multi-purpose package. Regular updates and enhancements add tremendous value.</p>
												<h4 class="h6 mb-1 fw-bold text-uppercase ls-1">rmandaro</h4>
												<small class="text-muted d-block mb-3">ThemeForest user</small>
												<div>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
												</div>
											</div>
											<div class="slide">
												<p class="mb-4 font-primary">I've been using Canvas for months now and it has exceeded my expectations. Their support has been great too.</p>
												<h4 class="h6 mb-1 fw-bold text-uppercase ls-1">kwelch2</h4>
												<small class="text-muted d-block mb-3">ThemeForest user</small>
												<div>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
													<i class="bi-star-fill text-warning"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Brands Carousel
				============================================= -->
				<div class="section m-0" style="padding: 80px 0">
					<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="0" data-nav="false" data-pagi="false" data-loop="true" data-autoplay="3000" data-items-xs="2" data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">
						<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/linkedin.svg') }}" class="mx-auto w-auto" height="24" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/nat-geo.svg') }}" class="mx-auto w-auto" height="24" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/jetblue.svg') }}" class="mx-auto w-auto" height="24" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/zillow.svg') }}" class="mx-auto w-auto" height="24" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/amazon.svg') }}" class="mx-auto w-auto" height="24" alt="Brands"></a></div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="border-0" style="padding: 30px 0; background-color: #FFF">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-md-3">
							<img src="{{ asset('images/visionm-light-nobg.png') }}" alt="Image" height="100" style="margin-top: -30px">
						</div>

						<div class="col-md-9">

							<div class="row col-mb-30">
								<div class="col-sm-6 col-lg-3">
									<div class="widget widget_links widget-li-noicon">
										<h4>Hire</h4>
										<ul>
											<li><a href="#">Documentation</a></li>
											<li><a href="#">Feedback</a></li>
											<li><a href="#">Plugins</a></li>
											<li><a href="#">Support Forums</a></li>
											<li><a href="#">Themes</a></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="widget widget_links widget-li-noicon">
										<h4>Community</h4>
										<ul>
											<li><a href="#">Documentation</a></li>
											<li><a href="#">Feedback</a></li>
											<li><a href="#">Plugins</a></li>
											<li><a href="#">Support Forums</a></li>
											<li><a href="#">Themes</a></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="widget widget_links widget-li-noicon">
										<h4>Learn</h4>
										<ul>
											<li><a href="#">Documentation</a></li>
											<li><a href="#">Feedback</a></li>
											<li><a href="#">Plugins</a></li>
											<li><a href="#">Support Forums</a></li>
											<li><a href="#">Themes</a></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="widget widget_links widget-li-noicon">
										<h4>About</h4>
										<ul>
											<li><a href="#">Documentation</a></li>
											<li><a href="#">Feedback</a></li>
											<li><a href="#">Plugins</a></li>
											<li><a href="#">Support Forums</a></li>
											<li><a href="#">Themes</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="line line-sm"></div>

							<div class="row justify-content-between col-mb-30">
								<div class="col-12 col-md-auto text-center text-md-start">
									<small class="fw-light" style="color: #AAA">Copyrights &copy; 2022 Copyright Vision M Technology Co.,Ltd. .All Rights Reserved.</small>
								</div>

								<div class="col-12 col-md-auto text-center text-md-end">
									<a href="#" class="social-icon si-mini rounded-circle border-0 text-light bg-facebook">
										<i class="fa-brands fa-facebook-f"></i>
										<i class="fa-brands fa-facebook-f"></i>
									</a>

									<a href="#" class="social-icon si-mini rounded-circle border-0 text-light bg-x-twitter">
										<i class="fa-brands fa-x-twitter"></i>
										<i class="fa-brands fa-x-twitter"></i>
									</a>

									<a href="#" class="social-icon si-mini rounded-circle border-0 text-light bg-google">
										<i class="fa-brands fa-google"></i>
										<i class="fa-brands fa-google"></i>
									</a>

									<a href="#" class="social-icon si-mini rounded-circle border-0 text-light bg-pinterest">
										<i class="fa-brands fa-pinterest-p"></i>
										<i class="fa-brands fa-pinterest-p"></i>
									</a>

									<a href="#" class="social-icon si-mini rounded-circle border-0 text-light bg-vimeo">
										<i class="fa-brands fa-vimeo-v"></i>
										<i class="fa-brands fa-vimeo-v"></i>
									</a>

									<a href="#" class="social-icon si-mini rounded-circle border-0 text-light bg-instagram">
										<i class="bi-instagram"></i>
										<i class="bi-instagram"></i>
									</a>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('js/plugins.min.js') }}"></script>
	<script src="{{ asset('js/functions.bundle.js') }}"></script>

	<script>
		jQuery(window).on( 'load', function(){
			jQuery('#oc-features').owlCarousel({
				items: 1,
				margin: 60,
			    nav: true,
			    navText: ['<i class="bi-arrow-left"></i>','<i class="bi-arrow-right"></i>'],
			    dots: false,
			    stagePadding: 30,
			    responsive:{
					768: { items: 2 },
					1200: { stagePadding: 200 }
				},
			});
		});
	</script>

</body>
</html>
