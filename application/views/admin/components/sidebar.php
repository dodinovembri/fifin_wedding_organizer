			<!-- Sidebar wrapper start -->
			<nav class="sidebar-wrapper">

				<!-- Sidebar content start -->
				<div class="sidebar-tabs">

					<!-- Tabs nav start -->
					<div class="nav" role="tablist" aria-orientation="vertical">
						<a class="nav-link <?php if ($this->uri->segment(2) == "home" || $this->uri->segment(2) == "feature" || $this->uri->segment(2) == "wedding_package" || $this->uri->segment(2) == "clothes" || $this->uri->segment(2) == "decoration" || $this->uri->segment(2) == "wedding_invitation" ||  $this->uri->segment(2) == "wedding_galleries" ||  $this->uri->segment(2) == "wedding_gallery" || $this->uri->segment(2) == "event"){ echo "active"; } ?>" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="<?php if ($this->uri->segment(2) == "home" || $this->uri->segment(2) == "feature" || $this->uri->segment(2) == "wedding_package" || $this->uri->segment(2) == "clothes" || $this->uri->segment(2) == "decoration" || $this->uri->segment(2) == "wedding_invitation" || $this->uri->segment(2) == "wedding_galleries" || $this->uri->segment(2) == "wedding_gallery" || $this->uri->segment(2) == "event"){ echo "true"; } ?>">
							<i class="icon-home2"></i>
							<span class="nav-link-text">Dashboards</span>
						</a>
						<a class="nav-link <?php if ($this->uri->segment(2) == "banner" || $this->uri->segment(2) == "contact"){ echo "active"; } ?>" id="product-tab" data-bs-toggle="tab" href="#tab-product" role="tab" aria-controls="tab-product" aria-selected="<?php if ($this->uri->segment(2) == "banner" || $this->uri->segment(2) == "contact"){ echo "true"; } ?>">
							<i class="icon-layers2"></i>
							<span class="nav-link-text">Product</span>
						</a>
					</div>
					<!-- Tabs nav end -->

					<!-- Tabs content start -->
					<div class="tab-content">

						<!-- Chat tab -->
						<div class="tab-pane fade <?php if ($this->uri->segment(2) == "home" || $this->uri->segment(2) == "feature" || $this->uri->segment(2) == "wedding_package" || $this->uri->segment(2) == "clothes" || $this->uri->segment(2) == "decoration" || $this->uri->segment(2) == "wedding_invitation" || $this->uri->segment(2) == "wedding_galleries" || $this->uri->segment(2) == "wedding_gallery" || $this->uri->segment(2) == "event" || $this->uri->segment(2) == "profile"){ echo "show active"; } ?>" id="tab-home" role="tabpanel" aria-labelledby="home-tab">

							<!-- Tab content header start -->
							<div class="tab-pane-header">
								Home
							</div>
							<!-- Tab content header end -->

							<!-- Sidebar menu starts -->
							<div class="sidebarMenuScroll">
								<div class="sidebar-menu">
									<ul>
										<li>
											<a href="<?php echo base_url('admin/home') ?>" class="<?php if ($this->uri->segment(2) == "home"){ echo "current-page"; } ?>">Dashboard</a>
										</li>
										<li>
											<a href="<?php echo base_url('admin/wedding_package') ?>" class="<?php if ($this->uri->segment(2) == "wedding_package"){ echo "current-page"; } ?>">Wedding Package</a>
										</li>
										<li>
											<a href="<?php echo base_url('admin/wedding_invitation') ?>" class="<?php if ($this->uri->segment(2) == "wedding_invitation" || $this->uri->segment(2) == "wedding_galleries" || $this->uri->segment(2) == "wedding_gallery"){ echo "current-page"; } ?>">Wedding Invitation</a>
										</li>
										<li>
											<a href="<?php echo base_url('admin/event') ?>" class="<?php if ($this->uri->segment(2) == "event"){ echo "current-page"; } ?>">Events</a>
										</li>
										<li>
											<a href="<?php echo base_url('admin/feature') ?>" class="<?php if ($this->uri->segment(2) == "feature"){ echo "current-page"; } ?>">Features</a>
										</li>
										<li>
											<a href="<?php echo base_url('admin/clothes') ?>" class="<?php if ($this->uri->segment(2) == "clothes"){ echo "current-page"; } ?>">Clothes</a>
										</li>
										<li>
											<a href="<?php echo base_url('admin/decoration') ?>" class="<?php if ($this->uri->segment(2) == "decoration"){ echo "current-page"; } ?>">Decoration</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Sidebar menu ends -->

						</div>

						<!-- Pages tab -->
						<div class="tab-pane fade <?php if ($this->uri->segment(2) == "banner" || $this->uri->segment(2) == "contact"){ echo "show active"; } ?>" id="tab-product" role="tabpanel" aria-labelledby="product-tab">

							<!-- Tab content header start -->
							<div class="tab-pane-header">
								Frontend Setting
							</div>
							<!-- Tab content header end -->

							<!-- Sidebar menu starts -->
							<div class="sidebarMenuScroll">
								<div class="sidebar-menu">
									<ul>
										<li>
											<a href="<?php echo base_url('admin/banner') ?>" class="<?php if ($this->uri->segment(2) == "banner"){ echo "current-page"; } ?>">Banner</a>
										</li>
										<li>
											<a href="<?php echo base_url('admin/contact') ?>" class="<?php if ($this->uri->segment(2) == "contact"){ echo "current-page"; } ?>">Contact Information</a>
										</li> 
									</ul>
								</div>
							</div>
							<!-- Sidebar menu ends -->

						</div>

					</div>
					<!-- Tabs content end -->

				</div>
				<!-- Sidebar content end -->

			</nav>
			<!-- Sidebar wrapper end -->