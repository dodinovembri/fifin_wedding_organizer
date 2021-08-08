<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#ef3447', 'colorSecondary': '#62c3d3', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Wedding Of <?php echo $wedding_invitation->code; ?></title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Wedding Organizer">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CGreat+Vibes&amp;display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/animate/animate.compat.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.min.css') ?>">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme-elements.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme-blog.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme-shop.css') ?>">

	<!-- Revolution Slider CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/settings.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/layers.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/navigation.css') ?>">

	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/demos/demo-wedding.css') ?>">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-wedding.css') ?>">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">

	<!-- Head Libs -->
	<script src="<?php echo base_url('assets/vendor/modernizr/modernizr.min.js') ?>"></script>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-SEP1T05Z5V"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-SEP1T05Z5V');
	</script>

</head>

<body data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">

	<div class="body">
		<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 84, 'stickySetTop': '-84px'}">
			<div class="header-body">
				<div class="header-container container py-0 py-lg-4">
					<div class="header-row">
						<div class="header-column justify-content-start justify-content-lg-center">
							<div class="header-row">
								<div class="header-logo">
									<a href="demo-wedding.html">
										<span class="header-logo-text ps-2 ps-sm-0"><?php echo $wedding_invitation->bride_name; ?> &amp; <?php echo $wedding_invitation->groom_name; ?></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column justify-content-end">
							<div class="header-row">
								<div class="header-nav justify-content-center">
									<div class="header-nav-main custom-header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 bg-color-light">
										<nav class="collapse">
											<ul class="nav nav-pills" id="mainNav">
												<li class="dropdown-full-color dropdown-quaternary">
													<a class="nav-link active" href="#home" data-hash data-hash-offset="50" data-collapse-nav>
														Home
													</a>
												</li>
												<li class="dropdown-full-color dropdown-quaternary">
													<a class="nav-link" href="#the-wedding" data-hash data-hash-offset="50" data-collapse-nav>
														The Wedding
													</a>
												</li>
												<li class="dropdown-full-color dropdown-quaternary">
													<a class="nav-link" href="#photos" data-hash data-hash-offset="50" data-collapse-nav>
														Photos
													</a>
												</li>
												<li class="dropdown-full-color dropdown-quaternary">
													<a class="nav-link" href="#guestbook" data-hash data-hash-offset="50" data-collapse-nav>
														Guestbook
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

			<div id="home" class="slider-container light rev_slider_wrapper" style="height: 810px;">
				<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
					<ul>
						<li data-transition="notransition">
							<img src="<?php echo base_url('uploads/wedding_invitation/');
										echo $wedding_invitation->home_background; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">

							<div class="tp-caption main-label text-color-light rs-parallaxlevel-1" data-x="center" data-hoffset="0" data-y="center" data-voffset="-45" data-start="500" style="z-index: 5; line-height: 76px; font-size: 76px; padding: 5px 0px; border-top: 1px solid rgba(255, 255, 255, 0.4); border-bottom: 1px solid rgba(255, 255, 255, 0.4);" data-transform_in="y:[-300%];opacity:0;s:500;">
								<span style="padding: 0px 4em; border-top: 1px solid rgba(255, 255, 255, 0.4); border-bottom: 1px solid rgba(255, 255, 255, 0.4);"></span>
							</div>

							<div class="tp-caption main-label alternative-font text-color-light rs-parallaxlevel-1" data-x="center" data-hoffset="0" data-y="center" data-voffset="-40" data-start="800" data-fontsize="['135','135','135','95']" data-lineheight="['45','45','45','45']" style="z-index: 5; font-weight: normal; " data-transform_in="y:[-300%];opacity:0;s:500;"><?php echo $wedding_invitation->bride_name; ?> &amp; <?php echo $wedding_invitation->groom_name; ?></div>

							<div class="tp-caption main-label text-color-light rs-parallaxlevel-2" data-x="center" data-hoffset="0" data-y="center" data-voffset="60" data-start="1200" style="z-index: 5; font-size: 22px; line-height: 22px; font-weight: 600;" data-transform_in="y:[-300%];opacity:0;s:500;">are getting married</div>

							<a href="#the-wedding" data-hash data-hash-offset="50" class="tp-caption main-label text-uppercase text-color-light bg-color-primary custom-border-radius rs-parallaxlevel-2 text-decoration-none" data-x="center" data-hoffset="0" data-y="center" data-voffset="110" data-start="1500" style="z-index: 5; font-size: 12px; font-weight: normal; padding: 15px 6px; line-height: 1;" data-transform_in="y:[-300%];opacity:0;s:500;">
								<span style="border: 1px solid #fd6e6e; padding: 5px 30px; border-radius: 30px;"><?php echo $wedding_invitation->wedding_date; ?></span>
							</a>

							<div class="tp-caption tp-resizeme rs-parallaxlevel-8" data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']" data-y="['top','top','top','top']" data-voffset="['632','632','632','632']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0" data-responsive_offset="on" style="z-index: 8;">
								<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%">
									<img src="<?php echo base_url('assets/img/demos/wedding/blurflake4.png') ?>" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-no-retina>
								</div>
							</div>

							<div class="tp-caption tp-resizeme rs-parallaxlevel-7" data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']" data-y="['top','top','top','top']" data-voffset="['487','487','487','487']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0" data-responsive_offset="on" style="z-index: 9;">
								<div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%">
									<img src="<?php echo base_url('assets/img/demos/wedding/blurflake3.png') ?>" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-no-retina>
								</div>
							</div>

							<div class="tp-caption tp-resizeme rs-parallaxlevel-4" data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']" data-y="['top','top','top','top']" data-voffset="['200','200','200','200']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0" data-responsive_offset="on" style="z-index: 10;">
								<div class="rs-looped rs-rotate" data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%">
									<img src="<?php echo base_url('assets/img/demos/wedding/blurflake2.png') ?>" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-no-retina>
								</div>
							</div>

							<div class="tp-caption tp-resizeme rs-parallaxlevel-6" data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']" data-y="['top','top','top','top']" data-voffset="['216','216','216','216']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0" data-responsive_offset="on" style="z-index: 11;">
								<div class="rs-looped rs-wave" data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%">
									<img src="<?php echo base_url('assets/img/demos/wedding/blurflake1.png') ?>" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-no-retina>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="slider-border"></div>
			</div>
			<section class="bride-groom">
				<div class="container">
					<div class="row justify-content-around pt-1 mt-5 pb-5 mb-3">
						<div class="col-lg-4">
							<div class="thumb-bride-groom text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
								<div class="bride-groom-bg">
									<div class="bride-groom-photo">
										<img src="<?php echo base_url('uploads/wedding_invitation/');
													echo $wedding_invitation->bride_image; ?>" alt />
									</div>
								</div>
								<div class="bride-groom-infos">
									<h2 class="font-weight-normal m-0"><?php echo $wedding_invitation->bride_name; ?></h2>
									<span class="text-uppercase text-color-primary font-weight-semibold">The Bride</span>
									<p class="mt-4">
										<?php echo $wedding_invitation->bride_text; ?>
									</p>
								</div>
								<ul class="social-icons mt-3">
									<li class="social-icons-facebook">
										<a href="https://www.facebook.com/<?php echo $wedding_invitation->bride_facebook_id; ?>" target="_blank" title="Facebook">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li class="social-icons-twitter">
										<a href="https://www.twitter.com/<?php echo $wedding_invitation->bride_twitter_id; ?>" target="_blank" title="Twitter">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li class="social-icons-instagram">
										<a href="https://www.instagram.com/<?php echo $wedding_invitation->bride_instagram_id; ?>" target="_blank" title="Instagram">
											<i class="fab fa-instagram"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="thumb-bride-groom text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
								<div class="bride-groom-bg groom-background-style">
									<div class="bride-groom-photo">
										<img src="<?php echo base_url('uploads/wedding_invitation/');
													echo $wedding_invitation->groom_image; ?>" alt />
									</div>
								</div>
								<div class="bride-groom-infos">
									<h2 class="font-weight-normal m-0"><?php echo $wedding_invitation->groom_name; ?></h2>
									<span class="text-uppercase text-color-primary font-weight-semibold">The Groom</span>
									<p class="mt-4">
										<?php echo $wedding_invitation->groom_text; ?>
									</p>
								</div>
								<ul class="social-icons mt-3">
									<li class="social-icons-facebook">
										<a href="https://www.facebook.com/<?php echo $wedding_invitation->groom_facebook_id; ?>" target="_blank" title="Facebook">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li class="social-icons-twitter">
										<a href="https://www.twitter.com/<?php echo $wedding_invitation->groom_twitter_id; ?>" target="_blank" title="Twitter">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li class="social-icons-instagram">
										<a href="https://www.instagram.com/<?php echo $wedding_invitation->groom_instagram_id; ?>" target="_blank" title="Instagram">
											<i class="fab fa-instagram"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="wedding-countdown parallax section section-text-light section-parallax section-center m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?php echo base_url('assets/img/demos/wedding/countdown/countdown-parallax-bg.jpg') ?>">
				<div class="container">
					<div class="row justify-content-center mt-5 mb-5 pt-1 pb-4">
						<div class="col-lg-8">
							<h2 class="alternative-font custom-font-size-1 pb-4">Counting down for the Special Day</h2>
							<div class="countdown countdown-light custom-countdown-style-1 px-lg-5 pt-3" data-plugin-countdown data-plugin-options="{'date': '<?php echo $wedding_invitation->wedding_date; ?> 00:00:00', 'textDay': 'DAY', 'textHour': 'HOURS', 'textMin': 'MINUTES', 'textSec': 'SECONDS'}"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="the-wedding section section-overlay custom-overlay-1 m-0 pb-5" id="the-wedding">
				<div class="container pb-1">
					<div class="row justify-content-center pt-5">
						<div class="col-lg-8">
							<h2 class="alternative-font custom-font-size-1 text-color-primary text-center">The Wedding</h2>
							<p class="text-center">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc lacinia. Proin adipisci.
							</p>
						</div>
					</div>
					<div class="row justify-content-around mt-1 mb-5 pb-3">
						<div class="col-md-8 col-lg-5 mt-5 pt-5">
							<div class="wedding-schedule text-center appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
								<div class="wedding-schedule-photo">
									<img src="<?php echo base_url('assets/img/demos/wedding/the-wedding/the-wedding-ceremony.jpg') ?>" alt />
								</div>
								<div class="wedding-schedule-background"></div>
								<img class="icon-heart-white-border" src="img/demos/wedding/the-wedding/icon-heart-white-border.png" alt />
								<div class="wedding-schedule-infos">
									<h2 class="mt-3 mb-0">Main Ceremony</h2>
									<span class="date text-uppercase text-color-primary font-weight-semibold"><?php echo $wedding_invitation->main_ceremony_date ?></span>
									<span class="hour text-2 text-uppercase text-color-tertiary font-weight-bold mb-3"><?php echo $wedding_invitation->main_ceremony_time ?></span>
									<span class="local text-3 text-uppercase font-weight-bold mb-4">										
										<span><?php echo $wedding_invitation->main_ceremony_location ?></span>
									</span>
								</div>
								<a class="btn btn-info text-uppercase ps-4 pe-4 text-2" target="_blank" href="https://www.google.com/maps/dir//<?php echo $wedding_invitation->main_ceremony_latitude; ?>, <?php echo $wedding_invitation->main_ceremony_longitude; ?>">View Map &amp; Direction</a>
							</div>
						</div>
						<div class="col-md-8 col-lg-5 mt-5 pt-5">
							<div class="wedding-schedule text-center appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="0">
								<div class="wedding-schedule-photo">
									<img src="<?php echo base_url('assets/img/demos/wedding/the-wedding/the-wedding-party.jpg') ?>" alt />
								</div>
								<div class="wedding-schedule-background"></div>
								<img class="icon-heart-white-border" src="img/demos/wedding/the-wedding/icon-heart-white-border.png" alt />
								<div class="wedding-schedule-infos">
									<h2 class="mt-3 mb-0">Wedding Party</h2>
									<span class="date text-uppercase text-color-primary font-weight-semibold"><?php echo $wedding_invitation->wedding_date ?></span>
									<span class="hour text-2 text-uppercase text-color-tertiary font-weight-bold mb-3"><?php echo $wedding_invitation->wedding_time ?></span>
									<span class="local text-3 text-uppercase font-weight-bold mb-4">
										<span><?php echo $wedding_invitation->wedding_location ?></span>
									</span>
								</div>
								<a class="btn btn-info text-uppercase ps-4 pe-4 text-2" href="https://www.google.com/maps/dir//<?php echo $wedding_invitation->wedding_latitude; ?>, <?php echo $wedding_invitation->wedding_longitude; ?>">View Map &amp; Direction</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="testimonials parallax section section-parallax section-center m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?php echo base_url('assets/img/demos/wedding/testimonial/testimonial-parallax-bg.jpg') ?>">
				<div class="container">
					<div class="row justify-content-center mt-2 pt-3 mb-2 pb-3">
						<div class="owl-carousel owl-theme nav-bottom rounded-nav m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 10000}">
							<div class="row justify-content-center">
								<div class="col-lg-10">
									<div class="testimonial testimonial-style-2 testimonial-with-quotes custom-wedding-quotes mb-0">
										<blockquote>
											<p class="font-weight-light text-color-light"><?php echo $wedding_invitation->special_message ?></p>
										</blockquote>
										<div class="testimonial-author mt-3">
											<p>
												<strong class="font-weight-light text-color-light text-7 pb-2"><?php echo $wedding_invitation->special_message_by ?></strong>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="our-history pt-5 pb-5 mb-4" id="photos">
				<div class="container">
					<div class="row justify-content-center mt-5">
						<div class="col-lg-8 text-center">
							<h2 class="alternative-font custom-font-size-1 text-color-primary">Our History in Photos</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc lacinia. Proin adipisc.
							</p>
						</div>
					</div>
					<div id="historyLoadMoreWrapper" class="row pt-4 history-list" data-total-pages="2">
						<?php foreach ($wedding_galleries as $key => $value) { ?>							
							<div class="col-md-6 col-lg-3 mb-3">
								<div class="history-item">
									<a href="img/demos/wedding/history/history-2.jpg" class="text-decoration-none">
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper m-0">
												<img src="<?php echo base_url('uploads/wedding_gallery/'); echo $value->image ?>" class="img-fluid" alt="">
												<span class="thumb-info-title text-uppercase font-weight-bold">
													<?php echo $value->description ?>
												</span>
												<span class="thumb-info-likes text-color-light">
													<i class="far fa-heart bg-color-primary p-1"></i>
													700
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>
			<section class="parallax section section-parallax section-center m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?php echo base_url('assets/img/demos/wedding/guestbook/guestbook-parallax-bg.jpg') ?>" id="guestbook">
				<div class="container">
					<div class="row text-center my-5">
						<div class="col">
							<h2 class="alternative-font custom-font-size-1 text-color-light">Guestbook</h2>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-lg-6 mb-5 mb-lg-0">
							<form id="guestbookSendMessage" class="contact-form bg-color-light p-4 h-100" action="<?php echo base_url('invitation/store_guest_book') ?>" method="POST">
								<input type="hidden" name="wedding_invitation_id" value="<?php echo $wedding_invitation->id ?>" />
								<input type="hidden" name="code" value="<?php echo $wedding_invitation->code ?>" />
								<div class="form-content p-5 m-2 bottom-6 h-100 d-flex justify-content-center flex-column w-100">
									<div class="row w-100">
										<div class="form-group col-lg-12">
											<input class="form-control form-control-custom" type="text" name="name" placeholder="Name*" data-msg-required="This field is required." id="name" required="" />
										</div>
									</div>
									<div class="row w-100">
										<div class="form-group col-lg-12">
											<textarea class="form-control form-control-custom" style="height: 78px;" name="message" placeholder="Message*" data-msg-required="This field is required." id="message" required=""></textarea>
										</div>
									</div>

									<div class="row w-100">
										<input type="submit" class="btn btn-secondary btn-xs custom-border-radius text-3 text-uppercase text-color-light outline-none p-3 ps-5 pe-5 m-auto mb-5 mt-5" value="Send Message" />
									</div>
								</div>
								<div class="custom-inner-border"></div>
							</form>
						</div>
						<div class="col-lg-6">
							<div class="guestbook-messages bg-color-light p-5">
								<div class="owl-carousel owl-theme nav-bottom rounded-nav pt-4 pb-4" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
									<?php foreach ($wedding_guest_books as $key => $value) { ?>
										<div>
											<div class="testimonial testimonial-style-2 testimonial-with-quotes custom-wedding-quotes">
												<blockquote>
													<p class="font-weight-normal custom-text-color-1 text-4"><?php echo $value->message ?></p>
												</blockquote>
												<div class="testimonial-author">
													<p class="text-uppercase">
														<strong class="custom-text-color-2"><?php echo $value->name ?></strong>
													</p>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
								<div class="custom-inner-border"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>




	<!-- Vendor -->
	<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/jquery.appear/jquery.appear.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/jquery.cookie/jquery.cookie.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/jquery.validation/jquery.validate.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/jquery.gmap/jquery.gmap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/lazysizes/lazysizes.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/isotope/jquery.isotope.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/vide/jquery.vide.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/vivus/vivus.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/jquery.countdown/jquery.countdown.min.js') ?>"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="<?php echo base_url('assets/js/theme.js') ?>"></script>

	<!-- Revolution Slider Scripts -->
	<script src="<?php echo base_url('assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') ?>"></script>


	<!-- Current Page Vendor and Views -->
	<script src="<?php echo base_url('assets/js/views/view.contact.js') ?>"></script>

	<!-- Demo -->
	<script src="<?php echo base_url('assets/js/demos/demo-wedding.js') ?>"></script>

	<!-- Theme Initialization Files -->
	<script src="<?php echo base_url('assets/js/theme.init.js') ?>"></script>

	<script defer src="<?php echo base_url('assets/js/beacon.min.js') ?>" data-cf-beacon='{"rayId":"664654171c45c39f","version":"2021.5.2","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":10}'></script>
</body>

<!-- Mirrored from www.okler.net/previews/porto/9.0.0/demo-wedding.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 13:53:41 GMT -->

</html>