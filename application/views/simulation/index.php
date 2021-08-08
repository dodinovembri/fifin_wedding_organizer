
    <?php $this->load->view('templates/header') ?>

		<div class="body">
			<?php $this->load->view('components/head') ?>		
			<div role="main" class="main">

				<div class="container pt-3 pb-2">

					<div class="row pt-2">
						<div class="col-lg-2">
							<aside class="sidebar">	
								<h5 class="font-weight-semi-bold">Decoration</h5>
								<ul class="nav nav-list flex-column mb-5">
									<?php foreach ($decorations as $key => $value) { ?>
										<li class="nav-item"><a class="nav-link" href="<?php echo base_url('simulations/decoration/'); echo $value->id; ?>"><?php echo $value->name ?></a></li>
									<?php } ?>
								</ul>
							</aside>
						</div>
						<div class="col-lg-8">

                        <div class="post-image">
                            <a href="#">
                                <img src="<?php echo base_url('uploads/decoration/'); echo $decoration->image; ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                <img src="<?php echo base_url('uploads/clothes/'); echo $clothes->image; ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="margin-top: -400px; margin-left: 200px; background: none;" width="25%" alt="" />
                            </a>
                        </div>

                        <div>
                            <p>Dekorasi: <b><?php echo $decoration->name ?></b> Dengan Pakaian: <b><?php echo $clothes->name ?></b></p>
                        </div>
							
						</div>
                        <div class="col-lg-2 mt-4 mt-lg-0">
							<aside class="sidebar">	
								<h5 class="font-weight-semi-bold">Clothes</h5>
								<ul class="nav nav-list flex-column mb-5">
									<?php foreach ($clothess as $key => $value) { ?>
										<li class="nav-item"><a class="nav-link" href="<?php echo base_url('simulations/clothes/'); echo $value->id; ?>"><?php echo $value->name ?></a></li>
									<?php } ?>
								</ul>
							</aside>
						</div>

					</div>

				</div>				
			</div> 

		</div>
    <?php $this->load->view('templates/footer') ?>