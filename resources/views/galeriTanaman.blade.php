<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('app.name', ' | Galeri tanaman') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/Icon/AgroVest.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/stylegaleritanaman.css') }}" rel="stylesheet">

    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url("assets/img/Home/pupuk01.png") bottom center;
            background-size: cover;
        }
    </style>
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/icon/Profil.png" alt="">
                @if (Session::get('username') == 'adminVest')
                    <div class="text-end mt-3">
                        <h1 class="text-light text-center fw-bold">
                            {{ Session::get('nama') }}
                        </h1>
                        <div class="text-center">
                            <a href="{{ url('admin') }}" class="btn btn-sm mt-2 hijauuu" style="width: 100px;">
                                <i class="bi bi-shield-lock"></i> admin
                            </a>
                            <a href="{{ url('signout') }}" class="btn btn-danger btn-sm mt-2" style="width: 100px;">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </div>
                    </div>
                @elseif (!empty(Session::get('username')))
                    <div class="text-end mt-3">
                        <h1 class="text-light text-center fw-bold">
                            {{ Session::get('nama') }}
                        </h1>
                        <div class="text-center">
                            <a href="{{ url('profile') }}" class="btn btn-sm mt-2 hijauuu" style="width: 100px;">
                                <i class="bi bi-person-circle"></i> Profile
                            </a>
                            <a href="{{ url('signout') }}" class="btn btn-danger btn-sm mt-2" style="width: 100px;">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </div>
                    </div>
                @else
                    <a href="login" class="btn btn mt-2 hijauuu mx-auto fw-bold" style="display: block; width: 100%;">Login</a>
                @endif

                <div style="margin-bottom: 11rem;">
                    <nav id="navbar" class="nav-menu navbar">
                        <ul>
                            <li><a href="index" class="nav-link scrollto"><i class="bx bx-home"></i>
                                    <span>Home</span></a>
                            </li>
                            <li><a href="galeriTanaman" class="nav-link scrollto active"><i
                                        class="bx bi-tree-fill"></i><span>Galeri Tanaman</span></a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-split"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bx bi-image"></i>Galeri</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a href="galeriPupuk" class="nav-link scrollto"><i
                                                class="bx bi-bucket"></i>
                                            <span>Galeri Pupuk</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-split"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bx bxs-archive"></i>Fitur</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a href="kalkulator" class="nav-link scrollto"><i
                                                class="bx bx-calculator"></i>
                                            <span>Calculator</span></a></li>
                                    <li><a href="chat" class="nav-link scrollto"><i
                                                class="bx bx-chat"></i><span>Chat Room</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div style="float: bottom; text-align: center;">
                <img src="assets/img/Icon/AgroVest2.png" alt="logo" style="height: 57px; width: 198px;">
            </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Galeri Tanaman</h1>
            <p><span class="typed" data-typed-items="Fertilizer | Knowledge | Photo"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Galeri Tanaman</h2>
                    <p style="text-align: justify; font-size: 18px;">Selamat datang di Galeri Tanaman Agrovest, di mana
                        kami memberikan berbagai informasi jenis tanaman pangan, sayuran, dan buah-buahan yang dapat
                        menjadi aset berharga dalam pertanian Anda. Kami percaya bahwa memahami dan mengetahui lebih
                        banyak tentang tanaman-tanaman ini akan membantu Anda mencapai hasil panen yang lebih maksimal
                        dan mengembangkan usaha pertanian Anda. Kami memiliki koleksi lengkap informasi tentang berbagai
                        jenis tanaman pangan, sayuran, dan buah-buahan, termasuk panduan cara menanam, merawat, dan
                        mengatasi masalah yang mungkin muncul selama proses pertumbuhan.
                    </p>
                </div>

                <div id="gambarTanaman" class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li id="pangan" data-filter=".filter-app">Tanaman Pangan</li>
                            <li id="sayur" data-filter=".filter-card">Tanaman Sayur</li>
                            <li id="buah" data-filter=".filter-web">Tanaman Buah-buahan</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/padi.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/padi.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" style="background-color: #81B228;"
                                    title="Tanaman padi merupakan tanaman pangan pokok yang banyak dikonsumsi oleh orang Indonesia. Padi dengan nama latin *Oryza sativa* termasuk dalam suku padi-padian atau poaceae. <br> Pembahasan lebih lanjut mengenai padi dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://ketahananpangan.semarangkota.go.id/v3/portal/page/artikel/Padi-Oryza-Sativa"
                                    style="background-color: #81B228;" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/jagung.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/jagung.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" style="background-color: #81B228;"
                                    title="Jagung merupakan jenis tanaman pangan yang menghasilkan karbohidrat. Tanaman jagung tumbuh di dataran rendah yang tingginya mencapai sekitar 1200 meter dpl. <br> Pembahasan lebih lanjut mengenai jagung dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://pustaka.setjen.pertanian.go.id/info-literasi/budidaya-jagung"
                                    style="background-color: #81B228;" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/kedelai.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/kedelai.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    style="background-color: #81B228;"
                                    title="Tanaman kacang kedelai (Glycine max (L.) Merrill) Kedelai merupakan tanaman pangan berupa semak yang tumbuh tegak. Kedelai adalah tumbuhan yang selalu peka terhadap pencahayaan. Dalam pencahayaan agak rendah batangnya akan mengalami pertumbuhan memanjang sehingga berwujud seperti tanaman merambat. <br> Pembahasan lebih lanjut mengenai kedelai dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://pustaka.setjen.pertanian.go.id/index-berita/budidaya-kedelai"
                                    style="background-color: #81B228;" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/cabai.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/cabai.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" style="background-color: #81B228;"
                                    title="Tanaman cabai adalah tanaman semusim yang termasuk dalam genus Capsicum. Cabai memiliki buah berwarna merah, hijau, kuning, atau bahkan ungu, tergantung pada jenisnya. Tanaman ini tumbuh subur di daerah tropis dan subtropis, memerlukan sinar matahari yang cukup untuk menghasilkan buah yang pedas. <br> Pembahasan mengenai budidaya cabai dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://digitani.ipb.ac.id/bagaimana-langkah-langkah-budidaya-cabai/"
                                    style="background-color: #81B228;" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/tomat.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/tomat.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" style="background-color: #81B228;"
                                    title="Tanaman tomat (Solanum lycopersicum) adalah tumbuhan semusim yang termasuk dalam keluarga Solanaceae. Tanaman ini memiliki batang yang berkayu dan daun yang terdiri dari beberapa helai. Buahnya, yang dikenal sebagai tomat, bervariasi dalam warna seperti merah, oranye, kuning, atau hijau, tergantung pada jenisnya. <br> Pembahasan mengenai budidaya tomat dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://www.gramedia.com/best-seller/budidaya-tanaman-tomat/"
                                    style="background-color: #81B228;" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/mangga.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/mangga.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" style="background-color: #81B228;"
                                    title="Tanaman mangga (Mangifera indica) adalah pohon hijau yang termasuk dalam keluarga Anacardiaceae. Buah mangga memiliki daging yang lembut dan berair, seringkali berwarna oranye hingga kuning terang. Rasa buahnya sangat manis dan aromatik. <br> Pembahasan mengenai budidaya mangga dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://pustaka.setjen.pertanian.go.id/index-berita/budidaya-buah-mangga"
                                    style="background-color: #81B228;" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/bawang-merah.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/bawang-merah.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    style="background-color: #81B228;"
                                    title="Bawang merah adalah tanaman umbi yang termasuk dalam genus Allium dan memiliki rasa yang lebih manis dibandingkan bawang putih. Bawang merah juga dikenal karena kandungan antioksidan dan nutrisinya yang bermanfaat bagi kesehatan. <br> Pembahasan lebih lanjut mengenai bawang merah dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://www.gramedia.com/best-seller/budidaya-bawang-merah/"
                                    style="background-color: #81B228;" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/apel.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/apel.png') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" style="background-color: #81B228;"
                                    title="Tanaman apel (Malus domestica) adalah pohon buah yang berasal dari Eurasia dan termasuk dalam keluarga Rosaceae. Apel dikenal sebagai sumber serat, vitamin C, dan antioksidan.  Buah apel sendiri bervariasi dalam ukuran, warna, dan rasa, tergantung pada jenisnya, dengan kulit yang dapat berwarna merah, kuning, atau hijau. <br> Pembahasan mengenai budidaya apel dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://gdm.id/budidaya-apel/" style="background-color: #81B228;"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </section><!-- End Portfolio Section -->


