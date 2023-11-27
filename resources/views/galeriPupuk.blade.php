<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('app.name') }} | Galeri Pupuk</title>
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
    <link href="{{ asset('assets/css/stylegaleripupuk.css') }}" rel="stylesheet">

    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url("assets/img/Home/galeripupuk.png") bottom center;
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
                <img src="{{ asset('assets/img/icon/Profil.png') }}" alt="">
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
                            <li><a href="galeriPupuk" class="nav-link scrollto active"><i class="bx bi-bucket"></i>
                                    <span>Galeri Pupuk</span></a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-split"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bx bi-image"></i>Galeri</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a href="galeriTanaman" class="nav-link scrollto"><i
                                                class="bx bi-tree-fill"></i><span>Galeri Tanaman</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-split"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bx bxs-archive"></i>Fitur</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a href="kalkulator" class="nav-link scrollto"><i class="bx bx-calculator"></i>
                                            <span>Calculator</span></a></li>
                                    <li><a href="chat" class="nav-link scrollto"><i class="bx bx-chat"></i><span>Chat
                                                Room</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div style="float: bottom; text-align: center;">
                <img src="{{ asset('assets/img/Icon/AgroVest2.png') }}" alt="logo"
                    style="height: 57px; width: 198px;">
            </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Galeri Pupuk</h1>
            <p><span class="typed" data-typed-items="Fertilizer | Knowledge | Photo"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Galeri Pupuk</h2>
                    <p style="text-align: justify; font-size: 18px;">Selamat datang di Galeri Pupuk Agrovest, tempat
                        yang menyediakan informasi komprehensif mengenai pupuk, termasuk pupuk kandang, pupuk hijau, dan
                        pupuk kompos. Kami berkomitmen untuk memberikan panduan tentang penggunaan pupuk yang bijak,
                        memastikan kesuburan tanah, dan menjaga keberlanjutan ekologi dalam pertanian. Dengan informasi
                        yang kami sediakan, Anda dapat mengoptimalkan pemakaian pupuk sesuai dengan jenis tanaman dan
                        kondisi tanah di wilayah Anda, membantu pertumbuhan tanaman, dan mencapai hasil panen yang lebih
                        besar. Galeri Pupuk Agrovest adalah sumber pengetahuan yang lengkap bagi petani yang ingin
                        meningkatkan hasil pertanian mereka secara optimal.
                    </p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Pupuk Organik</li>
                            <li data-filter=".filter-card">Pupuk Anorganik</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/kandang1.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/kandang1.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" style="background-color: #81B228;"
                                    title="Pupuk kandang merupakan pupuk yang berasal dari kotoran hewan. Pupuk kandang ada yang berbentuk padat dan ada yang cair, pupuk kandang cair berasal dari urnine hewan. Pupuk kandang mengandung unsur hara makro dan mikro. Pupuk kandang padat (makro) banyak mengandung unsur fosfor, nitrogen dan kalium. Unsur hara mikro yang terkandung dalam pupuk kandang di antaranya kalsium, magnesium, belerangnatrium, besi, tembaga, dan molibdenum. <br> Pembuatan pupuk kandang dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://pertanian.ngawikab.go.id/2022/12/22/pembuatan-pupuk-kandang-dari-kohe-kambing/#:~:text=Pupuk%20kandang%20adalah%20pupuk%20yang,air%20kencing%20(urine)%20hewan."
                                    style="background-color: #81B228;"
                                    title="Pembuatan Pupuk Kandang Dari Kohe Kambing"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/kompos.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/kompos.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" style="background-color: #81B228;"
                                    title="Pupuk kompos berasal dari penguraian sampah organik. Pupuk kompos bisa dibuat dari daun, jerami, alang-alang, rumput, dedak padi, batang jagung, sulur, dan bahan organik lain. Pengomposan sebenarnya bisa terjadi secara alami. Namun ketika ada tindakan dari manusia seperti penambahan mikroorganisme pengurai, pengomposan terjadi lebih cepat. 
<br> Pembuatan pupuk kompos dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://www.detik.com/jabar/berita/d-6895557/jenis-jenis-pupuk-kompos-manfaat-dan-cara-membuatnya"
                                    style="background-color: #81B228;" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/guano1.jpeg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/guano1.jpeg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    style="background-color: #81B228;"
                                    title="Pupuk guano termasuk kedalam jenis pupuk organik yang terbuat dari kotoran kelelawar. pupuk guano adalah pupuk organik yang dihasilkan dari kotoran kelalawar dan sudah mengendap lama di dalam gua dan telah bercampur dengan tanah dan bakteri pengurai. <br> Pembuatan pupuk guano dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://agri.kompas.com/read/2023/08/02/194529084/cara-membuat-pupuk-guano-cair-dan-padat-dengan-mudah"
                                    style="background-color: #81B228;" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/tsp.jpeg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/tsp.jpeg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" style="background-color: #81B228;"
                                    title="Pupuk TSP (Triple Super Phosphate) merupakan pupuk anorganik yang mengandung cukup tinggi unsur hara phospate. Banyaknya kandungan  fosfor pada jenis pupuk tersebut adalah sekitar 44-46% dalam bentuk P2O5. <br> Pembahasan lebih lanjut mengenai pupuk urea dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://www.agronasa.com/pupuk-tsp/" style="background-color: #81B228;"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/Galeri/urea.jpeg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/Galeri/urea.jpeg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" style="background-color: #81B228;"
                                    title="Pupuk urea merupakan salah satu pupuk yang memiliki kandungan nitrogen yang cukup tinggi. Urea merupakan senyawa organik yang tersusun dari karbon, oksigen, hidrogen serta nitrogen dengan rumus berupa CON2H4 atau (NH2)2CO.  <br> Pembahasan lebih lanjut mengenai pupuk urea dapat dilihat dengan menekan tombol tautan disamping."><i
                                        class="bx bx-plus"></i></a>
                                <a href="https://www.gramedia.com/best-seller/pupuk-urea/"
                                    style="background-color: #81B228;" title="More Details"><i
                                        class="bx bx-link"></i></a>
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
