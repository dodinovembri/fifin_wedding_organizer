<?php $this->load->view('templates/header') ?>
<div class="body">
	<?php $this->load->view('components/head') ?>
	<div role="main" class="main">

		<div class="container mt-2">
			<div class="row mb-4 pb-2">
				<div class="col">
					<p class="text-4 font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">All Wedding Packages! </p>
				</div>
			</div>
		</div>

		<div class="pricing-table pricing-table-no-gap mb-4">
			<?php foreach ($wedding_packages as $key => $value) {

				$CI = &get_instance();
				$CI->load->model(['WeddingPackageDetailModel']);
				$package_details = $CI->WeddingPackageDetailModel->PackageDetail($value->id)->result();

				if ($value->type == 0) { ?>
					<div class="col-md-6 col-lg-3" style="margin-bottom: 50px;">
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
					<div class="col-md-6 col-lg-3" style="margin-bottom: 50px;">
						<div class="plan plan-featured">
							<div class="plan-header bg-primary">
								<h3><?php echo $value->name; ?></h3>
							</div>
							<div class="plan-price">
								<span class="price"><span class="price-unit">Rp.</span>17</span>
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

			} ?>
		</div>

	</div>
</div>
<?php $this->load->view('templates/footer') ?>