<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/logosumsel.png') ?>" alt="logo" width="50" height="60">
                                    <img src="<?= base_url('assets/img/kemendikbud.png') ?>" alt="logo" width="60" height="60">
                                </div>
                                </br>
                                <div class="text-center">
                                    <h6 class="text-gray-900 mb-4">KNOWLEDGE MANAGEMENT SYSTEM </br>
                                        SEKSI PTK SMK </br>
                                        DINAS PENDIDIKAN PROVINSI SUMATERA SELATAN
                                    </h6>

                                </div>

                                <form class="user" method="post" action="<?= base_url('auth/login'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="email" placeholder="Enter Email Address..." value="<?= set_value('email');  ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>