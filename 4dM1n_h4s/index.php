<?php 
session_start();
if (isset($_SESSION['admin'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Oprec 2020 - Halaman Administrator</title>
    <!-- Favicon-->
    <link rel="icon" href="../assets/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="../assets/iconfont/material-icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />

    <!-- sweetalert2 -->
    <link href="../assets/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" />

    <!-- CSS manual -->
    <link href="../style.css" rel="stylesheet">
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Tunggu Sebentar...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
   
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="./">Admin - Oprec 2020</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../assets/images/user.png" width="60" height="60" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <p>FOSTI UMS</p>
                    </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li role="separator" class="divider"></li>
                            <li><a href="./logout"><i class="material-icons">power_settings_new</i>Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="./">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="./daftar">
                            <i class="material-icons">assignment</i>
                            <span>Daftar Peserta</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="./qrcode_generator">
                            <i class="material-icons">assignment</i>
                            <span>QR Generate</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/fosti">
                            <i class="material-icons">search</i>
                            <span>Source Code</span>
                        </a>
                    </li>
                    
                    <li class="header">ACCOUNT</li>
                    
                    <li>
                        <a href="./logout">
                            <i class="material-icons col-red">power_settings_new</i>
                            <span>Keluar</span>
                        </a>
                    </li>
                  
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="https://fosti.ums.ac.id/">FOSTI</a>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-green">
                            <h2>
                                Halaman Administrator <small>Halaman untuk melihat daftar yang telah melakukan pengisian data peserta oprec...</small>
                            </h2>
                        </div>
                        <div class="body">
                            <p class="align-justify">WEB Oprec digunakan untuk melakukan dan memanage pendaftaran anggota baru FOSTI Universitas Muhammadiyah Surakarta...</p>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
            <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    v1.0.0
                                    <small>12 Agustus 2019</small>
                                </h2>
                            </div>
                            <div class="body">
                                <p>- Melihat data peserta OPREC FOSTI 2019</p>
                                <p>- Mengelola data peserta OPREC FOSTI 2019</p>
                                <p>- Mengeksport data ke berbagai jenis file (pdf,excel,dll)</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/plugins/morrisjs/morris.js"></script>
    
    <!-- Sparkline Chart Plugin Js -->
    <script src="../assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>

    <!-- Sweetalert2 -->
    <script src="../assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
</body>
</html>
<?php 
    } else {
        echo "<script>window.location='./login/?pesan=dilarang';</script>";
    }
 ?>