<?php $this->load->view('templates/header') ?>
<div class="body">
	<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 54, 'stickySetTop': '-54px', 'stickyChangeLogo': false}">
		<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
			<div class="header-top header-top-small-minheight header-top-simple-border-bottom bg-primary">
				<div class="container py-2bg-primary">
					<div class="header-row justify-content-between">
						<div class="header-column col-auto px-0">
							<div class="header-row">
								<div class="header-nav-top">
									<ul class="nav nav-pills position-relative">
										<li class="nav-item d-none d-sm-block">
											<span class="d-flex align-items-center font-weight-medium ws-nowrap text-3 ps-0"><a href="https://www.okler.net/cdn-cgi/l/email-protection#8bfbe4f9ffe4cbefe4e6eae2e5a5e8e4e6" class="text-decoration-none text-color-dark text-color-hover-primary"><i class="icons icon-envelope font-weight-bold position-relative text-4 top-3 me-1" style="color: white;"></i> <span class="__cf_email__" style="color: white"><?php echo $contact->email; ?></span></a></span>
										</li>
										<li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
											<span class="d-flex align-items-center font-weight-medium text-color-dark ws-nowrap text-3"><i class="icons icon-clock font-weight-bold position-relative text-3 top-1 me-2" style="color: white;"></i> <span style="color: white;"> <?php echo $contact->opening_hours; ?> </span></span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end col-auto px-0 d-none d-md-flex">
							<div class="header-row">
								<nav class="header-nav-top">
									<ul class="header-social-icons social-icons social-icons-clean social-icons-icon-gray social-icons-medium custom-social-icons-divider">
										<li class="social-icons-facebook">
											<a href="https://www.facebook.com/<?php echo $contact->facebook; ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f" style="color: white;"></i></a>
										</li>
										<li class="social-icons-twitter">
											<a href="https://www.twitter.com/<?php echo $contact->twitter; ?>" target="_blank" title="Twitter"><i class="fab fa-twitter" style="color: white;"></i></a>
										</li>
										<li class="social-icons-linkedin">
											<a href="https://www.instagram.com/<?php echo $contact->instagram; ?>" target="_blank" title="Linkedin"><i class="fab fa-instagram" style="color: white;"></i></a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-container container">
				<div class="header-row">
					<div class="header-column w-100">
						<div class="header-row justify-content-between">
							<div class="header-logo z-index-2 col-lg-2 px-0">
								<a href="<?php echo base_url('/') ?>">
									<img alt="Porto" width="123" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="84" src="<?php echo base_url('assets/img/logo/logo.png') ?>">
								</a>
							</div>
							<div class="header-nav header-nav-links justify-content-end pe-lg-4 me-lg-3">
								<div class="header-nav-main header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
									<nav class="collapse">
										<ul class="nav nav-pills" id="mainNav">
											<li><a href="<?php echo base_url('/') ?>" class="nav-link <?php if ($this->uri->segment(1) == "") {echo "active";} ?>">Home</a></li>
											<li><a href="<?php echo base_url('simulation') ?>" class="nav-link <?php if ($this->uri->segment(1) == "simulation") {echo "active";} ?>">Simulation</a></li>
											<li><a href="<?php echo base_url('home/#wedding_package') ?>" class="nav-link <?php if ($this->uri->segment(1) == "wedding_package") {echo "active";} ?>">Wedding Package</a></li>
											<li><a href="<?php echo base_url('invitation') ?>" class="nav-link <?php if ($this->uri->segment(1) == "invitation") {echo "active";} ?>">Invitation</a></li>
											<li><a href="<?php echo base_url('calendar') ?>" class="nav-link <?php if ($this->uri->segment(1) == "calendar") {echo "active";} ?>">Calendar</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<ul class="header-extra-info custom-left-border-1 d-none d-xl-block">
								<li class="d-none d-sm-inline-flex ms-0">
									<div class="header-extra-info-icon">
										<i class="icons icon-phone text-3 text-color-dark position-relative top-3"></i>
									</div>
									<div class="header-extra-info-text line-height-2">
										<span class="text-1 font-weight-semibold text-color-default">CALL US NOW</span>
										<strong class="text-4"><a href="tel:<?php echo $contact->phone; ?>" class="text-color-hover-primary text-decoration-none"><?php echo $contact->phone; ?></a></strong>
									</div>
								</li>
							</ul>
							<button class="btn header-btn-collapse-nav ms-4" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
								<i class="fas fa-bars"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>	
	<div role="main" class="main">
		<div id="examples" class="container py-2">

			<div class="row">
				<div class="col">

					<div class="row">
						<div class="col">

							<h4 class="mb-0">Wedding Invitation</h4>
							<p>List of brides who use wedding invitations.</p>

							<div class="row">
								<?php foreach ($wedding_invitations as $key => $value) { ?>
									<div class="col-lg-3">
										<h5 class="text-uppercase mt-4"><?php echo $value->code ?></h5>
										<a href="<?php echo base_url('invitation/show/'); echo $value->code; ?>">
											<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
												<span class="thumb-info-wrapper">
													<img src="<?php echo base_url('uploads/wedding_invitation/'); echo $value->home_background; ?>" width="20%" class="img-fluid" alt="">
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
													</span>
												</span>
											</span>
										</a>
									</div>								
								<?php } ?>
							</div>


						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
<?php $this->load->view('templates/footer') ?>