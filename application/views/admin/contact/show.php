<?php $this->load->view('admin/layouts/top') ?>
<!-- Breadcrumb container start -->
<div class="breadcrumb-container">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/contact') ?>">Contact List</a></li>
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
                                    <input type="text" name="email" value="<?php echo $contact->email; ?>" disabled>
                                    <div class="field-placeholder">Email <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <input type="text" name="facebook" value="<?php echo $contact->facebook; ?>" disabled>
                                    <div class="field-placeholder">Facebook ID <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <input type="text" name="twitter" value="<?php echo $contact->twitter; ?>" disabled>
                                    <div class="field-placeholder">Twitter ID <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <input type="text" name="instagram" value="<?php echo $contact->instagram; ?>" disabled>
                                    <div class="field-placeholder">Instagram <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <input type="text" name="phone" value="<?php echo $contact->phone; ?>" disabled>
                                    <div class="field-placeholder">Phone <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <input type="text" name="opening_hours" value="<?php echo $contact->opening_hours; ?>" disabled>
                                    <div class="field-placeholder">Opening Hours <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper m-0">
                                    <textarea name="address" id="" cols="30" rows="7" disabled><?php echo $contact->address; ?></textarea>
                                    <div class="field-placeholder">Address <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <input type="text" name="about_title" value="<?php echo $contact->about_title; ?>" disabled>
                                    <div class="field-placeholder">About Title <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <img src="<?php echo base_url('uploads/contact/'); echo $contact->about_image; ?>" width="50%" alt="">
                                    <div class="field-placeholder">About Image <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper m-0">
                                    <textarea name="about" id="" cols="30" rows="7" disabled><?php echo $contact->about; ?></textarea>
                                    <div class="field-placeholder">About <span class="text-danger"></span></div>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="account_number" value="<?php echo $contact->account_number; ?>" disabled>
                                        <div class="field-placeholder">Account Number <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" value="<?php echo check_status($contact->status) ?>">
                                    <div class="field-placeholder">Status</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div><br>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="field-wrapper">
                                    <a href="<?php echo base_url('admin/contact') ?>"><button type="submit" class="btn btn-primary">Kembali ke List</button></a>
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