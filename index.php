<?php
function test(){
    return 1;
}

if (isset($_POST["submit"])) {
    if (test($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script> ";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kiki BarberShop</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-barber-shop.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

                <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/templatemo-barber-logo.png" class="logo-image img-fluid" align="">
                    </a>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Price List</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                    <div class="container">
                        <div class="row">

                            <div class="col-lg-8 col-12">
                                <h1 class="text-white mb-lg-3 mb-4"><strong>Barber <em>Shop</em></strong></h1>
                                <p class="text-black">Dapatkan potongan rambut paling bagu untuk kamu</p>
                                <br>
                                <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2" href="#section_5">Tentang Kami</a>

                                <a class="btn custom-btn smoothscroll mb-2" href="#section_3">Apa yang kita lakukan</a>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap mt-4 mt-lg-0 mb-5 mb-lg-0">
                            <div class="team-info d-flex align-items-center flex-wrap">
                            </div>
                        </div>
                    </div>
                </div>
                </section>

                <section class="featured-section section-padding">
                    <div class="section-overlay"></div>

                    <div class="container">
                        <div class="row">

                            <div class="col-lg-10 col-12 mx-auto">
                                <h2 class="mb-3">Dapatkan Diskon 10%</h2>

                                <p>Pada setiap akhir minggu setiap bulan</p>

                                <strong>Promo Code: barBerQQ</strong>
                            </div>

                        </div>
                    </div>
                </section>


                <section class="services-section section-padding" id="section_3">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <h2 class="mb-5">Services</h2>
                            </div>

                            <div class="col-lg-6 col-12 mb-4">
                                <div class="services-thumb">
                                    <img src="images/services/woman-cutting-hair-man-salon.jpg" class="services-image img-fluid" alt="">

                                    <div class="services-info d-flex align-items-end">
                                        <h4 class="mb-0">Potong Rambut</h4>

                                        <strong class="services-thumb-price">Rp36.000</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mb-4">
                                <div class="services-thumb">
                                    <img src="images/services/hairdresser-grooming-their-client.jpg" class="services-image img-fluid" alt="">

                                    <div class="services-info d-flex align-items-end">
                                        <h4 class="mb-0">Cuci Rambut</h4>

                                        <strong class="services-thumb-price">Rp30.000</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                <div class="services-thumb">
                                    <img src="images/services/hairdresser-grooming-client.jpg" class="services-image img-fluid" alt="">

                                    <div class="services-info d-flex align-items-end">
                                        <h4 class="mb-0">Cukur Janggut</h4>

                                        <strong class="services-thumb-price">Rp25.000</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="services-thumb">
                                    <img src="images/services/boy-getting-haircut-salon-front-view.jpg" class="services-image img-fluid" alt="">

                                    <div class="services-info d-flex align-items-end">
                                        <h4 class="mb-0">Anak-anak</h4>

                                        <strong class="services-thumb-price">Rp25.000</strong>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="booking-section section-padding" id="booking-section">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-10 col-12 mx-auto">
                                <form action="#section_4" method="post" class="custom-form booking-form" id="bb-booking-form" role="form">
                                    <div class="text-center mb-5">
                                        <h2 class="mb-1">Pesan</h2>

                                        <p>Silakan isi formulir dan kami akan menghubungi Anda kembali</p>
                                    </div>

                                    <div class="booking-form-body">
                                        <div class="row">

                                            <div class="col-lg-6 col-12">
                                                <input type="text" name="bb-name" id="bb-name" class="form-control" placeholder="Nama lengkap" required>
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <input class="form-control" type="time" name="bb-time" value="18:30" />
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <select class="form-select form-control" name="bb-branch" id="bb-branch" aria-label="Default select example">
                                                    <option selected="">Pilih lokasi</option>
                                                    <option value="Cicurug">Cicurug</option>
                                                    <option value="Cigombong">Cigombong</option>
                                                    <option value="Caringin">Caringin</option>
                                                </select>

                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="text" name="typeRambut" id="typeRambut" class="form-control" placeholder="Jenis Cukur" required>
                                            </div>
                                        </div>

                                        <textarea name="bb-message" rows="3" class="form-control" id="bb-message" placeholder="Komen (Opsional)"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" name="submit" class="form-control">Kirim</button>
                                        </div>
                                    </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </section>


                <section class="price-list-section section-padding" id="section_4">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-8 col-12">
                                <div class="price-list-thumb-wrap">
                                    <div class="mb-4">
                                        <h2 class="mb-2">Daftar</h2>

                                        <strong>Mulai dari Rp.25.000</strong>
                                    </div>

                                    <div class="price-list-thumb">
                                        <h6 class="d-flex">
                                            Haircut
                                            <span class="price-list-thumb-divider"></span>

                                            <strong>Rp32.000</strong>
                                        </h6>
                                    </div>

                                    <div class="price-list-thumb">
                                        <h6 class="d-flex">
                                            Beard Trim
                                            <span class="price-list-thumb-divider"></span>

                                            <strong>Rp26.000</strong>
                                        </h6>
                                    </div>

                                    <div class="price-list-thumb">
                                        <h6 class="d-flex">
                                            Razor Cut
                                            <span class="price-list-thumb-divider"></span>

                                            <strong>Rp36.000</strong>
                                        </h6>
                                    </div>

                                    <div class="price-list-thumb">
                                        <h6 class="d-flex">
                                            Cukur Janggut
                                            <span class="price-list-thumb-divider"></span>

                                            <strong>Rp30.000</strong>
                                        </h6>
                                    </div>

                                    <div class="price-list-thumb">
                                        <h6 class="d-flex">
                                            Mewarnai Rambut
                                            <span class="price-list-thumb-divider"></span>

                                            <strong>Rp25.000</strong>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
                                <img src="images/vintage-chair-barbershop.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
                            </div>

                        </div>
                    </div>
                </section>


                <section class="contact-section" id="section_5">
                    <div class="section-padding section-bg">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-8 col-12 mx-auto">
                                    <h4 class="text-center">"Tukang cukur adalah seniman yang menggambar di kepala seseorang menjadi tren dan mode."</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-padding">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <h5 class="mb-3"><strong>Kontak</strong></h5>

                                    <p class="text-white d-flex">
                                        <a href="#" class="site-footer-link">
                                            hallo@barber.kiki
                                        </a>
                                    </p>
                                </div>

                                <div class="col-lg-5 col-12 contact-block-wrap mt-5 mt-lg-0 pt-4 pt-lg-0 mx-auto">
                                    <div class="contact-block">
                                        <h6 class="mb-0">
                                            <i class="custom-icon bi-shop me-3"></i>
                                            <strong>Buka Setiap Hari</strong>
                                            <span class="ms-auto">10:00 AM - 8:00 PM</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <footer class="site-footer">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <h4 class="site-footer-title mb-4">Cabang Lainnya</h4>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <div class="site-footer-thumb">
                                    <strong class="mb-1">Cicurug</strong>

                                    <p>Jl. Siliwangi No 40, Benda, Cicurug</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <div class="site-footer-thumb">
                                    <strong class="mb-1">Cigombong</strong>

                                    <p>Jl. Siliwangi No 32, Bojong, Cigombong</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <strong class="mb-1">Caringin</strong>

                                <p>Jl. Siliwangi No 18, Maseng, Caringin</p>
                            </div>
                        </div>
                    </div>

                    <div class="site-footer-bottom">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-8 col-12 mt-4">
                                    <p class="copyright-text mb-0">Copyright © 2023 Barber Shop Kiki </p>
                                </div>

                                <div class="col-lg-2 col-md-3 col-3 mt-lg-4 ms-auto">
                                    <a href="#section_1" class="back-top-icon smoothscroll" title="Back Top">
                                        <i class="bi-arrow-up-circle"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- JAVASCRIPT FILES -->
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/click-scroll.js"></script>
            <script src="js/custom.js"></script>

</body>

</html>
