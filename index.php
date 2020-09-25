<?php include ("koneksi.php"); ?>
<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Custom fonts for this theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="theme/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <title>We Help</title>
</head>

<body>



    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#home">We Help</a>
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#oh">Our Helpers</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#cu">About Us</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#lo">Recruitment
                            Helpers</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->

    <!-- Masthead -->
    <header class="masthead text-black text-center" style="background-color: #ffffff" id="home">
        <div class="container d-flex align-items-center flex-column">

            <!-- Masthead Avatar Image -->
            <img class="masthead-avatar mb-5" src="img/heart.svg" alt="">

            <!-- Masthead Heading -->
            <p class="masthead-subheading font-weight-light mb-0">Hello, Welcome to Our Website</p>
            <h1 class="masthead-heading mb-0">We Help</h1>

        </div>
    </header>

    <!--Our Helper-->

    <section class="page-section" id="oh">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">Our Helpers</h1>
                    <hr>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <?php 
                     $sql_pekerja = mysqli_query ($db,"SELECT * FROM form_pekerja");
                     if(mysqli_num_rows ($sql_pekerja)>0){
                    while($data = mysqli_fetch_array($sql_pekerja)){?>
                <div class="col-xs-2 col-md-4">
                    <div class="card-responsive" align="center" style="width: 15rem;">
                        <img src="img/<?=$data['file'] ?>" width='170px' height='180px' class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center"><?= $data['nm']?></h5>
                            <a href="dapeg.php?id=<?= $data['id']?>&nm=<?= $data['nm']?>" class="btn btn-primary">More Info</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                  }else{
                      ?>
                <div class="container" align="center">
                    <ul>
                        <h3 style="color:green;">Sorry our Helpers are currently unavailable</h3>
                        <h4 style="color:green;">Please check our Helpers later, Thank you</h4>
                    </ul>
                </div>
                <?php
                  }
                  ?>
            </div>
        </div>

    </section>


    <!-- About -->
    <section class="page-section" id="cu">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">About Us</h1>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <address>
                        <strong>Kantor</strong><br>
                        Perumahan Pondok Timur Indah<br>
                        Jalan Intan I No 301<br>
                        Bekasi<br>
                        <abbr title="Phone">P:</abbr> (021)8260-7403<br>
                        <a href="mailto:#">ryosinagasinaga@gmail.com</a>
                    </address>
                </div>
                <div class="col-sm-6">
                    <p>We help adalah suatu yayasan penyalur jasa perawat lansia yang berdiri semenjak tahun 2018.
                        Yayasan ini didirikan oleh Rio Tua Pandapotan di kota Bekasi. Yayasan ini bertujuan untuk
                        membantu masyarakat yang ingin mencari perawat lansia dengan membuka website ini. Perawat
                        yang berada dalam yayasan ini memiliki kualitas yang terjamin dan
                        <strong>bersertifikat</strong>, sehingga
                        anda tidak perlu khawatir akan perawat kami. </p>
                </div>
            </div>
        </div>

        </div>
    </section>
    <section class="page-section" id="lo">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">Recruitment Helpers</h1>
                    <hr>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h4>Penawaran :</h4>
                    <ul type="disc">
                        <li>
                            Gaji sebesar Rp. 1,700,000 - 4,500,000
                        </li>
                        <li>
                            Tidak ada potongan gaji
                        </li>
                        <li>
                            Tersedia tempat tinggal
                        </li>
                        <li>
                            Majikan diverifikasi aman
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6">

                    <h3>Persyaratan:</h3>
                    <ol type="1">
                        <li>
                            Membawa KTP/E-KTP/Ijazah/SIM asli
                        </li>
                        <li>
                            Pria/Wanita dengan usia 17-40 tahun
                        </li>
                        <li>
                            Berpengalaman/Belum berpengalaman
                        </li>
                        <li>
                            Sehat jasmani dan rohani
                        </li>
                        <li>
                            Giat Bekerja
                        </li>
                        <li>
                            Bersedia tinggal diyayasan kami
                        </li>
                        <li>
                            Membawa baju ganti
                        </li>
                        <li>
                            Diizinkan oleh suami/istri
                        </li>
                    </ol>


                </div>
                <p>Jika kamu berminat dan ingin mengetahui informasi lebih lanjut, kamu dapat pergi ke kantor atau
                    menghubungi
                    kami dengan alamat dan nomor telpon yang ada dihalaman home(awal) atau kunjungi social media kami
                    yang sudah
                    tersedia. Terimakasih</p>
            </div>
        </div>
    </section>

    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Social Icons -->
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Our Social Media</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="http://facebook.com/ryo.v.sinaga">
                        <i class="fab fa-fw fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/ryosinagasinaga">
                        <i class="fab fa-fw fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <!-- js untuk animasi smooth -->
    <script src="theme/jquery/jquery.min.js"></script>
    <!-- js untuk animasi ijo -->
    <script src="theme/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- js untuk navbar -->
    <script src="theme/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
 
</body>

</html>