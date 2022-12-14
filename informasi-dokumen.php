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
        html,
        body {
            margin: 0;
            height: 100%;
            width: 100%;
            padding: 0;
        }

        section {
            display: block;
            height: 100%;
            width: 100%;
            padding: 30px;
            padding-left: 0px;
            box-sizing: border-box;
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
                        <a href="<?php echo site_url('Home'); ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Content/profil'); ?>" class="nav-link">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>" class="nav-link">Layanan INTI-CSIRT</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Content'); ?>" class="nav-link">RFC 2350</a>
                    </li>
                    <li class="nav-item dropdown" style="margin-left:-10px;">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/indok/'); ?>">Informasi Dokumen</a></li>
                            <li><a class="dropdown-item" href="#">Informasi Kontak</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/tentang/'); ?>">Tentang INTI-CSIRT</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/kebijakan/'); ?>">Kebijakan</a></li>
                            <li><a class="dropdown-item" href="#">Layanan INTI-CSIRT</a></li>
                            <li><a class="dropdown-item" href="#">Dokumen Legal Pendukung</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Content/siber'); ?>" class="nav-link">Aduan Siber</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>" class="nav-link">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </ul>
    </div>
</nav>
<div id="carouselSlider" class="carousel slide">
    <div class="carousel-inner" style=" padding: 55px; margin-top: -54px; border: radius 10px; ">
        <div class="carousel-item active">
            <img src="<?php echo base_url() ?>assets/images/GDPR.jpg" width="1250" height="500" alt="First slide" class="rounded-4" style="border-radius: 25px;">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url() ?>assets/images/GLOBE.jpg" width="1250" height="500" alt="Second slide" class="rounded-4" style="border-radius: 25px;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- HERO -->
<section class="rounded-4" style="background-color: #150544; height:1250px; width:75%; border-top-right-radius: 50px; margin-left:250px;">
    <div class="container" style="width: 100%;">
        <h2 style="border-style: solid; width:40%; padding: 20px; border-radius:20px; color:white; margin-left:100px; margin-top:35px;">INFORMASI DOKUMEN</h2>
        <br><br><img src="<?php echo base_url(); ?>assets/images/layanan6.png" style="width:400px; margin-left: -65px; margin-top:-50px;">
        <h4 style="color:white; font-family: poppins; margin-left:450px; margin-top: -320px;">Dokumen ini berisi deskripsi INTI-CSIRT berdasarkan RFC 2350, yaitu informasi dasar mengenai INTI-CSIRT, menjelaskan tanggung jawab, layanan yang diberikan, dan cara untuk menghubungi INTI-CSIRT.
        </h4>
        <h3 style="color:white; font-family: poppins; margin-left:450px;">1. Tanggal Update Terakhir
        </h3>
        <h4 style="color:white; font-family: poppins; margin-left:450px;">
            Dokumen merupakan dokumen versi 1.0 yang diterbitkan pada tanggal 8 Agustus 2022.
        </h4>
        <br><br>
        <h3 style="color:white; font-family: poppins; margin-left:450px;">2. Daftar Distribusi untuk Pemberitahuan
        </h3>
        <p style="color:white; font-family: poppins; margin-left:450px;">
            Tidak ada daftar distribusi untuk pemberitahuan mengenai pembaharuan dokumen.
        <p>
            <br><br>
        <h3 style="color:white; font-family: poppins; margin-left:450px;">3. Lokasi dimana Dokumen ini bisa didapat
        </h3>
        <p style="color:white; font-family: poppins; margin-left:450px;">
            Dokumen in tersedia pada link berikut :
            <br>Dokumen RFC 2350
            <br><img src="<?php echo base_url(); ?>assets/images/qr.png" style="width:100px; margin-left: 0px; margin-top:0px;">
        <p>
            <br><br>
        <h3 style="color:white; font-family: poppins; margin-left:450px;">4. Keaslian Dokumen
        </h3>
        <p style="color:white; font-family: poppins; margin-left:450px;">
            Dokumen ini telah ditandatangani dengan PGP milik INTI-CSIRT. Untuk lebih jelas dapat dilihat pad bagian Kunci Publik dan Informasi / Data Enkripsi Lain.
        <p>
            <br><br>
        <h3 style="color:white; font-family: poppins; margin-left:450px;">5. Identifikasi Dokumen
        </h3>
        <p style="color:white; font-family: poppins; margin-left:450px;">
            Dokumen memiliki atribut, yaitu :
            <br>
            Judul : RFC 2350 INTI-CSIRT;
            <br>
            Versi : L1;
            <br>
            Tanggal Publikasi : 8 Agustus 2022
            <br>
            Kedaluwarsa : Dokumen ini valid hingga dokumen terbaru dipublikasikan.
        <p>
    </div>
</section>
<section class="" style="background-color: white; ">
    <div class="container">

    </div>
</section>
<footer class=" site-footer" style="background-color: #150544;">
    <div id="bottom-footer">
        <div class="tg-container">
            <div class="mx-lg-auto text-center col-12" style="background-color: #150544; height: 50px;">
                <p class="copyright-text" style="color:white; margin-top:px;">
                    Copyright &copy; 2022 <a href="https://csirt.inti.co.id/">INTI-CSIRT
                </p>
            </div>
        </div>
    </div>
