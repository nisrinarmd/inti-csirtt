<!DOCTYPE html>
<html lang="en">

<head>
    <title>INTI CSIRT</title>

    <meta name="description" content="IMSIS | PT Industri Telekomunikasi Indoenesia" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="IMSIS | PT Industri Telekomunikasi Indoenesia" />
    <meta property="og:url" content="https://my.inti.co.id/reseller/" />
    <meta property="og:site_name" content="IMSIS | PT Industri Telekomunikasi Indoenesia" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ini-inti.png" />

    <link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/owl.theme.default.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\style.css">

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- MAIN CSS
	<link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/templatemo-digital-trend.css"> -->

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets-landing/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets-landing/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets-landing/js/aos.js"></script>
    <script src="<?php echo base_url() ?>assets-landing/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets-landing/js/smoothscroll.js"></script>
    <script src="<?php echo base_url() ?>assets-landing/js/custom.js"></script>

    <style>
        .container {
            border-radius: 20px;
            position: relative;
        }

        .carousel-inner {
            border-radius: 20px;
        }

        .carousel-item {
            margin-top: 50px;
        }

        .carousel-item img {
            left: 0;
            min-width: 100%;
            height: 474px;
            border-radius: 50px;
        }

        .left {
            min-width: 30%;
            height: 50%;
            position: absolute;
            top: 35%;
            left: -2%;
            background-color: #150544;
            border-radius: 20px;
            z-index: 9;
        }
    </style>
</head>

<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg" style="margin-top: -10px;">

    <div class="container" style="width: 100%; ">
        <a class="navbar-brand" href="#" style="padding: 15px; margin-top: -10px; margin-left:0px;">
            <img src="<?php echo base_url() ?>assets/images/ini-inti.png" class="" alt="logo umprop inti" width="75">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav ml-auto" style="margin-top:25px;">
            <div class="collapse navbar-collapse" id="navbarNav" style="padding-right: -60px; font-family:poppins;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo site_url('Home'); ?>" class="nav-link" style="color: black;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Content/profil'); ?>" class="nav-link" style="color: black;">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Content/layanan'); ?>" class="nav-link" style="color: black;">Layanan INTI-CSIRT</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(''); ?>" class="nav-link" style="color: black;">RFC 2350</a>
                    </li>
                    <li class="nav-item dropdown" style="margin-left:-10px;">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/indok/'); ?>">Informasi Dokumen</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/informasi/'); ?>">Informasi Kontak</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/tentang/'); ?>">Tentang INTI-CSIRT</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/kebijakan/'); ?>">Kebijakan</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/dokpen/'); ?>">Dokumen Legal Pendukung</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/alper/'); ?>">Alamat Pelaporan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Content/siber'); ?>" class="nav-link" style="color: black;">Aduan Siber</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Content/hubungi'); ?>" class="nav-link" style="color: black;">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </ul>
    </div>
</nav>

< <!-- HERO -->
    <section class="rounded-4" style="background-color: #150544; height:1400px; width:80%; border-top-right-radius: 50px; margin-left:160px; margin-top:80px;">
        <div class="container" style="width: 100%;">
            <h2 style="color:white; font-family: poppins; margin-left:100px; border-style: solid; width:35%; padding: 20px; border-radius:20px; color:white; margin-left:100px; margin-top:35px;">INFORMASI DOKUMEN</h2>
            <p style="color: white; font-family:poppins; margin: right 50%; margin-left:420px; margin-top:100px;"><img src="<?php echo base_url() ?>assets/images/indok.png" style="width:440px; margin-left: -510px; margin-top:-90px;">
            </p>
            <h3 style="color:white; font-family: poppins; margin-left:450px; margin-top:-400px;">Dokumen ini berisi deskripsi INTI-CSIRT berdasarkan RFC 2350, yaitu informasi dasar mengenai INTI-CSIRT, menjelaskan tanggung jawab, layanan yang diberikan, dan cara untuk menghubungi INTI-CSIRT.<br>
            </h3>
            <br>
            <h3 style="color:white; font-family: poppins; margin-left:500px; margin-top:30px;"><b style="font-size: 45px;">1.</b> Tanggal Update Terakhir</h3>
            <p style="color:white; font-family: poppins; margin-left:542px; margin-top:20px;">Dokumen merupakan dokumen versi 1.0 yang diterbitkan<br>pada tanggal 8 Agustus 2022.</p>
            <h3 style="color:white; font-family: poppins; margin-left:500px; margin-top:30px;"><b style="font-size: 45px;">2.</b> Daftar Distribusi untuk Pemberitahuan</h3>
            <p style="color:white; font-family: poppins; margin-left:542px; margin-top:20px;">Tidak ada daftar distribusi untuk pemberitahuan mengenai pembaharuan dokumen.</p>
            <h3 style="color:white; font-family: poppins; margin-left:500px; margin-top:30px;"><b style="font-size: 45px;">3.</b> Lokasi dimana Dokumen ini bisa didapat</h3>
            <p style="color:white; font-family: poppins; margin-left:542px; margin-top:20px;">Dokumen ini tersedia pada link berikut : </p>
            <p style="color: #23BBD1; font-family: poppins; margin-left:542px; margin-top:10px;">Dokumen RFC 2350</p>
            <img src="<?php echo base_url() ?>assets/images/scan.png" width="100px" alt="" style="margin-left:542px; margin-top:10px;">
            <h3 style="color:white; font-family: poppins; margin-left:500px; margin-top:30px;"><b style="font-size: 45px;">4.</b> Keaslian Dokumen</h3>
            <p style="color:white; font-family: poppins; margin-left:542px; margin-top:20px;">Dokumen ini telah ditandatangani dengan PGP milik INTI-CSIRT. Untuk lebih jelas dapat dilihat pada bagian Kunci Publik dan Informasi /Data Enkripsi Lain.</p>
            <h3 style="color:white; font-family: poppins; margin-left:500px; margin-top:30px;"><b style="font-size: 45px;">5.</b> Identifikasi Dokumen</h3>
            <p style="color:white; font-family: poppins; margin-left:542px; margin-top:20px;">Dokumen memiliki atribut, yaitu :
                <br>Judul&emsp;: RFC 2350 INTI-CSIRT;
                <br>Versi&emsp;&ensp;: 1.1;
                <br>Tanggal Publikasi&ensp;: 8 Agustus 2022
                <br>Kedaluwarsa&ensp;: Dokumen ini valid hingga dokumen terbaru dipublikasikan.
            </p>
        </div>
    </section>
    <section class="" style=" background-color: white; height:100px;">
        <div class="container">

        </div>
    </section>
    <footer style="background:#150544; padding:10px; text-align:center; height:100px;">
        <p style="margin-top: 28px; color:white; font-family:poppins;">Copyright &copy; 2022 INTI-CSIRT</p>
    </footer>
    </body>

</html>
