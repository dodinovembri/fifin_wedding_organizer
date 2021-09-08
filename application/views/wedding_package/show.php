<?php $this->load->view('templates/header') ?>
<div class="body">
	<?php $this->load->view('components/head') ?>
	<div role="main" class="main">
		<img src="" alt="">

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 col-xl-12 text-center">
					<div class="overflow-hidden">
						<h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Detail Paket</h2> <br>
					</div>
					<img src="<?php echo base_url('uploads/wedding_package/'); echo $wedding_package->image ?>" alt="">
				</div>
			</div> 
			<hr>
			<div class="row row-gutter-sm mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
				<?php foreach ($wedding_packages as $key => $value) { ?>
					<div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
						<a href="void::" class="text-decoration-none">
							<div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
								<h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0"><?php echo $value->feature_name; ?></h3>
								<div class="thumb-info-wrapper"> 
									<p><?php echo htmlspecialchars_decode($value->description) ?></p>
								</div>
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
			<div class="row">
				<div class="col text-center">
					<a href="https://api.whatsapp.com/send?phone=<?php echo $contact->phone; ?>&text=Hallo%20Kak,%20Saya%20Mau%20Order%20yang%20<?php echo $wedding_package->name; ?>,%20terima kasih.." target="_blank" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3">ORDER THIS</a>
				</div>
			</div><br><br>
		</div>
	</div>
</div>
<?php $this->load->view('templates/footer') ?>