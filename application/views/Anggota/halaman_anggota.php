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
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vendor/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/bootstrap.min.css">

    <script src="<?= base_url('assets'); ?>/bootstrap.min-global.js"></script>
    <script src="<?= base_url('assets'); ?>/jquery.min-global.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- template -->
    <link href="<?= base_url('assets') ?>/anggota/img/delpro.jpg" rel="icon">
    <link href="<?= base_url('assets') ?>/anggota/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets') ?>/anggota/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('assets') ?>/anggota/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="<?= base_url('assets') ?>/anggota/stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="<?= base_url('assets') ?>/anggota/stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets') ?>/anggota/css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/anggota/css/style-responsive.css" rel="stylesheet">
    <script src="<?= base_url('assets') ?>/anggota/lib/chart-master/Chart.js"></script>



</head>

<?php if ($this->session->flashdata('edit')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                Berhasil <strong>mengubah profile</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif ?>
<?php if ($this->session->flashdata('hapus')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                Berhasil <strong>menghapus data</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif ?>

<body id="page-top">
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="<?= base_url('Anggota') ?>" class="logo"><b>DEL<span>PRO</span><i class="fas fa-code"></i></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">

                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">

                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->

                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?= base_url('Anggota/logout') ?>">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="<?= base_url(); ?>Anggota/edit_profile/<?= $user['nim'] ?>"><i width="80" class="fas fa-user-circle img-circle"></i> <br> Edit Profile</a></p>
                    <!-- <a href="<?= base_url(); ?>Admin/edit_anggota/<?= $Gota['nim']; ?>" class="badge badge-primary float-right">Edit</a> -->
                    <h5 class="centered"><?= $user['nama']; ?></h5>
                    <li class="mt">
                        <a class="active" href="<?= base_url('Anggota/halaman_anggota'); ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="<?= base_url('Anggota/DaftarAnggota') ?>">
                            <i class="fas fa-users"></i> <span>Lihat Anggota</span>
                        </a>

                    </li>
                    <li class="sub-menu">
                        <a href="<?= base_url('Anggota/lihattutorial') ?>">
                            <i class="fas fa-book-open"></i> <span>Tutorial</span>
                        </a>

                    </li>
                    <li class="sub-menu">
                        <a href="<?= base_url('Anggota/lihatpengumuman') ?>">
                            <i class="fas fa-bullhorn"></i> <span>Pengumuman</span>
                        </a>

                    </li>
                    <li class="sub-menu">
                        <a href="<?= base_url('Anggota/DaftarTools') ?>">
                            <i class="fas fa-toolbox"></i> <span>Tools</span>
                        </a>

                    </li>
                    <li class="sub-menu">
                        <a href="<?= base_url('Anggota/DaftarPerlombaan') ?>">
                            <i class="fas fa-calendar-week"></i> <span>Events</span>
                        </a>

                    </li>
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-9 main-chart">
                        <!--CUSTOM CHART START -->
                        <div class="border-head">
                            <h3>Dashboard</h3>
                        </div>

                        <!--custom chart end-->
                        <div class="">
                            <div class="col-md-12 mb">
                                <div class="message-p pn">

                                    <div class="row">

                                        <div class="col-md-9">
                                            <p>
                                                Apakah anda tertarik mengikuti perlombaan ?
                                                <br>
                                                Berikut Perlombaan yang dapat anda ikuti :
                                                <br>
                                                <ul class="list-group">

                                                    <?php foreach ($perlombaan as $Gota) : ?>
                                                        <li class="list-group-item bg-primary">
                                                            <p>Perlombaan : <?= $Gota['nama_perlombaan']; ?></p>
                                                            <p class="bg-warning">URL : <a href="<?= $Gota['isi_perlombaan']; ?>">Ikuti <?= $Gota['isi_perlombaan']; ?></a></p>
                                                            <form method="post" action="<?= base_url('Anggota/TambahKomentar') ?>">
                                                                <div class="form-group">
                                                                    <input type="text" name="nama_komentar" value="<?= $user['nama'] ?>" hidden>
                                                                    <input type="text" name="judul_modul" value="Perlombaan <?= $Gota['nama_perlombaan'] ?>" hidden>
                                                                    <textarea Name="isi_komentar" class="form-control" placeholder="Komentar..."></textarea>
                                                                </div>

                                                                <button type="reset" class="btn btn-danger float-right">Batal</button>
                                                                <button type="submit" name="tambah" class="btn btn-primary float-right">Kirim</button>
                                                            </form>
                                                        </li>

                                                    <?php endforeach; ?>
                                                    <br><br>
                                                </ul>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- /Message Panel-->
                            </div>
                        </div>
                        <!-- /row -->

                        <div class="row">
                            <!-- TWITTER PANEL -->
                            <div class="col-md-4 mb">

                            </div>
                            <!-- /col-md-4 -->
                            <div class="col-md-4 mb">
                                <!-- WHITE PANEL - TOP USER -->
                                <div>

                                </div>
                            </div>
                            <!-- /col-md-4 -->
                            <div class="col-md-4 mb">
                                <!-- INSTAGRAM PANEL -->

                            </div>
                            <!-- /col-md-4 -->
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">

                            </div>
                            <!-- /col-md-4 -->
                            <!--  PROFILE 02 PANEL -->
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">

                                <!-- /panel -->
                            </div>
                            <!--/ col-md-4 -->
                            <div class="col-md-4 col-sm-4 mb">

                            </div>
                            <!-- /col-md-4 -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /col-lg-9 END SECTION MIDDLE -->
                    <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
                    <div class="col-lg-3 ds">
                        <center>
                            <!--COMPLETED ACTIONS DONUTS CHART-->
                            <h4>Pengumuman <i class="fas fa-bullhorn"></i></h4>
                        </center>
                        <ul class="list-group">
                            <?php foreach ($pengumuman as $umum) : ?>
                                <li class="list-group-item"><a href="<?= base_url(); ?>Anggota/DetailPengumuman/<?= $umum['id_peng']; ?>"><?= $umum['judul_pengumuman']; ?></a>
                                    <br>
                                <?php endforeach; ?>
                        </ul>
                    </div>


                    <!-- Second Activity -->

                    <!-- / calendar -->
                </div>
                <!-- /col-lg-3 -->
                </div>
                <!-- /row -->
            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <br><br><br><br>
        <footer class="site-footer">
            <div class="text-center">
                <p>
                    &copy; Copyrights <strong>KELOMPOK 12 PA1 D3TI 2019</strong>. All Rights Reserved
                </p>
                <a href="index.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- Logout Modal-->

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


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="vendor/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="vendor/js/demo/chart-area-demo.js"></script>
    <script src="vendor/js/demo/chart-pie-demo.js"></script>

    <!-- template -->
    <script src="<?= base_url('assets') ?>/anggota/lib/jquery/jquery.min.js"></script>

    <script src="<?= base_url('assets') ?>/anggota/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?= base_url('assets') ?>/anggota/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url('assets') ?>/anggota/lib/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url('assets') ?>/anggota/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?= base_url('assets') ?>/anggota/lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="<?= base_url('assets') ?>/anggota/lib/common-scripts.js"></script>
    <script type="text/javascript" src="<?= base_url('assets') ?>/anggota/lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?= base_url('assets') ?>/anggota/lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="<?= base_url('assets') ?>/anggota/lib/sparkline-chart.js"></script>
    <script src="<?= base_url('assets') ?>/anggota/lib/zabuto_calendar.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var unique_id = $.gritter.add({

            });

            return false;
        });
    </script>
    <script type="application/javascript">
        $(document).ready(function() {
            $("#date-popover").popover({
                html: true,
                trigger: "manual"
            });
            $("#date-popover").hide();
            $("#date-popover").click(function(e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function() {
                    return myDateFunction(this.id, false);
                },
                action_nav: function() {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [{
                        type: "text",
                        label: "Special event",
                        badge: "00"
                    },
                    {
                        type: "block",
                        label: "Regular event",
                    }
                ]
            });
        });

        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

</body>

</html>