</body>

<!-- Footer Start -->
<div class="container-fluid text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s"
    style="background: linear-gradient(to top, #006400 0%, #81b228 100%);">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-dark mb-4"><b>AgroVest</b></h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt"></i>Bogor, Jawa Barat</p>
                <p class="mb-2"><i class="fa fa-envelope"></i>agrovest05@gmail.com</p>
                <div class="d-flex pt-2">
                    <a href="#"><i class="bi bi-instagram"
                            style="color: #040b14; padding-right: 20px;"></i></a>
                    <a href="#"><i class="bi bi-whatsapp" style="color: #040b14; padding-right: 20px;"></i></a>
                    <a href="#"><i class="bi bi-telegram" style="color: #040b14; padding-right: 20px;"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-dark mb-4"><b>Services</b></h4>
                <a class="btn btn-link text-decoration-none text-light" href="">Landscaping</a>
                <a class="btn btn-link text-decoration-none text-light" href="">Pruning plants</a>
                <a class="btn btn-link text-decoration-none text-light" href="">Urban Gardening</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-dark mb-4"><b>Special Links</b></h4>
                <a class="btn btn-link text-decoration-none text-light" href="">About Us</a>
                <a class="btn btn-link text-decoration-none text-light" href="">Contact Us</a>
                <a class="btn btn-link text-decoration-none text-light" href="">Our Services</a>
                <a class="btn btn-link text-decoration-none text-light" href="">Terms & Condition</a>
                <a class="btn btn-link text-decoration-none text-light" href="">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-dark mb-4"><b>Thanks To</b></h4>
                <p>Sekolah Vokasi Institut Pertanian Bogor</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

</main>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>
