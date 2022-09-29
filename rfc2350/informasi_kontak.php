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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
            margin-top: 570px;
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
            margin-top: 210px;
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

<section class="" style="height: 550px; width:100%;">
    <div class="atas" style=" margin-top:50px;">
        <img src="<?php echo base_url() ?>assets/images/kotak.png" style="width:46%; padding:17px; ">
        <p style="margin-left: 100px; font-size:smaller; margin-top:-110px; color:white; font-family:poppins;">INTI-CSIRT<br>Computer Security<br> Incident Response<br>Team</p>
    </div>
    <div class="bawah" style=" margin-top:-320px;">
        <img src="<?php echo base_url() ?>assets/images/kotak2.png" style="width:78%; padding:20px; margin-left:14px;">
        <p style="margin-left: 40px; font-size:smaller; margin-top:-10px; color:white; font-family:poppins;"><b style="margin-left: 13px;">Trust</b><br>Guaranted</p>
    </div>
    <img src="<?php echo base_url() ?>assets/images/manusia2.png" width="470px" style="margin-left: 95px; margin-top:75px;">

    <div class="isi" style="margin-top: -470px; margin-left: 50%; width:45%; font-family:poppins; margin-top:-550px;">
        <p style="color: blue;">CONTACT US</p>
        <h3><b>Computer Security Incident <br>Response Team</b></h3>
        <br><br>
        <p style="color: #656565;">ADDRESS</p><br>
        <h4><b>PT.Industri Telekomunikasi</b></h4>
        <button type="submit" class="btn btn-labeled" style="background-color: white; color:#FDC886; font-family: poppins; margin-left:70%; margin-top:-65px;">
            <a href="<?php echo base_url('Content/profil') ?>" class="href" style="color:#FDC886;"> Profile Details</a> <span class="btn-label"><i class="fa fa-chevron-right"></i></span></button>
        <p style="color: #656565;"><i class="fa-solid fa-location-dot"></i> Jalan Moh. Toha No.77 Kelurahan Cigereleng, Kecamatan<br>Regol, Bandung, Jawa Barat 40113<br><br> EMAIL<br></p>
        <b>csirt[at]inti.co.id</b><br><br>
        <p style="color: #656565;">TELEPHONE</p>
        <b>(022) 5201-501</b><br><br>
        <p style="color: #656565;">KUNCI PUBLIC (PUBLIC KEY) DAN INFORMASI/DATA ENKRIPSI LAIN</p>
        <b>Bits&emsp;&emsp;&emsp;&emsp;&ensp;: 4096</b><br>
        <b>ID&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;: FC4E 272A 9B0E E69A</b><br>
        <b>Key Fingerprint&ensp;: BD34 4A28 06B3 7B31 1A32 6491 FC4E 272A 9B0E E69A</b><br><br>

        <img src="<?php echo base_url() ?>assets/images/scan.png" width="100px" alt=""><br><br>
    </div>
</section>
<section class="" style="height: 700px; width:100%; margin-top:25%;">

    <table class="table" style="margin-top:-50px; font-family:poppins; width: 100%;">
        <tbody>
            <tr style="margin-top: 25px;">
                <td>
                    <section class="" style="height: 75px; background-color:#D9D9D9; width:75px; margin-left:140px;">
                    </section>
                </td>
                <td><b>Setyo Utoro</td>
                <td><b>Koordinator/Narahubung</td>
                <td><b>Manager</td>

            </tr>
            <tr>
                <td>
                    <section class="" style="height: 75px; background-color:#D9D9D9; width:75px; margin-left:140px;">
                    </section>
                </td>
                <td><b>Dhoni Gumilar Daradjat</b></td>
                <td><b>Anggota</b></td>
                <td><b>Manager</b></td>

            </tr>
            <tr>
                <td>
                    <section class="" style="height: 75px; background-color:#D9D9D9; width:75px; margin-left:140px;">
                    </section>
                </td>
                <td><b>Mahathir Muhammad</b></td>
                <td><b>Anggota</b></td>
                <td><b>Senior Officer</b></td>

            </tr>
            <tr>
                <td>
                    <section class="" style="height: 75px; background-color:#D9D9D9; width:75px; margin-left:140px;">
                    </section>
                </td>
                <td><b>M. Fakhrul Arifin</b></td>
                <td><b>Anggota</b></td>
                <td><b>Officer</b></td>

            </tr>
            <tr>
                <td>
                    <section class="" style="height: 75px; background-color:#D9D9D9; width:75px; margin-left:140px;">
                    </section>
                </td>
                <td><b>Robiyansyah</b></td>
                <td><b>Anggota</b></td>
                <td><b>Officer</b></td>
            </tr>

            <tr>
                <td>
                    <section class="" style="height: 75px; background-color:#D9D9D9; width:75px; margin-left:140px;">
                    </section>
                </td>
                <td><b>Doyo Gogo Prayogo</b></td>
                <td><b>Anggota</b></td>
                <td><b>Officer</b></td>
            </tr>
        </tbody>
    </table>

    <div class="isi7" style="color: black; font-family:poppins; margin-left:100px;">
        <br>
        <h3>Catatan-catatan pada Kontak INTI-CSIRT</h3><br>
        <p>Metode yang disarankan untuk menghubungi INTI-CSIRT adalah melalui e-mail
            Pada alamat csirt[at].co.id atau melalui nomor telepon ke (+62-22) 5201501<br>
            Yang siaga selama jam kerja.
        </p>
    </div>
</section>
<section class="" style="height: 180px;">
    <div class="container">

    </div>
</section>
<footer style="background:#150544; padding:10px; text-align:center; height:100px; width: 102%; margin-left:-17px;">
    <p style="margin-top: 28px; color:white; font-family:poppins;">Copyright &copy; 2022 INTI-CSIRT</p>
</footer>
</body>

</html>