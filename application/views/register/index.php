<?php $this->load->view('templates/header') ?>

<div class="body">
    <?php $this->load->view('components/head') ?>
    <div role="main" class="main">

        <div class="container pt-3 pb-2">
            <form action="<?php echo base_url('register/store') ?>" method="post">
                <div class="row pt-2">

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <h5 class="font-weight-semi-bold">Nama</h5>
                        <input type="text" class="form-control" name="total_guest">
                    </div>

                </div>
                <div class="row pt-2">

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <h5 class="font-weight-semi-bold">Email</h5>
                        <input type="text" class="form-control" name="total_guest">
                    </div>

                </div>

                <div class="row pt-2">

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <h5 class="font-weight-semi-bold">Password</h5>
                        <input type="text" class="form-control" name="total_guest">
                    </div>

                </div>

                <div class="row pt-2">

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <h5 class="font-weight-semi-bold">Password Confirm</h5>
                        <input type="text" class="form-control" name="total_guest">
                    </div>

                </div>

                <div class="row pt-2">

                    <div class="col-lg-2 mt-4 mt-lg-0">
                        <h5 class="font-weight-semi-bold"></h5>
                        <button type="submit" class="form-control"><b>REGISTER</b></button>
                    </div>

                </div>

            </form>

        </div>
    </div>

</div>
<?php $this->load->view('templates/footer') ?>