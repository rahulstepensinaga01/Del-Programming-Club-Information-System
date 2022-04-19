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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/bootstrap.min.css">

    <script src="<?= base_url('assets'); ?>/bootstrap.min-global.js"></script>
    <script src="<?= base_url('assets'); ?>/jquery.min-global.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/anggota/img/delpro.jpg" rel="icon">

    <!-- template -->
    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/css/aos.css">
    <link href="<?= base_url('assets') ?>/template/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/template/css/style.css">

</head>

<?php if ($this->session->flashdata('message')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Registrasi <strong>Berhasil</strong> <?= $this->session->flashdata('message'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 d-flex">
                        <a href="<?= base_url('Welcome') ?>" class="site-logo">
                            Del Programming Club
                        </a>

                        <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>

                    </div>
                    <div class="col-12 col-lg-6 ml-auto d-flex">
                        <div class="ml-md-auto top-social d-none d-lg-inline-block">
                            <!-- <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a> -->
                        </div>
                        <div class="ml-md-auto top-social d-none d-lg-inline-block">
                            <a href="<?= base_url('Welcome/registrasi'); ?>" class="d-inline-block p-3"><span><i class="fas fa-user-plus"></i> </span>Register</a>
                            <a href="<?= base_url('Welcome/login') ?>" class="d-inline-block p-3"><span><i class="fas fa-sign-in-alt"></i></span>Login</a>
                        </div>



                    </div>
                    <div class="col-6 d-block d-lg-none text-right">

                    </div>
                </div>
            </div>




            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mr-auto">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                    <li class="active">
                                        <a href="<?= base_url('Welcome'); ?>" class="nav-link text-left">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('Welcome/events'); ?>" class="nav-link text-left">Events</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('Welcome/dokumentasi') ?>" class="nav-link text-left">Dokumentasi</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('Welcome/visimisi') ?>" class="nav-link text-left">Visi & Misi</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('Welcome/DaftarAnggota') ?>" class="nav-link text-left">Anggota</a>
                                    </li>

                                    <li><a href="<?= base_url('Welcome/aboutus') ?>" class="nav-link text-left">About Us</a></li>
                                </ul>
                            </nav>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="site-section py-0">
            <div class="owl-carousel hero-slide owl-style">

                <div class="site-section">
                    <div class="container">
                        <div class="half-post-entry d-block d-lg-flex bg-light">
                            <div class="img-bg" style="background-image: url('<?= base_url('assets') ?>/template/images/delpro.jpg')"></div>
                            <div class="contents">
                                <span class="caption">Informasi</span>
                                <h2><a href="#">Delpro sudah berdiri sejak tahun 2013</a></h2>
                                <p class="mb-3">Dengan latar belakang sebagai tempat perkumpulan mahasiswa/mahasiswi IT DEL yang sering dan suka mengikuti CP (<i>Competitive Programming</i>)
                                    diberbagai <i>event</i> </p>



                            </div>
                        </div>
                    </div>
                </div>

                <div class="site-section">
                    <div class="container">
                        <div class="half-post-entry d-block d-lg-flex bg-light">
                            <div class="img-bg" style="background-image: url('<?= base_url('assets') ?>/template/images/sharing.jpg')"></div>
                            <div class="contents">
                                <span class="caption">Kegiatan</span>
                                <h2><a href="#">Event</a></h2>
                                <p class="mb-3">Sharing ilmu sebagai pelatihan dasar pemrograman.
                                    Pelatihan ini dilakukan guna mengajarkan pada mahasiswa/i mengenai dasar pemrograman serta mempersiapkan para calon anggota Delpro untuk mengikuti test masuk.

                                </p>



                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>Penerimaan anggota</h2>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image: url('<?= base_url('assets') ?>/template/images/test.jpg')"></div>
                            <div class="contents">
                                <h2><a href="#">Seleksi dan tahap test</a></h2>
                                <p class="mb-3">Seluruh mahasiswa yang ingin bergabung ke dalam UKM Delpro dapat mendaftarkan dirinya melalui 2 cara, yaitu <i>online</i> dan secara langsung kepada BPH dari UKM ini.
                                    Seluruh mahasiswa yang sudah mendaftar baik <i>online & offline</i> akan diseleksi dijadwal yang sudah ditentukan oleh BPH klub.</p>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>Kompetisi</h2>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image: url('<?= base_url('assets') ?>/template/images/acm.png')"></div>
                            <div class="contents">
                                <h2><a href="#">Finalis ACMICPC pada tahun 2016 <br><br> <br></a></h2>
                                <div class="post-meta">
                                </div>
                            </div>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image: url('<?= base_url('assets') ?>/template/images/blackchinnese.jpeg')"></div>
                            <div class="contents">
                                <h2><a href="#">ACMICPC Maranatha pada tahun 2019<br><br> <br></a></h2>
                                <div class="post-meta">
                                </div>
                            </div>
                        </div>

                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image: url('<?= base_url('assets') ?>/template/images/acmicpc.jpg')"></div>
                            <div class="contents">
                                <h2><a href="#">Finalis Mikroskil pada tahun 2019<br><br> <br></a></h2>
                                <div class="post-meta">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END section -->

    <div class="py-0">
        <div class="container">
            <div class="half-post-entry d-block d-lg-flex bg-light">
                <div class="img-bg" style="background-image: url('<?= base_url('assets') ?>/template/images/sosialisaisi.jpg')"></div>
                <div class="contents">
                    <span class="caption">Events</span>
                    <h2><a href="#">Sosialiasi Apa itu Delpro?</a></h2>
                    <p class="mb-3">
                        Sosialiasi ini bertujuan untuk mengenalkan apa itu Delpro kepada seluruh mahasiswa/mahasiswi IT DEL dan membukakan jalan untuk mengembangkan bakat dan minat
                        mahasiswa dalam <i>Programming</p>
                    </p>

                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | KELOMPOK 12 PA1 D3TI 2019</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- .site-wrap -->


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15" /></svg></div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets'); ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets'); ?>/js/demo/chart-pie-demo.js"></script>


    <!-- template -->
    <script src="<?= base_url('assets') ?>/template/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/jquery-ui.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/popper.min.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/aos.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/jquery.fancybox.min.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/jquery.sticky.js"></script>
    <script src="<?= base_url('assets') ?>/template/js/jquery.mb.YTPlayer.min.js"></script>




    <script src="<?= base_url('assets') ?>/template/js/main.js"></script>
</body>

</html>