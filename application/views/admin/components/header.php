				<!-- Page header starts -->
				<div class="page-header">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

							<!-- Search container start -->
							<div class="search-container">

								<!-- Toggle sidebar start -->
								<div class="toggle-sidebar" id="toggle-sidebar">
									<i class="icon-menu"></i>
								</div>
								<!-- Toggle sidebar end -->

							</div>
							<!-- Search container end -->

						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">
							<?php
							$CI = &get_instance();
							$CI->load->model(['UserModel']);
							$user_id = $this->session->userdata('id');
							$user = $CI->UserModel->getById($user_id)->row();
							?>
							<!-- Header actions start -->
							<ul class="header-actions">
								<li class="dropdown">
									<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<span class="avatar">
											<img src="<?php echo base_url('uploads/profile/');
														echo $user->image; ?>" alt="User Avatar">											
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
										<div class="header-profile-actions">
											<a href="<?php echo base_url('admin/profile') ?>"><i class="icon-user1"></i>Profile</a>
											<a href="<?php echo base_url('admin/profile/setting') ?>"><i class="icon-settings1"></i>Settings</a>
											<a href="<?php echo base_url('logout') ?>"><i class="icon-log-out1"></i>Logout</a>
										</div>
									</div>
								</li>
							</ul>
							<!-- Header actions end -->

						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Page header ends -->