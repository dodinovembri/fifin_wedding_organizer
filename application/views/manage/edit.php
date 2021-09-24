<?php $this->load->view('templates/header') ?>

<div class="body">
    <?php $this->load->view('components/head') ?>
    <div role="main" class="main">

        <div class="container">
            <form action="<?php echo base_url('manage/update/'); echo $order->id; ?>" method="post" enctype="multipart/form-data">
                <div class="row pt-2">

                    <div class="col-lg-2 mt-4 mt-lg-0">
                        <aside class="sidebar">	
                            <h5 class="font-weight-semi-bold">Order Id</h5>
                            <input type="text" class="form-control" name="date" value="<?php echo $order->id ?>" Readonly>
                        </aside>
                    </div>

                    <div class="col-lg-2 mt-4 mt-lg-0">
                        <aside class="sidebar">	
                            <h5 class="font-weight-semi-bold">Tanggal</h5>
                            <input type="date" class="form-control" name="date" required>
                        </aside>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <aside class="sidebar">	
                            <h5 class="font-weight-semi-bold">Bukti Transfer</h5>
                            <input type="file" class="form-control" name="image" required>
                        </aside>
                    </div>

                    <div class="col-lg-2 mt-4 mt-lg-0">
                        <aside class="sidebar">	
                            <h5 class="font-weight-semi-bold">Submit</h5>
                            <button type="submit" class="form-control">Submit</button>
                        </aside>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<?php $this->load->view('templates/footer') ?>