</footer>
</body>

</html><!DOCTYPE html>
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
        html,
        body {
            margin: 0;
            height: 100%;
            width: 100%;
            padding: 0;
        }

        section {
            display: block;
            height: 100%;
            width: 100%;
            padding: 30px;
            padding-left: 0px;
            box-sizing: border-box;
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
                        <a href="<?php echo site_url('Home'); ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Content/profil'); ?>" class="nav-link">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>" class="nav-link">Layanan INTI-CSIRT</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Content'); ?>" class="nav-link">RFC 2350</a>
                    </li>
                    <li class="nav-item dropdown" style="margin-left:-10px;">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/indok/'); ?>">Informasi Dokumen</a></li>
                            <li><a class="dropdown-item" href="#">Informasi Kontak</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/tentang/'); ?>">Tentang INTI-CSIRT</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('Content/kebijakan/'); ?>">Kebijakan</a></li>
                            <li><a class="dropdown-item" href="#">Layanan INTI-CSIRT</a></li>
                            <li><a class="dropdown-item" href="#">Dokumen Legal Pendukung</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Content/siber'); ?>" class="nav-link">Aduan Siber</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>" class="nav-link">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </ul>
    </div>
</nav>
<div id="carouselSlider" class="carousel slide">
    <div class="carousel-inner" style=" padding: 55px; margin-top: -54px; border: radius 10px; ">
        <div class="carousel-item active">
            <img src="<?php echo base_url() ?>assets/images/GDPR.jpg" width="1250" height="500" alt="First slide" class="rounded-4" style="border-radius: 25px;">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url() ?>assets/images/GLOBE.jpg" width="1250" height="500" alt="Second slide" class="rounded-4" style="border-radius: 25px;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- HERO -->
<section class="rounded-4" style="background-color: #150544; height:1250px; width:75%; border-top-right-radius: 50px; margin-left:250px;">
    <div class="container" style="width: 100%;">
        <h2 style="border-style: solid; width:40%; padding: 20px; border-radius:20px; color:white; margin-left:100px; margin-top:35px;">INFORMASI DOKUMEN</h2>
        <br><br><img src="<?php echo base_url(); ?>assets/images/layanan6.png" style="width:400px; margin-left: -65px; margin-top:-50px;">
        <h4 style="color:white; font-family: poppins; margin-left:450px; margin-top: -320px;">Dokumen ini berisi deskripsi INTI-CSIRT berdasarkan RFC 2350, yaitu informasi dasar mengenai INTI-CSIRT, menjelaskan tanggung jawab, layanan yang diberikan, dan cara untuk menghubungi INTI-CSIRT.
        </h4>
        <h3 style="color:white; font-family: poppins; margin-left:450px;">1. Tanggal Update Terakhir
        </h3>
        <h4 style="color:white; font-family: poppins; margin-left:450px;">
            Dokumen merupakan dokumen versi 1.0 yang diterbitkan pada tanggal 8 Agustus 2022.
        </h4>
        <br><br>
        <h3 style="color:white; font-family: poppins; margin-left:450px;">2. Daftar Distribusi untuk Pemberitahuan
        </h3>
        <p style="color:white; font-family: poppins; margin-left:450px;">
            Tidak ada daftar distribusi untuk pemberitahuan mengenai pembaharuan dokumen.
        <p>
            <br><br>
        <h3 style="color:white; font-family: poppins; margin-left:450px;">3. Lokasi dimana Dokumen ini bisa didapat
        </h3>
        <p style="color:white; font-family: poppins; margin-left:450px;">
            Dokumen in tersedia pada link berikut :
            <br>Dokumen RFC 2350
            <br><img src="<?php echo base_url(); ?>assets/images/qr.png" style="width:100px; margin-left: 0px; margin-top:0px;">
        <p>
            <br><br>
        <h3 style="color:white; font-family: poppins; margin-left:450px;">4. Keaslian Dokumen
        </h3>
        <p style="color:white; font-family: poppins; margin-left:450px;">
            Dokumen ini telah ditandatangani dengan PGP milik INTI-CSIRT. Untuk lebih jelas dapat dilihat pad bagian Kunci Publik dan Informasi / Data Enkripsi Lain.
        <p>
            <br><br>
        <h3 style="color:white; font-family: poppins; margin-left:450px;">5. Identifikasi Dokumen
        </h3>
        <p style="color:white; font-family: poppins; margin-left:450px;">
            Dokumen memiliki atribut, yaitu :
            <br>
            Judul : RFC 2350 INTI-CSIRT;
            <br>
            Versi : L1;
            <br>
            Tanggal Publikasi : 8 Agustus 2022
            <br>
            Kedaluwarsa : Dokumen ini valid hingga dokumen terbaru dipublikasikan.
        <p>
    </div>
</section>
<section class="" style="background-color: white; ">
    <div class="container">

    </div>
</section>
<footer class=" site-footer" style="background-color: #150544;">
    <div id="bottom-footer">
        <div class="tg-container">
            <div class="mx-lg-auto text-center col-12" style="background-color: #150544; height: 50px;">
                <p class="copyright-text" style="color:white; margin-top:px;">
                    Copyright &copy; 2022 <a href="https://csirt.inti.co.id/">INTI-CSIRT
                </p>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
