<?php

require './config.php';

//pagination
$perpage = 6;
$page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$start = ($page > 1) ? ($page * $perpage) - $perpage : 0;

//query
$warta = "SELECT * FROM tbl_warta LIMIT $start, $perpage";
$wt = mysqli_query($conn, $warta);

//pagination;
$result= mysqli_query($conn, "SELECT * FROM tbl_warta");
$total = mysqli_num_rows($result);

$pages = ceil($total/$perpage);





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GMIT PNIEL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>GMIT PNIEL<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php" class="active">Depan</a></li>
                    <li><a href="about.php">Tentang Kami</a></li>
                    <li><a href="galeri.php">Galeri</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                    <li class="dropdown"><a href="#"><span>Bacaan</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="warta.php">Warta Jemaat</a></li>
                            <li><a href="renungan.php">Renungan</a></li>
                            <li><a href="pengumuman.php">Pengumuman</a></li>
                            <li><a href="liturgi.php">Liturgi</a></li>
                        </ul>
                    </li>
                    <li><a href="./gate/login.php">Login</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('assets/img/WhatsApp\ Image\ 2023-04-16\ at\ 19.38.34.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>WARTA JEMAAT</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>WARTA</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="section-header">
                    <h2>WARTA JEMAAT</h2>
                </div>
                <div class="row gy-4 posts-list">
                    <div class="col-xl-4 col-md-6">
                        <?php while($row = mysqli_fetch_assoc($wt)): ?>
                        <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/warta/Warta.png" class="img-fluid" alt="">
                                <span class="post-date"><?= date('F j', strtotime($row["tgl_warta"]));?></span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title"><?=$row['judul_wr']?></h3>
                                <p>
                                    Shalom!
                                    Jemaat GMIT Pniel Sikumana & seluruh Jemaat TUHAN.
                                    Selamat Hari Minggu
                                    Selamat Beribadah
                                </p>

                                <hr>

                                <a href="warta-detail.php?id_warta=<?=$row['id_warta']?>"
                                    class="readmore stretched-link"><span>Baca Disini</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                        <?php endwhile; ?>
                    </div><!-- End post list item -->

                </div><!-- End blog posts list -->

                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <?php for($i=1; $i<=$pages; $i++) : ?>
                        <li><a href="?halaman=<?= $i?>"><?=$i?></a></li>
                        <?php endfor; ?>
                    </ul>

                </div><!-- End blog pagination -->

            </div>
        </section><!-- End Blog Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>GMIT PNIEL SIKUMANA</h3>
                            <p>
                                Jl. H.R Koroh, Sikumana, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur<br>
                                <strong>Phone:</strong>082236982629<br>
                                <strong>Email:</strong>nikijnn23@gmail.com<br>
                            </p>

    </footer>ooter -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>