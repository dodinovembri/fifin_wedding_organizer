<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="UniPro App">
    <meta name="author" content="Login | Administrator">
    <link rel="shortcut icon" href="img/fav.png" />

    <!-- Title -->
    <title>Login</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css') ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/main.css') ?>">

</head>

<body class="authentication">

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->

    <div class="login-container">

        <div class="container-fluid h-100">

            <!-- Row start -->
            <div class="row g-0 h-100">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-about">
                        <div class="slogan">
                            <span>Fifin</span>
                            <span>Wedding</span>
                            <span>Organizer.</span>
                        </div>
                        <div class="about-desc">
                            UniPro a data dashboard is an information management tool that visually tracks, analyzes and displays key performance indicators (KPI), metrics and key data points to monitor the health of a business, department or specific process.
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-wrapper">
                        <form action="<?php echo base_url('auth/login'); ?>" method="POST">
                            <div class="login-screen">
                                <div class="login-body">
                                    <a href="crm.html">
                                        <img src="<?php echo base_url('assets/logo/logo.png') ?>" width="30%" style="margin-bottom: 20px;" alt="iChat">
                                    </a>
                                    <?php $this->load->view('admin/components/flash') ?>
                                    <h6>Welcome back,<br>Please login to your account.</h6>
                                    <div class="field-wrapper">
                                        <input type="email" name="username" autofocus required>
                                        <div class="field-placeholder">Email ID</div>
                                    </div>
                                    <div class="field-wrapper mb-3">
                                        <input type="password" name="password" required>
                                        <div class="field-placeholder">Password</div>
                                    </div>
                                    <div class="actions">
                                        <a href="<?php echo base_url('/') ?>"><button type="button" class="btn btn-secondary">Home</button></a> &nbsp;
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Row end -->

        </div>
    </div>

    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="<?php echo base_url('assets/admin/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/modernizr.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/moment.js') ?>"></script>

    <!-- Main Js Required -->
    <script src="<?php echo base_url('assets/admin/js/main.js') ?>"></script>

</body>

</html>