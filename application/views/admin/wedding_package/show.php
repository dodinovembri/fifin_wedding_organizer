<?php $this->load->view('admin/layouts/top') ?>
<!-- Breadcrumb container start -->
<div class="breadcrumb-container">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/wedding_package') ?>">Wedding Package List</a></li>
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
                                    <input type="text" name="code" value="<?php echo $wedding_package->code ?>" disabled>
                                    <div class="field-placeholder">Code <span class="text-danger">*</span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <input type="text" name="name" value="<?php echo $wedding_package->name ?>" disabled>
                                    <div class="field-placeholder">Name <span class="text-danger">*</span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <img src="<?php
                                                echo base_url('uploads/wedding_package/');
                                                echo $wedding_package->image;
                                                ?>" width="50%" alt="">
                                    <div class="field-placeholder">Image <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper m-0">
                                    <textarea name="description" id="" cols="30" rows="7"><?php echo $wedding_package->description ?></textarea>
                                    <div class="field-placeholder">Description <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 10px;">
                                <p>Select Feature for this Wedding Package.</p>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-left: 10px; margin-top:10px">
                                    <ul style="list-style-type:circle; margin-left: 20px">
                                        <?php foreach ($wedding_package_details as $key => $value) { ?>
                                            <li><?php echo $value->feature_name; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 20px;">

                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" value="<?php echo check_type($wedding_package->type) ?>" disabled>
                                    <div class="field-placeholder">Type</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" value="<?php echo check_status($wedding_package->status) ?>" disabled>
                                    <div class="field-placeholder">Status</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div><br>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <a href="<?php echo base_url('admin/wedding_package') ?>"><button type="submit" class="btn btn-primary">Kembali ke List</button></a>
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