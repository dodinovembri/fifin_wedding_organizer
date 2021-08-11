<?php $this->load->view('admin/layouts/top') ?>
<!-- Breadcrumb container start -->
<div class="breadcrumb-container">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/event') ?>">Event List</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create New</li>
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
                <div class="card-title">Create New</div>
            </div>
            <div class="card-body">

                <div id="example-form">

                    <section>
                        <h6 class="h-0 m-0">&nbsp;</h6>
                        <div class="row gutters">
                            <form action="<?php echo base_url('admin/event/store') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="code" required>
                                        <div class="field-placeholder">Code <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="text" name="title" required>
                                        <div class="field-placeholder">Title <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select name="building_id" class="form-select" id="formSelect">
                                            <?php foreach ($buildings as $key => $value) { ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->name; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="field-placeholder">Building <span class="text-danger">*</span></div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="date" name="start_date" required>
                                        <div class="field-placeholder">Start Date <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <input type="date" name="end_date" required>
                                        <div class="field-placeholder">End Date <span class="text-danger">*</span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper m-0">
                                        <textarea name="description" id="" cols="30" rows="7"></textarea>
                                        <div class="field-placeholder">Description <span class="text-danger"></span></div>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select name="status" class="form-select" id="formSelect">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        <div class="field-placeholder">Status <span class="text-danger">*</span></div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="<?php echo base_url('admin/event') ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
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