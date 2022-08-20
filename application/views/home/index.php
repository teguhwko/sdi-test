<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $judul ?></title>

    <!-- Favicons -->
    <link href="<?= base_url('vesperr/') ?>img/logo.png" rel="icon">
    <link href="<?= base_url('vesperr/') ?>img/logo.png" rel="logo">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('vesperr/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('vesperr/') ?>vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('vesperr/') ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('vesperr/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('vesperr/') ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('vesperr/') ?>vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('vesperr/') ?>vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('vesperr/') ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Vesperr - v2.3.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html"><span><img src="<?= base_url('vesperr/') ?>img/logo.png" alt=""></span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="<?= base_url('vesperr/') ?>img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#index.html">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <?php if ($this->session->userdata('nama')) { ?>
                        <li><a href="<?= base_url('Dashboard') ?>">Dashboard</a></li>
                    <?php } else { ?>
                        <li><a href="<?= base_url('Login') ?>">Login</a></li>
                    <?php } ?>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">CV Persia Daya Energi</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">(Energi Solar) <br> Hijau Untuk Negeri
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <?php if ($this->session->userdata('nama')) { ?>
                            <a href="<?= base_url('Dashboard') ?>" class="btn-get-started scrollto">Dashboard</a>
                        <?php } else { ?>
                            <a href="<?= base_url('Login') ?>" class="btn-get-started scrollto">Login</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="<?= base_url('vesperr/') ?>img/gambar cv persia daya energi.jpg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients clients">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="<?= base_url('vesperr/') ?>img/clients/client-1.png" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="<?= base_url('vesperr/') ?>img/clients/client-2.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <br>
                        <img src="<?= base_url('vesperr/') ?>img/clients/client-3.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="<?= base_url('vesperr/') ?>img/clients/client-4.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>About Us</h2>
                </div>

                <div class="row content justify-content-center">

                    <div class="col-lg-8 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="150">
                        <p style="text-align: center;">
                            CV. Persia Daya Energi yang berbasiskan jasa konstruksi elektrikal dan mekanikal ini
                            berdiri pada tahun 2012. Meski bisa dikatakan baru, namun kiprahnya dalam dunia
                            konstruksi di Indonesia sudah mampu untuk disandingkan dengan banyak perusahaan
                            nasional lainnya yang sudah lebih dulu hadir. CV. Persia Daya Energi berkomitmen
                            memberikan sumbangsih keahlian dan pengalamannya demi kemajuan sektor
                            konstruksi dengan mengutamakan mutu pelayanan dengan tidak meniggalkan aspek
                            kesehatan dan keselamatan kerja dalam pelaksanaan segala aktifitas perusahaan. Kunci
                            kesuksesan kami terletak pada tiga hal utama yaitu penyediaa sumber daya manusia
                            berkualitas, ketepatan waktu, serta hasil kerja yang terpercaya. CV. Persia Daya Energi
                            selalu berupaya membangun hubungan kemitraan jangka panjang yang didasarkan
                            pada kepercayaan dan kepuasan pelanggan.
                        </p>
                        <center><a href="#contact" class="btn-learn-more">Hubungi Kami</a></center>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Services</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Contractor</a></h4>
                            <p class="description">Kami bergerak dibidang badan hukum yang dikontrak atau disewa oleh pemilik proyek
                                untuk melaksanakan pekerjaan sesuai dengan perjanjian kontrak yang telah disepakati dan sesuai dengan
                                keahliannya.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Electrical</a></h4>
                            <p class="description">Kami bergerak dibidang teknik listrik melibatkan konsep, perancangan, pengembangan,
                                dan produksi perangkat listrik dan elektronik yang dibutuhkan oleh masyarakat.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Mechanical</a></h4>
                            <p class="description">Kami bergerak dibidang mechanical mengenai sebuah proyek konstruksi bangunan. Pada
                                bidang ini kami menyediakan jasa dalam bidang proyek mechanical.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Supplier</a></h4>
                            <p class="description">Kami menyediakan bahan baku untuk menghasilkan produk akhir berupa jasa. Supplier
                                ini tidak hanya bertugas untuk memasok bahan baku jasa dan juga pemasok barang.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Team</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <img src="<?= base_url('vesperr/') ?>img/team/team.png" class="img-fluid animated" alt="">
                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact Us</h2>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= base_url('vesperr/') ?>img/logo.png" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>CV Persia Daya Energi</h3>
                            <p>CV. Persia Daya Energi berkomitmen
                                memberikan sumbangsih keahlian dan pengalamannya demi kemajuan sektor
                                konstruksi dengan mengutamakan mutu pelayanan dengan tidak meniggalkan aspek
                                kesehatan dan keselamatan kerja dalam pelaksanaan segala aktifitas perusahaan. Kunci
                                kesuksesan kami terletak pada tiga hal utama yaitu penyediaa sumber daya manusia
                                berkualitas, ketepatan waktu, serta hasil kerja yang terpercaya</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p>Jln. Bandar Buat No 17 Padang, Bandar Buat, Kec. Lubuk Kilangan, Kota Padang, Sumatera Barat
                                    25231
                                </p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>cvpersiadayaenergi@gmail.com</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>+62 813-6338-1653</p>
                            </div>

                        </div>
                    </div>



                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>CV Persia Daya Energi</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="index.html">Home</a>
                        <a href="#services">Services</a>
                        <a href="#team">Team</a>
                        <a href="#contact">Contact</a>
                        <?php if ($this->session->userdata('nama')) { ?>
                            <a href="<?= base_url('Dashboard') ?>">Dashboard</a>
                        <?php } else { ?>
                            <a href="<?= base_url('Login') ?>">Login</a>
                        <?php } ?>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('vesperr/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('vesperr/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('vesperr/') ?>vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('vesperr/') ?>vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('vesperr/') ?>vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('vesperr/') ?>vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url('vesperr/') ?>vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('vesperr/') ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('vesperr/') ?>vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url('vesperr/') ?>vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('vesperr/') ?>js/main.js"></script>

</body>

</html>