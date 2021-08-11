<?php $this->load->view('admin/layouts/top') ?>
<!-- Breadcrumb container start -->
<div class="breadcrumb-container">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Building List</li>
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

        <!-- Card start -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">Building List</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php $this->load->view('admin/components/flash') ?>
                    <a href="<?php echo base_url('admin/building/create') ?>"><button type="button" class="btn btn-primary" style="margin-bottom: 20px;">Add New</button></a>
                    <table id="basicExample" class="table custom-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($buildings as $key => $value) {
                                $no++; ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $value->code; ?></td>
                                    <td><?php echo $value->name; ?></td>
                                    <td style="width: 20%;"><img src="<?php echo base_url('uploads/building/'); echo $value->image; ?>" width="50%" alt=""></td>
                                    <td><?php echo substr($value->description, 0, 50) ?></td>
                                    <td><?php echo check_status($value->status); ?></td>
                                    <td>
                                        <a href="<?php
                                                    echo base_url('admin/building/show/');
                                                    echo $value->id;
                                                    ?>"><span class="icon-eye"></span>&nbsp;</a>
                                        <a href="<?php
                                                    echo base_url('admin/building/edit/');
                                                    echo $value->id;
                                                    ?>"><span class="icon-edit-3"></span></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $value->id; ?>"><span class="icon-trash"></span></a>
                                    </td>
                                </tr>
                                <!-- Modal start -->
                                <div class="modal fade" id="exampleModal<?php echo $value->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure want to delete this data?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <a href="<?php
                                                            echo base_url('admin/building/destroy/');
                                                            echo $value->id;
                                                            ?>"><button type="button" class="btn btn-primary">Delete</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Card end -->

    </div>
</div>
<!-- Row end -->
<?php $this->load->view('admin/layouts/bottom') ?>