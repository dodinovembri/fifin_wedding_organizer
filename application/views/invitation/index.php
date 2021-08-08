<?php $this->load->view('templates/header') ?>
<div class="body">
	<?php $this->load->view('components/head') ?>
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