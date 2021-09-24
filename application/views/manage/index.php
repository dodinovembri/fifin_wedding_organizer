<?php $this->load->view('templates/header') ?>

<div class="body">
    <?php $this->load->view('components/head') ?>
    <div role="main" class="main">

        <div class="container">
            <table class="table table-responsive">
                <thead>
                    <td>Order No</td>
                    <td>Start Date</td>
                    <td>Total Guest</td>
                    <td>Price</td>
                    <td>Status</td>
                    <td>Actions</td>
                </thead>
                <tbody>
                    <?php foreach ($orders as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value->id ?></td>
                            <td><?php echo $value->start_date ?></td>
                            <td><?php echo $value->total_guest ?></td>
                            <td>Rp. <?php echo $value->price ?></td>
                            <td>
                                <?php if ($value->status == 1) {
                                    echo "Unpaid";
                                }elseif ($value->status == 2) {
                                    echo "Paid";
                                } ?>
                            </td>
                            <td><a href="<?php echo base_url('manage/edit/'); echo $value->id ?>"><button type="button" class="form-control" style="width: 60%;">Verification Payment</button></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<?php $this->load->view('templates/footer') ?>