<?php $this->load->view('admin/layouts/top') ?>
<!-- Breadcrumb container start -->
<div class="breadcrumb-container">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/clothes') ?>">Clothes List</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Breadcrumb container end -->

<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="card">
            <div class="card-header">
                <div class="card-title">Details</div>
            </div>
            <div class="card-body">

                <div id="example-form">

                    <section>
                        <h6 class="h-0 m-0">&nbsp;</h6>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <input type="text" name="code" value="<?php echo $clothes->code ?>" disabled>
                                    <div class="field-placeholder">Code <span class="text-danger">*</span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <input type="text" name="name" value="<?php echo $clothes->name ?>" disabled>
                                    <div class="field-placeholder">Name <span class="text-danger">*</span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <img src="<?php
                                                echo base_url('uploads/clothes/');
                                                echo $clothes->image;
                                                ?>" width="50%" alt="">
                                    <div class="field-placeholder">Image <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper m-0">
                                    <textarea name="description" id="" cols="30" rows="7"><?php echo $clothes->description ?></textarea>
                                    <div class="field-placeholder">Description <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" value="<?php echo check_status($clothes->status) ?>">
                                    <div class="field-placeholder">Status</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div><br>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <a href="<?php echo base_url('admin/clothes') ?>"><button type="submit" class="btn btn-primary">Kembali ke List</button></a>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>

            </div>
        </div>

    </div>
</div>
<!-- Row end -->
<?php $this->load->view('admin/layouts/bottom') ?>