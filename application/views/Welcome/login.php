<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets'); ?>/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/anggota/img/delpro.jpg" rel="icon">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets'); ?>/login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/login/css/main.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src="<?= base_url('assets'); ?>/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets'); ?>/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets'); ?>/login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('assets'); ?>/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets'); ?>/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets'); ?>/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url('assets'); ?>/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets'); ?>/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets'); ?>/login/js/main.js"></script>

</head>
<div class="container">
    <?php if ($this->session->flashdata('email')) : ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    Email / Password anda mungkin <strong>salah, coba ulang lagi!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="false">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif ?>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url('<?= base_url('assets') ?>/login/images/bg-01.jpg')">
                    <span class="login100-form-title-1">
                        Login
                    </span>
                </div>

                <form class="login100-form validate-form" method="post" action="<?= base_url('Welcome/login'); ?>">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Masukkan email">
                        <small class="text-danger"><?= form_error('email'); ?></small>

                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Masukkan password">
                        <small class="text-danger"><?= form_error('password'); ?></small>

                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Ingat saya? <br>
                            </label>
                            <a href="<?= base_url('Welcome/registrasi'); ?>" class="txt1">
                                Ingin menjadi anggota? <u>Daftar disini</u>
                            </a>


                        </div>


                    </div>

                    <div class="container-login100-form-btn">
                        <div class="col-md-6">

                            <button class="btn btn-info">
                                Login
                            </button>
                        </div>
                        <div class="col-md-6">

                            <a href="<?= base_url(''); ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin ?')">
                                Batal
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

    </body>

</html>