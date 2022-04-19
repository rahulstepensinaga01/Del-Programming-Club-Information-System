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
    <div class="container">
        <?php if ($this->session->flashdata('message')) : ?>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Register Akun <strong>Berhasil</strong><?php $this->session->flashdata(); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('login')) : ?>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        Email belum terdaftar!
                    </div>
                </div>
            </div>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('logout')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                Anda telah Logout!
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if ($this->session->flashdata('aktif')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                Email belum aktif!
            </div>
        </div>
    </div>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('password')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                Password salah!
            </div>
        </div>
    </div>
    </div>
<?php endif; ?>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title">
                <span class="login100-form-title-1">
                    registrasi delpro
                </span>
            </div>

            <form class="login100-form validate-form" method="post" action="<?= base_url('Welcome/registrasi'); ?>">
                <div class="wrap-input100 validate-input m-b-26" data-validate="NIM is required">
                    <span class="label-input100">NIM</span>
                    <input class="input100" type="text" name="nim" placeholder="Masukkan NIM">
                    <small class="text-danger"><?= form_error('nim'); ?></small>
                    <span class="focus-input100"></span>

                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate="Nama is required">
                    <span class="label-input100">Nama</span>
                    <input class="input100" type="text" name="nama" placeholder="Masukkan Nama">
                    <small class="text-danger"><?= form_error('nama'); ?></small>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-18" data-validate="Prodi is required">
                    <span class="label-input100">Prodi</span>
                    <select class="form-control" id="exampleFormControlSelect1" name="prodi">
                        <option>Pilih prodi</option>
                        <option value="D3 Teknologi Informasi">D3 Teknologi Informasi</option>
                        <option value="D4 Teknologi Rekayasa Perangkat Lunak">D4 Teknologi Rekayasa Perangkat Lunak</option>
                        <option value="D3 Teknologi Komputer">D3 Teknologi Komputer</option>
                        <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                        <option value="S1 Informatika">S1 Informatika</option>
                        <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                        <option value="S1 Manajemen Rekayasa">S1 Manajemen Rekayasa</option>
                        <option value="S1 Bioproses">S1 Bioproses</option>
                    </select>
                    <small class="text-danger"><?= form_error('prodi'); ?></small>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-18" data-validate="Angkatan is required">
                    <span class="label-input100">Angkatan</span>
                    <input class="input100" type="text" name="angkatan" placeholder="Masukkan Angkatan">
                    <small class="text-danger"><?= form_error('angkatan'); ?></small>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-18" data-validate="Email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" placeholder="Masukkan Email">
                    <small class="text-danger"><?= form_error('email'); ?></small>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Masukkan password">
                    <small class="text-danger"><?= form_error('password'); ?></small>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-18" data-validate="Password2 is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password2" placeholder="Confirm password">
                    <small class="text-danger"><?= form_error('password2'); ?></small>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-18" data-validate="Motivasi is required">
                    <span class="label-input100">Motivasi</span>
                    <textarea class="input100" name="motivasi" placeholder="Motivasi anda memasuki Delpro"></textarea>
                    <small class="text-danger"><?= form_error('motivasi'); ?></small>
                    <span class="focus-input100"></span>
                </div>



                <div class="container-login100-form-btn">
                    <div class="col-md-6">

                        <button type="submit" class="btn btn-info">
                            Daftar
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