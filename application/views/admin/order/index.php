<?php $this->load->view('admin/layouts/top') ?>
<!-- Breadcrumb container start -->
<div class="breadcrumb-container">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order List</li>
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
                <div class="card-title">Order List</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php $this->load->view('admin/components/flash') ?>
                    <table id="basicExample" class="table custom-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Building</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Total Guest</th>
                                <th>Price</th>
                                <th>Payment Note</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($orders as $key => $value) {
                                $no++; ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $value->title; ?></td>
                                    <td><?php  $CI = &get_instance();
                                        $CI->load->model(['BuildingModel']);
                                        $al = $CI->BuildingModel->getById($value->building_id)->row();
                                        echo $al->name; ?>
                                    </td>
                                    <td><?php echo $value->start_date; ?></td>
                                    <td><?php echo $value->end_date; ?></td>
                                    <td><?php echo $value->total_guest; ?></td>
                                    <td><?php echo $value->price; ?></td>
                                    <td><a href=""><?php echo $value->payment_note; ?></a></td>
                                    <td><?php if ($value->status == 1) {
                                        echo "Unpaid";
                                    }elseif ($value->status == 2) {
                                        echo "Paid";
                                    }  ?></td>
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
                                                <a href="<?php echo base_url('admin/order/destroy/');
                                                            echo $value->id; ?>"><button type="button" class="btn btn-primary">Delete</button></a>
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