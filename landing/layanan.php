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

    </script>


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
<!-- HERO -->
<section class="rounded-4 konten" style="background-color: #150544; height:2200px; width:75%; border-top-right-radius: 50px; margin-left:250px; margin-top:80px;">
    <div class="container" style="width: 100%;">
        <h2 class="h2" style="border-style: solid; width:26%; padding: 20px; border-radius:20px; color:white; margin-left:100px; margin-top:35px;">LAYANAN INTI</h2>
        <br><br><img src="<?php echo base_url(); ?>assets/images/layanan1.png" style="width:400px; margin-left: -63px; margin-top:-90px;">
        <h3 class="h3a" style="color:white; font-family: poppins; margin-left:400px; margin-top: -250px;"><b style="font-size: 40px;">1.</b><b> Pemberian Peringatan Terkait Keamanan Siber
            </b></h3>
        <h4 class="p1" style="color:white; font-family: poppins; margin-left:400px;">
            Layanan ini dilaksanakan oleh INTI-CSIRT berupa pemberian peringatan adanya insiden siber kepada konstituen.
            <h4><br><br>

                <img src="<?php echo base_url(); ?>assets/images/contact.png" style="width:400px; margin-left: 550px; margin-top: 40px;">
                <h3 class="h3b" style="color:white; font-family: poppins; margin-top: -250px;">
                    <b style=" font-size:40px ;">2.</b><b> Penanganan Insiden Siber</b>
                </h3>
                <h4 class="p2" style="color:white; font-family: poppins;">
                    Layanan ini diberikan berupa kegiatan menerima,<br> menanggapi, dan menganalisis Insiden Siber
                </h4><br><br>

                <img src="<?php echo base_url(); ?>assets/images/layanan3.png" style="width:400px; margin-left: -63px; margin-top:50px;">
                <h3 class="h3c" style="color:white; font-family: poppins; margin-left:450px; margin-top:-300px ;">
                    <b style="font-size:40px;">3.</b><b> Penanganan Kerawanan Sistem Elektronik</b>
                </h3>
                <h4 class="p3" style="color:white; font-family: poppins; margin-left:450px;">
                    Layanan ini berupa koordinasi, analisis dan rekomendasi teknis dalam rangka penguatan aspek kendali keamanan (security control) baik dalam lingkup teknis ataupun non-teknis (Policy/Governance). Secara umum penanganan ini dibagi menjadi :
                    <br>1. Pelaporan kerawanan yang bersifat sewaktu oleh pemilik/penyelenggara sistem elektronik milik konstituen.
                    <br>2. Layanan penanganan kerawanan sebagai tindak lanjut dari kegiatan audit atau vulnerability assessment.
                </h4><br><br>

                <img src="<?php echo base_url(); ?>assets/images/layanan4.png" style="width:400px; margin-left: 550px; margin-top: -50px;">
                <h3 class="h3d" style="color:white; font-family: poppins; margin-top:-300px;">
                    <b style="font-size:40px;">4.</b><b> Pemberitahuan Hasil Pengamatan<br> Potensi Ancaman</b>
                </h3>
                <h4 class="p4" style="color:white; font-family: poppins;">
                    Layanan ini diberikan berupa penyampaian kepada<br> konstituen terkait ancaman terhadap Sistem Elektronik<br> yang dapat muncul akibat perkembangan teknologi,<br> politik, ekonomi, dan perkembangan lainnya.
                </h4><br><br>

                <img src="<?php echo base_url(); ?>assets/images/layanan5.png" style="width:400px; margin-left: 0px; margin-top: 50px;">
                <h3 style="color:white; font-family: poppins; margin-left:450px; margin-top: -250px;">
                    <b style="font-size:40px;">5.</b><b> Pendeteksian Serangan
                    </b>
                </h3>
                <h4 style="color:white; font-family: poppins; margin-left:450px;">
                    Tim INTI-CSIRT memiliki beberapa sistem untuk mendeteksi apakah sistem pada perusahaan yang bersangkutan dengan stakeholder aman atau memiliki risiko, sehingga dapat dilakukan penanggulangan sedini mungkin.
                </h4><br><br>

                <img src="<?php echo base_url(); ?>assets/images/layanan6.png" style="width:400px; margin-left: 550px; margin-top: 25px;">
                <h3 style="color:white; font-family: poppins; margin-top: -250px;">
                    <b style="font-size:40px;">6.</b><b> Pembangunan Kesadaran dan <br>Kepedulian Terhadap Keamanan Siber
                    </b>
                </h3>
                <h4 style="color:white; font-family: poppins;">
                    Tim INTI-CSIRT melakukan webinar mengenai isu <br>sistem keamanan informasi.
                </h4>
    </div>
</section>
<section class="" style="background-color: white; height:200px;">
</section>
<footer style="background:#150544; padding:10px; text-align:center; height:100px;">
    <p style="margin-top: 28px; color:white; font-family:poppins;">Copyright &copy; 2022 INTI-CSIRT</p>
</footer>
</body>

</html>
