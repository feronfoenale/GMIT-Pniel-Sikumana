<?php
//koneksi databases
require './config.php';

$galeri= select("SELECT * FROM tbl_galeri LIMIT 0, 6");
$pdt= select("SELECT * FROM tbl_pdt LIMIT 0, 3");

$rn= select("SELECT * FROM tbl_renungan LIMIT 0,6");



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

    <!-- font gogle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down"> <span>Selamat Datang</span></h2>
                        <p data-aos="fade-up">di Website Gereja GMIT PNIEL</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Tentang
                            Kami</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url(assets/img/WhatsApp\ Image\ 2023-04-16\ at\ 19.38.29.jpg)">
            </div>
            <div class="carousel-item"
                style="background-image: url(assets/img/WhatsApp\ Image\ 2023-04-16\ at\ 19.40.23.jpg)"></div>
            <div class="carousel-item"
                style="background-image: url(assets/img/WhatsApp\ Image\ 2023-04-16\ at\ 19.38.43.jpg)"></div>
            <div class="carousel-item"
                style="background-image: url(assets/img/WhatsApp\ Image\ 2023-04-16\ at\ 19.38.34.jpg)"></div>
            <div class="carousel-item"
                style="background-image: url(assets/img/WhatsApp\ Image\ 2023-04-16\ at\ 19.38.31.jpg)"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="get-started section-bg">
            <div class="container">
                <div class="content">
                    <h3 style="text-align: center; margin-bottom: 25px; font-family: 'Archivo Black', sans-serif;;">
                        Tentang Kami</h3>
                    <p style="text-align: justify;">
                        <span class="elementor">
                            <span class="elementor2">J</span>
                            emaat Pniel GMIT Sikumana merupakan salah satu jemaat yang berada dalam wilayah Klasis
                            Kupang Barat seluas 7.785 KM2, dimekarkan pada tahun 1996 dengan terbentuknya Klasis Semau.
                            Jemaat ini merupakan salah satu jemaat dari 42 Jemaat, 30 Jemaat Mandiri/Dewasa, 12 Jemaat
                            Bermata Jemaat, 17 Mata Jemaat, 6 Pos Pelayanan (Pospel).
                            Jemaat GMIT Pniel Sikumana yang ada hingga saat ini mulanya merupakan persekutuan yang
                            terbentuk dari sekelompok orang-orang karena memiliki niat dan komitmen yang sama untuk
                            berbakti dan melayani Tuhan. Sekelompok orang-orang ini awalnya adalah anggota Jemaat GMIT
                            Imanuel Oepura. Mereka memutuskan untuk berkumpul dan berdoa setiap hari Minggu di salah
                            satu rumah milik Petrus Bano yang disebut dengan nama “Pak Laru”.
                            Nama dan lokasi tersebut bisa saja berkonotasi bahkan menampilkan sikap yang negatif, namun
                            hal tersebut tidak pernah terjadi di Sikumana karena persekutuan ini justru menjadi wadah
                            untuk berkumpul, mendengar dan memberitakan karya Tuhan yang agung dan dahsyat dalam
                            kehidupan umat manusia yang selalu dilumuri dengan aneka kesalahan/dosa.<a
                                href="about.php">.....Baca Selengkapnya</a>
                    </p> </span>
                </div>
            </div>
        </section><!-- End Get Started Section -->

        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>PENDETA</h2>
                </div>
                <div class="row gy-5">
                    <?php foreach ($pdt as $pdt) : ?>
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="./Admin/upload-pdt/foto<?= $pdt['foto_pdt'];?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info text-center">
                            <h4><?=$pdt['nama_pdt']?></h4>
                        </div>
                    </div><!-- End Team Member -->
                    <?php endforeach; ?>
                </div>
        </section><!-- End Our Team Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pengumuman</h2>
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">


                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit rhoncus.
                                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus
                                    at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Constructions Section ======= -->
        <section id=" constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                </div>

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url(assets/img/WhatsApp\ Image\ 2023-04-16\ at\ 19.40.23.jpg);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Jam Kebaktian</h4>
                                        <br>
                                        <p>Kebaktian Ke-1 :PKL. 06.00 WITA</p>
                                        <p>Kebaktian Ke-2 :PKL. 08.00 WITA</p>
                                        <p>Kebaktian Ke-3 :PKL. 17.00 WITA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url(assets/img/WhatsApp\ Image\ 2023-04-16\ at\ 19.38.43.jpg);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Lokasi</h4>
                                        <br>
                                        <p>Jl. H.R Koroh, Sikumana, Kec. Maulafa, <br>Kota
                                            Kupang, Nusa
                                            Tenggara Timur</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                </div>

            </div>
        </section><!-- End Constructions Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Postingan Terbaru</h2>
                </div>

                <div class="row gy-4">
                    <?php foreach ($rn as $rn) : ?>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-cross"></i>
                            </div>
                            <h3>Renungan</h3>
                            <p>Tanggal : <?=date('F j, Y', strtotime($rn["tgl_r"])); ?></p>
                            <a href="<?=$rn['deskripsi']?>" class="readmore stretched-link"><span>Baca
                                    Disini</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->
                    <?php endforeach; ?>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <a data-aos="fade-up" data-aos-delay="200" href="renungan.php"
                            class="btn-get-started"><span>Lihat Lebih Banyak</span> <i
                                class="bi bi-arrow-right"></i></a></a>
                    </div>
                </div>

            </div>

            </div>

        </section><!-- End Services Section -->

        </div><!-- End post author -->

        <!-- Bagian Video -->
        <div class="container pindah-tengah video">
            <iframe width="560" height="375"
                src="https://www.youtube.com/embed/-DLScBdXZrA?autoplay=1&&mute=1&playlist=-DLScBdXZrA&loop=1"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; loop"
                allowfullscreen></iframe>
        </div>
        <!-- Akhir Video -->

        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Gallery</h2>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <?php foreach ($galeri as $galeri) : ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="./Admin/upload/galeri<?= $galeri['foto']; ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><?=$galeri['nama_foto']?></h4>
                                    <a href="./Admin/upload/galeri<?= $galeri['foto']; ?>"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->
                        <?php endforeach; ?>
                    </div><!-- End Projects Container -->
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <a data-aos="fade-up" data-aos-delay="200" href="galeri.php "
                                class="btn-get-started"><span>Lihat Lebih Banyak</span> <i
                                    class="bi bi-arrow-right"></i></a></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Projects Section -->

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

    </footer>
    <!-- End Footer -->

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