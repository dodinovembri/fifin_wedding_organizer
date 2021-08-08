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
                                            echo base_url('admin/wedding_package/update/');
                                            echo $wedding_package->id;
                                            ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="code" value="<?php echo $wedding_package->code; ?>" required>
                                        <div class="field-placeholder">Code <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="name" value="<?php echo $wedding_package->name; ?>" required>
                                        <div class="field-placeholder">Name <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="price" value="<?php echo $wedding_package->price; ?>" required>
                                        <div class="field-placeholder">Price <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="file" name="image">
                                        <div class="field-placeholder">Image <span class="text-danger">*</span></div>
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
                                        <?php foreach ($wedding_package_details as $key => $value) { ?>
                                            <input type="checkbox" name="features[]" value="<?php echo $value->id; ?>" placeholder="Code" checked> <?php echo $value->feature_name; ?> <br>
                                        <?php } ?>
                                        <?php foreach ($features as $key => $value) { ?>
                                            <input type="checkbox" name="features[]" value="<?php echo $value->id; ?>" placeholder="Code"> <?php echo $value->name; ?> <br>
                                        <?php } ?>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 20px;">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select name="type" class="form-select" id="formSelect">
                                            <option value="<?php echo $wedding_package->type; ?>"><?php echo check_type($wedding_package->type); ?></option>
                                            <option value="1">Featured</option>
                                            <option value="0">Normal</option>
                                        </select>
                                        <div class="field-placeholder">Type <span class="text-danger">*</span></div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 20px;">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select name="status" class="form-select" id="formSelect">
                                            <option value="<?php echo $wedding_package->status ?>"><?php echo check_status($wedding_package->status) ?></option>
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
                                        <a href="<?php echo base_url('admin/wedding_package') ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
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