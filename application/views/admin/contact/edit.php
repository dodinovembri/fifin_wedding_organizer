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
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                <div class="card-title">Edit</div>
            </div>
            <div class="card-body">

                <div id="example-form">

                    <section>
                        <h6 class="h-0 m-0">&nbsp;</h6>
                        <div class="row gutters">
                            <form action="<?php
                                            echo base_url('admin/contact/update/');
                                            echo $contact->id;
                                            ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="email" value="<?php echo $contact->email; ?>" required>
                                        <div class="field-placeholder">Email <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="facebook" value="<?php echo $contact->facebook; ?>" required>
                                        <div class="field-placeholder">Facebook ID <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="twitter" value="<?php echo $contact->twitter; ?>" required>
                                        <div class="field-placeholder">Twitter ID <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="instagram" value="<?php echo $contact->instagram; ?>" required>
                                        <div class="field-placeholder">Instagram <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="phone" value="<?php echo $contact->phone; ?>" required>
                                        <div class="field-placeholder">Phone <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="opening_hours" value="<?php echo $contact->opening_hours; ?>" required>
                                        <div class="field-placeholder">Opening Hours <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper m-0">
                                        <textarea name="address" id="" cols="30" rows="7" required><?php echo $contact->address; ?></textarea>
                                        <div class="field-placeholder">Address <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="about_title" value="<?php echo $contact->about_title; ?>" required>
                                        <div class="field-placeholder">About Title <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="file" name="image">
                                        <div class="field-placeholder">About Image <span class="text-danger"></span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper m-0">
                                        <textarea name="about" id="" cols="30" rows="7" required><?php echo $contact->about; ?></textarea>
                                        <div class="field-placeholder">About <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select name="status" class="form-select" id="formSelect">
                                            <option value="<?php echo $contact->status ?>"><?php echo check_status($contact->status) ?></option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        <div class="field-placeholder">Status <span class="text-danger">*</span></div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="<?php echo base_url('admin/contact') ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </section>

                </div>

            </div>
        </div>

    </div>
</div>
<!-- Row end -->
<?php $this->load->view('admin/layouts/bottom') ?>