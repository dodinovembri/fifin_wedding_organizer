<?php $this->load->view('admin/layouts/top') ?>
<!-- Breadcrumb container start -->
<div class="breadcrumb-container">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/wedding_invitation') ?>">Wedding Invitation List</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/wedding_galleries/'); echo $this->session->userdata('wedding_invitation_id') ?>">Wedding Gallery List</a></li>
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
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <img src="<?php echo base_url('uploads/wedding_gallery/'); echo $wedding_gallery->image; ?>" width="50%" alt="">
                                    <div class="field-placeholder">Image</div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper m-0">
                                    <textarea cols="30" rows="3"><?php echo $wedding_gallery->description ?></textarea>
                                    <div class="field-placeholder">Description</div>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" value="<?php echo check_status($wedding_gallery->status) ?>">
                                    <div class="field-placeholder">Status</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div><br>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <a href="<?php echo base_url('admin/wedding_galleries/'); echo $this->session->userdata('wedding_invitation_id') ?>"><button type="submit" class="btn btn-primary">Kembali ke List</button></a>
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