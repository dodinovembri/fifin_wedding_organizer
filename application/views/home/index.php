<?php $this->load->view('templates/header') ?>
<div class="body">
	<?php $this->load->view('components/head') ?>
	<div role="main" class="main">

		<section class="section custom-section-background position-relative border-0 overflow-hidden m-0 p-0">
			<div class="position-absolute top-0 left-0 right-0 bottom-0 animated fadeIn" style="animation-delay: 600ms;">
				<div class="background-image-wrapper custom-background-style-1 position-absolute top-0 left-0 right-0 bottom-0 animated kenBurnsToRight" style="background-image: url(
					<?php echo base_url('uploads/banner/');
					echo $banner->image;
					?>); background-position: center right; animation-duration: 30s;"></div>
			</div>
			<div class="container position-relative py-sm-5 my-5">
				<svg class="custom-svg-1 d-none d-sm-block" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 649 578">
					<path fill="#FFF" d="M-225.5,154.7l358.45,456.96c7.71,9.83,21.92,11.54,31.75,3.84l456.96-358.45c9.83-7.71,11.54-21.92,3.84-31.75
								L267.05-231.66c-7.71-9.83-21.92-11.54-31.75-3.84l-456.96,358.45C-231.49,130.66-233.2,144.87-225.5,154.7z" />
					<path class="animated customLineAnim" fill="none" stroke="#1C5FA8" stroke-width="1.5" stroke-miterlimit="10" d="M416-21l202.27,292.91c5.42,7.85,3.63,18.59-4.05,24.25L198,603" style="animation-delay: 300ms; animation-duration: 5s;" />
				</svg>
				<div class="row mb-5">
					<div class="col-md-8 col-lg-6 col-xl-5">
						<div class="overflow-hidden mb-1">
							<h2 class="font-weight-bold text-color-grey text-4-5 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">Fifin Wedding Organizer Are Ready To Work For You</h2>
						</div>
						<h1 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Reliable And Knowledgeable Wedding Located In Palembang, ID</h1>
						<a href="#wedding_package" class="btn btn-primary custom-btn-border-radius custom-btn-arrow-effect-1 font-weight-bold text-3 px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
							GET STARTED
							<svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="section custom-bg-color-grey-1 custom-background-size-1 position-relative overflow-hidden border-0 m-0">
			<div class="container my-5 pt-md-4 pt-xl-0">
				<div class="row align-items-center justify-content-center pb-4 mb-5">
					<div class="col-lg-6 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
						<div class="overflow-hidden">
							<h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300"><?php echo $contact->about_title; ?></h2>
						</div>
						<div class="custom-divider divider divider-primary divider-small my-3">
							<hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700">
						</div>
						<p class="pb-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"><?php echo $contact->about; ?></p>
						<div class="d-flex align-items-start align-items-sm-center flex-column flex-sm-row">
							<a href="#" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="950">VIEW MORE</a>
							<div class="feature-box align-items-center border border-top-0 border-end-0 border-bottom-0 custom-remove-mobile-xs-border-left ms-sm-4 ps-sm-4 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1200">
								<div class="feature-box-icon bg-transparent">
									<i class="icons icon-phone text-6 text-color-dark"></i>
								</div>
								<div class="feature-box-info line-height-2 ps-1">
									<span class="d-block text-1 font-weight-semibold text-color-default">CALL US NOW</span>
									<strong class="text-4-5"><a href="tel:+<?php echo $contact->phone; ?>" class="text-color-dark text-color-hover-primary text-decoration-none"><?php echo $contact->phone; ?></a></strong>
								</div>
							</div>
						</div>
					</div>
					<div class="col-10 col-md-9 col-lg-6 ps-lg-5 pe-5 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1450" data-plugin-options="{'accY': -200}">
						<div class="position-relative">
							<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
								<img src="<?php echo base_url('uploads/contact/');
											echo $contact->about_image; ?>" class="img-fluid" alt="" />
							</div>
							<div class="position-absolute transform3dxy-n50" style="top: 25%; left: 7%;">
								<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': false}">
									<img src="img/demos/auto-services/generic-1-1.png" class="appear-animation" alt="" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1700" />
								</div>
							</div>
							<div class="position-absolute transform3dxy-n50 ms-5 pb-5 ms-xl-0" style="top: 32%; left: 85%;">
								<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1500, 'isInsideSVG': false}">
									<img src="img/demos/auto-services/generic-1-2.png" class="appear-animation" alt="" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1900" />
								</div>
							</div>
							<div class="position-absolute transform3dxy-n50" style="top: 90%; left: 19%;">
								<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': false}">
									<img src="img/demos/auto-services/generic-1-3.png" class="appear-animation" alt="" data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="2100" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="container py-3 my-3" id="wedding_package">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-xl-8 text-center">
				<div class="overflow-hidden">
					<h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Wedding Package</h2>
				</div>
				<div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
					<hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
				</div>
				<p class="font-weight-light text-3-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
			</div>
		</div>
	</div>
	<div class="pricing-table pricing-table-no-gap mb-4">
		<?php foreach ($wedding_packages as $key => $value) {

			$CI = &get_instance();
			$CI->load->model(['WeddingPackageDetailModel']);
			$package_details = $CI->WeddingPackageDetailModel->PackageDetail($value->id)->result();

			if ($value->type == 0) { ?>
				<div class="col-md-6 col-lg-3">
					<div class="plan">
						<div class="plan-header">
							<h3><?php echo $value->name; ?></h3>
						</div>
						<div class="plan-price">
							<span class="price"><span class="price-unit">Rp.</span><?php echo $value->price ?></span>
							<label class="price-label">Juta</label>
						</div>
						<div class="plan-features">
							<ul>
								<?php foreach ($package_details as $key2 => $value2) { ?>
									<li><?php echo $value2->feature_name; ?></li>
								<?php } ?>
							</ul>
						</div>
						<div class="plan-footer">
							<a href="<?php echo base_url('wedding_package/show/'); echo $value->id; ?>" class="btn btn-dark btn-modern btn-outline py-2 px-4">See Details</a>
							<!-- <a href="https://api.whatsapp.com/send?phone=<?php echo $contact->phone; ?>&text=Hallo%20Kak,%20Saya%20Mau%20Order%20yang%20<?php echo $value->name; ?>,%20terima kasih.." class="btn btn-dark btn-modern btn-outline py-2 px-4">Choose</a> -->
						</div>
					</div>
				</div>
			<?php } else { ?>
				<div class="col-md-6 col-lg-3">
					<div class="plan plan-featured">
						<div class="plan-header bg-primary">
							<h3><?php echo $value->name; ?></h3>
						</div>
						<div class="plan-price">
							<span class="price"><span class="price-unit">Rp.</span><?php echo $value->price ?></span>
							<label class="price-label">Juta</label>
						</div>
						<div class="plan-features">
							<ul>
							<?php foreach ($package_details as $key2 => $value2) { ?>
									<li><?php echo $value2->feature_name; ?></li>
								<?php } ?>
							</ul>
						</div>
						<div class="plan-footer">
							<a href="<?php echo base_url('wedding_package/show/'); echo $value->id; ?>" class="btn btn-dark btn-modern btn-outline py-2 px-4">See Details</a>
							<!-- <a href="https://api.whatsapp.com/send?phone=<?php echo $contact->phone; ?>&text=Hallo%20Kak,%20Saya%20Mau%20Order%20yang%20<?php echo $value->name; ?>,%20terima kasih.." target="_blank" class="btn btn-primary btn-modern py-2 px-4">Choose</a> -->
						</div>
					</div>
				</div>
		<?php }
			if ($key == 3) {
				break;
			}
		} ?>
	</div>
	<div class="container py-5 my-5" id="wedding_package">
		<div class="row">
			<div class="col text-center">
				<a href="<?php echo base_url('wedding_package') ?>" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350">VIEW ALL WEDDING PACKAGE</a>
			</div>
		</div>
	</div>


</div>

<?php $this->load->view('components/foot') ?>

</div>
<?php $this->load->view('templates/footer') ?>