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

        .atas {
            background-color: #150544;
            height: 140px;
            width: 235px;
            border-radius: 15px;
            margin-top: 540px;
            z-index: 15;
            top: 75%;
            position: absolute;
            margin-left: 80px;
        }

        .bawah {
            background-color: #150544;
            height: 160px;
            width: 140px;
            border-radius: 15px;
            margin-top: 270px;
            z-index: 15;
            top: 75%;
            position: absolute;
            margin-left: 450px;
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

<section class="" style=" height: 700px;">
    <div class="atas">
        <img src="<?php echo base_url() ?>assets/images/kotak.png" alt="" style="width:46%; padding:17px;">
        <p style="margin-left: 100px; font-size:smaller; margin-top:-108px; color:white; font-family:poppins;">INTI-CSIRT<br>Computer Security<br> Incident Response<br>Team</p>
    </div>
    <div class="bawah">
        <img src="<?php echo base_url() ?>assets/images/kotak2.png" alt="" style="width:78%; padding:20px; margin-left:14px;">
        <p style="margin-left: 40px; font-size:smaller; margin-top:-10px; color:white; font-family:poppins;"><b style="margin-left: 13px;">Trust</b><br>Guaranted</p>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.595161779133!2d107.6066353!3d-6.9388913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a66953993%3A0x248047e0057191ae!2sPT.%20Inti%20(Persero)!5e0!3m2!1sen!2sid!4v1663054881141!5m2!1sen!2sid" width="400" height="410" style="margin-left:130px; border-radius: 25px; margin-top:160px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="isi" style="font-family:poppins; margin-left: 50%; margin-top:-410px;">
        <p style="color: blue;">HUBUNGI KAMI</p>
        <h3>Computer Security Incident<br>Response Team</h3><br><br>
        <p style="color: #656565;">ADDRESS</p>
        <h4><b>PT.Industri Telekomunikasi</b></h4>
        <button type="submit" class="btn btn-labeled" style="background-color: white; color:#FDC886; font-family: poppins; margin-left:65%; margin-top:-65px;">
            <a href="<?php echo base_url('Content/profil') ?>" class="href" style="color:#FDC886;"> Profile Details</a> <span class="btn-label"><i class="fa fa-chevron-right"></i></span></button>
        <p style="color: #656565;"><i class="fa-solid fa-location-dot"></i> Jalan Moh. Toha No.77 Kelurahan Cigereleng, Kecamatan<br>Regol, Bandung, Jawa Barat 40113<br><br> EMAIL<br></p>
        <b>csirt[at]inti.co.id</b><br><br>
        <p style="color: #656565;">TELEPHONE</p>
        <b>(022) 5201-501</b><br><br>
    </div>
</section>
<section class="" style="background-color: white; height:30%;">
</section>
<footer style="background:#150544; padding:10px; text-align:center; height:100px;">
    <p style="margin-top: 28px; color:white; font-family:poppins;">Copyright &copy; 2022 INTI-CSIRT</p>
</footer>
</body>

</html>