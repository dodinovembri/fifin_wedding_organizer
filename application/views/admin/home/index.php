		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
            <?php $this->load->view('admin/components/sidebar') ?>

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

                <?php $this->load->view('admin/components/header') ?>

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon">
										<i class="icon-shopping-bag1"></i>
									</div>
									<div class="sale-details">
										<h2><?php echo $total_wedding_package ?></h2>
										<p>Wedding Packages</p>
									</div>
									<div class="sale-graph">
										<div id="sparklineLine1"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon">
										<i class="icon-shopping-bag1"></i>
									</div>
									<div class="sale-details">
										<h2><?php echo $total_wedding_invitation ?></h2>
										<p>Wedding Invitations</p>
									</div>
									<div class="sale-graph">
										<div id="sparklineLine2"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="stats-tile">
									<div class="sale-icon">
										<i class="icon-check-circle"></i>
									</div>
									<div class="sale-details">
										<h2><?php echo $total_event ?></h2>
										<p>Events</p>
									</div>
									<div class="sale-graph">
										<div id="sparklineLine3"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

					<!-- App footer start -->
					<div class="app-footer">© Uni Pro Admin 2021</div>
					<!-- App footer end -->

				</div>
				<!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

		</div>
		<!-- Page wrapper end -->