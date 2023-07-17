<?php

include 'konek.php';

if (isset($_POST['btnDaftar'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = mysqli_query($konek, "INSERT INTO tb_user VALUES ('','$username','$password')");

    if ($query) {
        echo "
            <script>
                alert('Daftar Akun Sukses');
                window.location.href='login.php';
            </script>
        ";
    }
}

// if (isset($_POST['btnDaftar'])) {
//     $username = mysqli_real_escape_string($konek, $_POST['username']);
//     $password = mysqli_real_escape_string($konek, $_POST['password']);
//     $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

//     $query = mysqli_query($konek, "INSERT INTO tb_user (username, password) VALUES ('$username', '$hashedPassword')");

//     if ($query) {
//         echo "
//             <script>
//                 alert('Daftar Akun Sukses');
//                 window.location.href='login.php';
//             </script>
//         ";
//     } else {
//         echo "Error: " . mysqli_error($konek);
//     }
// }

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

    <!-- Template Main CSS File -->
    <link href="assets/css/variables.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>ExcelKml<span>.</span></h1>
            </a>

        </div>
    </header><!-- End Header -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <h2>Daftar <span>ExcelKML</span></h2>
            <p>Silahkan daftar terlebih dahulu</p>
            <div class="container mt-3">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header text-center">
                                DAFTAR
                            </div>
                            <form action="" method="post">
                                <div class="card-body">
                                    <label for="username" class="form-label">Username</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg></span>
                                        <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan Username" aria-describedby="basic-addon3">
                                    </div>
                                    <!-- <label for="email" class="form-label">Email</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                            </svg></span>
                                        <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan Email" aria-describedby="basic-addon3">
                                    </div> -->
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
                                                <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z" />
                                            </svg></span>
                                        <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan Password" aria-describedby="basic-addon3">
                                    </div>
                                    <div class="row mb-3">
                                        <button type="submit" class="btn btn-info" name="btnDaftar" id="btnDaftar">Daftar</button>
                                    </div>
                                    <div class="text-center">
                                        Sudah punya akun? silahkan <a href="login.php">Login</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


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
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
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