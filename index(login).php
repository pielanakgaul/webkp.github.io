<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Web Konvert Excel to KML</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/xls.png" rel="icon">
    <link href="assets/img/xls.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <link href="assets/css/variables.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index(login).php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>ExcelKml<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index.html#services">Instruction</a></li>
                    <li><a class="nav-link scrollto" href="index.html#portfolio">Tutorial</a></li>
                    <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->
            <a class="btn-getstarted scrollto" href="logout.php">Logout</a>
        </div>
    </header><!-- End Header -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="assets/img/hero-carousel/TransferFiles.svg" class="img-fluid animated" width="250">
            <h2>Welcome to <span>ExcelKml</span></h2>
            <p>Konversi file Excel ke KML dengan mudah dan cepat</p>
            <div class="d-flex">
                <a href="konvert.php" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About</h2>
                    <p>ExcelKML adalah website yang bisa mengkonversi file excel yang berisi koordinat-koordinat sebuah
                        lokasi
                        ke bentuk file KML agar bisa terbaca dalam aplikasi GoogleEarth</p>
                </div>
                <div class="row g-2 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="assets/img/peta.jpg" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <h3 class="pt-0 pt-lg-5">Deskripsi</h3>

                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Excel</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">KML</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">GoogleEarth</a></li>
                        </ul><!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab1">

                                <p class="fst-italic">Microsoft Excel atau Microsoft Office Excel adalah sebuah program
                                    aplikasi lembar
                                    kerja yang dibuat dan didistribusikan oleh Microsoft Corporation yang dapat
                                    dijalankan pada Microsoft
                                    Windows dan Mac OS. Aplikasi ini merupakan bagian dari Microsoft Office. Aplikasi
                                    ini digunakan
                                    sebagai pengolah angka dengan lembar kerja yang terbagi-bagi dalam bentuk cell
                                    sehingga sangat cocok
                                    untuk memuat data koordinat sebuah lokasi.</p>

                            </div><!-- End Tab 1 Content -->

                            <div class="tab-pane fade show" id="tab2">

                                <p class="fst-italic">KML (Keyhole Markup Languange) adalah bagian dari Extensible
                                    Markup Languange
                                    (XML), yakni bahasa pemrograman yang dapat memvisualisaikan peta dua atau tiga
                                    dimensi dan dapat
                                    mengekpresikan data geografis pada Google Earth. KML bisa menyimpan obyek utama
                                    seperti titik, garis
                                    dan luasan dalam format tertentu sehingga bisa ditampilkan dengan Google Maps</p>

                            </div><!-- End Tab 2 Content -->

                            <div class="tab-pane fade show" id="tab3">

                                <p class="fst-italic">Google Earth merupakan sebuah perangkat lunak yang dapat
                                    dimanfaatkan oleh
                                    penggunanya untuk dapat berkeliling dunia menuju ke berbagai permukaan Bumi.
                                    Aplikasi google earth ini
                                    dapat mempermudah penggunanya untuk mencari lokasi ke berbagai belahan Bumi, bahkan
                                    aplikasi ini dapat
                                    memberikan gambaran secara visual mengenai lokasi atau tempat yang ingin dilihat.
                                    Pada umumnya lokasi
                                    atau tempat yang ditampikan pada google earth tersebut sesuai dengan aslinya dan
                                    juga menunjukkan
                                    berbagai informasi-informasi mengenai lokasi dan tempat yang ingin dilihat tersebut.
                                </p>

                            </div><!-- End Tab 3 Content -->

                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Intruction</h2>
                    <p>Perhatikan petunjuk penggunaan agar hasil konversi bisa sesuai!</p>
                </div>
                <!-- ======= Features Section ======= -->
                <section id="features" class="features">
                    <div class="container" data-aos="fade-up">
                        <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">
                            <li class="nav-item col-6 col-md-4 col-lg-2">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                    <h4>File Excel</h4>
                                </a>
                            </li><!-- End Tab 1 Nav -->

                            <li class="nav-item col-6 col-md-4 col-lg-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                    <h4>Konvert</h4>
                                </a>
                            </li><!-- End Tab 2 Nav -->

                            <li class="nav-item col-6 col-md-4 col-lg-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                    <h4>Output KML</h4>
                                </a>
                            </li><!-- End Tab 3 Nav -->

                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                        <h3>File Excel</h3>
                                        <p class="fst-italic">
                                            Untuk menggunakan website ini, format file excel harus dalam xlsx. Agar
                                            konversi berfungsi dengan
                                            benar, maka data excel tersebut harus mengikuti aturan sebagai berikut:
                                        </p>
                                        <ul>
                                            <li><i class="bi bi-check-circle-fill"></i> Data harus memiliki kolom dengan
                                                header ODP_NAME,
                                                LATITUDE, dan LONGITUDE untuk menampilkan titik koordinat. (Pastikan
                                                penulisan header sudah
                                                sesuai )</li>
                                            <li><i class="bi bi-check-circle-fill"></i> Koordinat Lintang (Latitude) dan
                                                Bujur (Longitude)
                                                harus dalam decimal degree. Contoh Latitude: -5.501544622, Longitude:
                                                122.5642734.</li>
                                            <li><i class="bi bi-check-circle-fill"></i> Warna icon dapat disesuaikan
                                                dengan menambahkan kolom
                                                dengan nama header OCC_2 dan berikan keterangan warna masing-masing
                                                titik. *Warna yang bisa
                                                ditampilkan hanya 4 macam. RED dan ORANGE untuk icon merah, BLACK untuk
                                                icon hitam, GREEN untuk
                                                icon Hijau, dan YELLOW untuk icon kuning. (Pastikan keterangan warna
                                                ditulis dengan capital dan
                                                bahasa inggris)</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                        <img src="assets/img/petunjuk.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div><!-- End Tab Content 1 -->

                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="col-lg-8 order-2 order-lg-1">
                                        <h3>Konvert</h3>
                                        <p>
                                            Jika ingin mengelompokkan titik koordinat dengan folder tertentu, silahkan
                                            menginputkan terlebih
                                            dahulu nama header yang akan menjadi patokan pembagian folder. Misal
                                            berdasarkan DATEL, STO atau
                                            yang lainnya. (Inputkan nama header yang sesuai, misal "STO" tanpa tanda
                                            petik)
                                        </p>
                                    </div>
                                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                                        <img src="assets/img/petunjuk2.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div><!-- End Tab Content 2 -->

                            <div class="tab-pane" id="tab-3">
                                <div class="row gy-4">
                                    <div class="col-lg-8 order-2 order-lg-1">
                                        <h3>Output KML</h3>
                                        <p>
                                            Jika proses konversi sudah selesai, file KML akan otomatis terdownlod dan
                                            akan masuk ke dalam
                                            folder download.
                                            Bukalah file KML tersebut dengan aplikasi Google Earth.
                                            Di samping adalah file KML hasil convert dari contoh tabel pada petunjuk
                                            file excel dengan
                                            pembagian folder berdasarkan STO
                                        </p>
                                    </div>
                                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                                        <img src="assets/img/petunjuk3.jpeg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div><!-- End Tab Content 3 -->

                        </div>

                    </div>
                </section><!-- End Features Section -->

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio" data-aos="fade-up">

            <div class="container">

                <div class="section-header">
                    <h2>Tutorial</h2>
                    <p>Berikut demo tutorial penggunaan konversi pada website ini</p>

                </div>
                <div class="text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/XMDPqQoJNO4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Mahasiswa Universitas Halu Oleo</p>
                </div>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.05803525201!2d122.51817937408622!3d-4.0084908446592395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d988d6bd3354ccb%3A0x7c6a67b8ee76c342!2sUniversitas%20Haluoleo!5e0!3m2!1sid!2sid!4v1684215253965!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="container">

                <div class="info">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>Kampus Hijau Bumi Tridharma, Anduonohu, Kec. Kambu, Kota Kendari, Sulawesi
                                Tenggara 93232</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>excelkml1@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>0823787878787</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>ExcelKML</h3>
                            <p>
                                Kampus Hijau Bumi Tridharma, Anduonohu, Kec. Kambu, Kota Kendari, Sulawesi Tenggara
                                93232<br><br>
                                <strong>Phone:</strong> 082387878787<br>
                                <strong>Email:</strong> excelkml1@gmail.com<br>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>ExcelKML</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>