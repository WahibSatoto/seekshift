<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Administrator</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>backend/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>backend/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>backend/modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>backend/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>backend/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>backend/img/2.png" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Daftar Recruiter</h4>
                            </div>

                            <div class="card-body">
                                <?= session()->getFlashdata('errUsername') ?>
                                <?= session()->getFlashdata('errPassword') ?>
                                <?= form_open('login/cekUser') ?>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="username">Usrname</label>
                                            <input type="text" name="username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength" name="userpassword">
                                           
                                        </div>

                                    </div>

                                    
                                    </div>

                                    <div class="form-group">
                                       <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                                    </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; WahibDev 2023
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>backend/modules/jquery.min.js"></script>
    <script src="<?= base_url() ?>backend/modules/popper.js"></script>
    <script src="<?= base_url() ?>backend/modules/tooltip.js"></script>
    <script src="<?= base_url() ?>backend/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>backend/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>backend/modules/moment.min.js"></script>
    <script src="<?= base_url() ?>backend/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>backend/js/scripts.js"></script>
    <script src="<?= base_url() ?>backend/js/custom.js"></script>


</body>

</html>