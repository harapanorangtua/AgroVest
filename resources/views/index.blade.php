<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Agrovest | Harapan Orang Tua</title>
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
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url("assets/img/Home/Depan.jpg") top center;
            background-size: cover;
        }

        #berita {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Atur tinggi sesuai kebutuhan Anda */
        }

        .image-overlay {
            position: relative;
        }

        .image-overlay img {
            width: 100%;
            height: auto;
        }

        /* news */
        #carouselExampleAutoplaying body {
            background: linear-gradient(-100deg, white 50%, deepink 50%);
            height: 70vh;
        }

        .img-text {
            width: 100%;
            height: 300px;
            display: block;
            text-align: center;
            padding: 40% 5%;
            color: #fff;
            border-radius: 15pt;
        }

        .img-text h2 {
            font-size: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .img-text p {
            font-size: 14px;
        }

        .single-box {
            position: relative;
            margin-bottom: 30px;
        }

        .img-area img {
            width: 100%;
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
                            <li><a href="index" class="nav-link scrollto active"><i class="bx bx-home"></i>
                                    <span>Beranda</span></a>
                            </li>
                            <li><a href="#agroNews" class="nav-link scrollto active"><i
                                        class="bx bi-globe-americas"></i>
                                    <span>Berita</span></a></li>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-split"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bx bi-image"></i>Galeri</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a href="galeriPupuk" class="nav-link scrollto"><i class="bx bi-bucket"></i>
                                            <span>Galeri
                                                Pupuk</span></a>
                                    </li>
                                    <li><a href="galeriTanaman" class="nav-link scrollto"><i
                                                class="bx bi-tree-fill"></i><span>Galeri
                                                Tanaman</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-split"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bx bxs-archive"></i>Fitur</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a href="kalkulator" class="nav-link scrollto"><i class="bx bx-calculator"></i>
                                            <span>Kalkulator Pupuk</span></a></li>
                                    <li><a href="chat" class="nav-link scrollto"><i class="bx bx-chat"></i><span>Chat
                                                Room</span></a></li>
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
            <h1>AgroVest</h1>
            <p><span class="typed" data-typed-items="Green | Growing | Growth"></span></p>
            <p>Mendukung pertanian berkelanjutan <br> dan pertumbuhan hijau.</p>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= about Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>AgroVest</h2>
                    <p style="text-align: justify; font-size: 18px;">Aplikasi inovatif yang diciptakan untuk membantu
                        para petani,
                        pengusaha pertanian,
                        dan pemilik usaha pertanian dalam melaksanakan operasional pertanian mereka dengan efisien.
                        Aplikasi ini
                        mengintegrasikan teknologi modern dengan kebutuhan pertanian sehari-hari, memberikan solusi
                        komprehensif
                        untuk meningkatkan produktivitas dan profitabilitas dalam sektor pertanian. Fitur utamanya
                        mencakup
                        perhitungan pupuk yang akurat, chat room petani untuk pertukaran pengetahuan, serta informasi
                        pertanian.</p>
                </div>
        </section><!-- End About Section -->

        <!-- ======= Pupuk Section ======= -->
        <section id="jenisPupuk" class="jenisPupuk">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h2>Pupuk</h2>
                            <p style="text-align: justify; font-size: 18px;">Pupuk adalah bahan yang memiliki kandungan
                                satu atau
                                lebih unsur hara yang diberikan pada tanaman atau
                                media tanam untuk mendukung proses pertumbuhan agar bisa berkembang secara maksimal.
                                Perlu kalian
                                ketahui, terdapat berbagai macam jenis pupuk berdasarkan golongannya.</p>
                        </div>
                    </div>
                    <div class="col-md-5 ms-auto">
                        <img src="{{ asset('assets/img/Icon/Pupuk.png') }}" class="img-fluid">
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                style="color: #fff; background-color: #81b228;">
                                <b>Asalnya</b>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="resume-item">
                                    <h4>Pupuk Alam</h4>
                                    <p><em>Dalam pembuatannya, bahan-bahan yang digunakan berasal dari alam.</em></p>
                                    <ul>
                                        <li>Pupuk Kompos</li>
                                        <li>Pupuk Kandang</li>
                                        <li>Pupuk Guano</li>
                                    </ul>
                                </div>
                                <div class="resume-item pb-0">
                                    <h4>Pupuk Buatan</h4>
                                    <p><em>Seperti nama jenisnya, pupuk ini dibuat oleh pabrik dengan merekayasan bahan
                                            dari alam melalui
                                            proses fisika dan kimia.</em></p>
                                    <ul>
                                        <li>Pupup Urea</li>
                                        <li>Pupup TSP</li>
                                        <li>Pupup ZA</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                style="color: #fff; background-color: #81b228;">
                                <b>Senyawa</b>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="resume-item">
                                    <h4>Pupuk Organik</h4>
                                    <p><em>Bahan yang digunakan rata-rata berasal dari alam, yang prosesnya terjadi
                                            secara alami atau
                                            direkayasa.</em></p>
                                    <ul>
                                        <li>Pupuk Kompos</li>
                                        <li>Pupuk Kandang</li>
                                        <li>Pupuk Guano</li>
                                    </ul>
                                </div>
                                <div class="resume-item pb-0">
                                    <h4>Pupuk Anorganik</h4>
                                    <p><em>Memiliki senyawa anorganik, pupuk anorganik kebanyakan merupakan pupuk buatan
                                            atau pupuk alam
                                            yang terbuat dari bahan kimia.</em></p>
                                    <ul>
                                        <li>Pupup Urea</li>
                                        <li>Pupup TSP</li>
                                        <li>Pupup NPK</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                style="color: #fff; background-color: #81b228;">
                                <b>Penerapan</b>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="resume-item">
                                    <h4>Pupuk Daun</h4>
                                    <p><em>Pupuk daun diaplikasikan dengan cara disemprotkan pada daun tanaman,
                                            rata-rata memiliki
                                            kandungan unsur hara mikro.</em></p>
                                </div>
                                <div class="resume-item pb-0">
                                    <h4>Pupuk Akar</h4>
                                    <p><em>Pupuk akar diaplikasikan dengan cara disebar atau dibenamkan pada tanah
                                            disekeliling tanaman
                                            agar mudah diserap oleh akar. Kebanyakan pupuk akar memiliki kandungan hara
                                            makro.</em></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                                style="color: #fff; background-color: #81b228;">
                                <b>Bentuk</b>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="resume-item">
                                    <h4>Pupuk Padat</h4>
                                    <p><em>Memiliki bentuk fisik padatan dengan kelarutan yang beragam. Kebanyakan
                                            merupakan pupuk yang
                                            menganduk unsur hara makro.</em></p>
                                    <ul>
                                        <li>Pupuk Tablet</li>
                                        <li>Pupuk Briket</li>
                                        <li>Pupuk Granul</li>
                                    </ul>
                                </div>
                                <div class="resume-item pb-0">
                                    <h4>Pupuk Cair</h4>
                                    <p><em>Memiliki bentuk fisik cair, kebanyakan merupakan pupuk yang mengandung unsur
                                            hara makro dan
                                            mikro.</em></p>
                                    <ul>
                                        <li>Pupup cair GDM</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                                style="color: #fff; background-color: #81b228;">
                                <b>Unsur Hara</b>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="resume-item">
                                    <h4>Pupuk Tunggal</h4>
                                    <p><em>Mengandung satu macam unsur hara saja, kebanyakan merupakan kandungan unsur
                                            hara makro
                                            primer.</em></p>
                                    <ul>
                                        <li>Pupuk Urea (Unsur hara N)</li>
                                        <li>Pupuk TSP (Unsur hara P)</li>
                                    </ul>
                                </div>
                                <div class="resume-item pb-0">
                                    <h4>Pupuk Majemuk</h4>
                                    <p><em>Mengandung beberapa macam unsur hara</em></p>
                                    <ul>
                                        <li>Pupup NPK, yang mengandung unsur hara nitrogen, phosphorus, dan potassium.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
        <!-- End Pupuk Section -->

        <!-- ======= Jenis Tanaman Section ======= -->
        <section id="jenisTanaman" class="jenisTanaman">
            <div class="container">

                <div class="section-title">
                    <h2>Jenis Tanaman </h2>
                    <p style="text-align: justify; font-size: 18px;"> Setiap tanaman memiliki kebutuhan nutrisi yang
                        berbeda, dan
                        pemahaman tentang jenis tanaman yang Anda
                        miliki akan membantu Anda memilih pupuk yang sesuai. Berikut adalah beberapa contoh tanaman yang
                        biasanya
                        dipupuk </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class="bi bi-flower3"></i></div>
                        <h4 class="title"><a href="galeriTanamanp#gambarTanaman">Tanaman Pangan</a></h4>
                        <p class="description" style="text-align: justify; font-size: 18px;">Tanaman pangan seperti
                            gandum, jagung,
                            kentang, dan lainnya memerlukan pupuk untuk
                            mendukung pertumbuhan dan produksi hasil panen.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-suit-spade-fill"></i></div>
                        <h4 class="title"><a href="galeriTanaman#gambarTanaman">Tanaman Sayur</a></h4>
                        <p class="description" style="text-align: justify; font-size: 18px;">Cabai, tomat, mentimun,
                            bayam,
                            kangkung, wortel, brokoli, dan banyak tanaman sayuran
                            lainnya memerlukan pupuk untuk mendukung pertumbuhan dan produksi buah atau daun yang sehat
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-apple"></i></div>
                        <h4 class="title"><a href="galeriTanaman#gambarTanaman">Tanaman Buah-buahan</a></h4>
                        <p class="description" style="text-align: justify; font-size: 18px;">Jeruk, apel, anggur,
                            stroberi,
                            blueberry, mangga, dan banyak lagi. Pupuk khusus
                            buah-buahan sering digunakan untuk merangsang pertumbuhan dan perkembangan buah.</p>
                    </div>
                </div>
        </section><!-- End jenis tanaman Section -->

        <!-- ======= calculator Section ======= -->
        <section id="contact" class="calculator">
            <div class="container">
                <div class="row">
                    <!-- Penjelasan di sebelah kiri -->
                    <div class="col-md-6">
                        <div class="section-title">
                            <h2>Calculator</h2>
                            <p style="text-align: justify; font-size: 18px;">Kalkulator Pupuk adalah penghitung
                                kebutuhan pupuk untuk
                                tanaman anda. Untuk mencapai hasil panen yang
                                maksimal, pengguna perlu memahami berbagai aspek yang memengaruhi pertumbuhan tanaman,
                                termasuk
                                penggunaan pupuk. Salah satu alat yang sangat berguna dalam mengelola pupuk adalah
                                kalkulator pupuk.
                                Mari kita eksplorasi bagaimana alat ini dapat membantu meningkatkan produktivitas
                                pertanian.</p>
                        </div>
                        <a href="kalkulator" class="btn hijauuu btn-lg">Mari kita eksplorasi</a>
                    </div>
                    <!-- Gambar di sebelah kanan -->
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/Icon/kalkulator.png') }}" alt="Gambar Pupuk"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </section><!-- End calculator Section -->

        <!-- ======= ChatRoom Section ======= -->
        <section id="contact" class="ChatRoom">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/Icon/Chat_Room.png') }}" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <div class="section-title">
                            <h2>Chat Room</h2>
                            <p style="text-align: justify; font-size: 18px;">Chat Room AgroVest adalah Fitur interaktif
                                yang
                                memungkinkan pengguna untuk berkomunikasi dalam waktu
                                nyata, berbagi pengetahuan, dan berdiskusi tentang topik-topik terkait pertanian dan
                                pertumbuhan tanaman
                                di dalam platform AgroVest, sehingga memungkinkan pertukaran informasi dan pengetahuan
                                yang bermanfaat.
                            </p>
                        </div>
                        <a href="chat" class="btn hijauuu btn-lg">Mari Mulai Diskusi</a>
                    </div>
                </div>
            </div>
        </section><!-- End ChatRoom Section -->

        <!-- ======= CTA Section ======= -->
        <section class="section cta-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
                        <h2 class="mb-4">Mulai Pengalaman Baru dengan AgroVest Mobile</h2>
                        <p><a href="#" class="btn d-inline-flex align-items-center"><i
                                    class="bx bxl-apple"></i><span>App
                                    store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i
                                    class="bx bxl-play-store"></i><span>Google play</span></a></p>
                    </div>
                    <div class="col-md-5 text-center">
                        <img src="{{ asset('assets/img/Home/Mockup-AgroMob1.png') }}" alt="publish-img"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </section><!-- End CTA Section -->
        <br><br>

        <!-- Carousel Berita -->
        <div id="agroNews" class="container">
            <h2 class="text-center"
                style="font-size: 32px; font-weight: bold; margin-bottom: 6px; padding-bottom: 8px; position: relative; color: #173b6c;">
                Agration
                <hr style="border: 2px Solid #81b228; width: 10%; margin:  10px auto;">
            </h2>
            <div class="text-center mb-4">
                <p>-- Fakta menarik Dunia Pertanian Melalui Agration -- <br>
                    Sumber Utama Informasi Terkini dan Terpercaya untuk Meningkatkan Hasil Tanaman Anda.</p>
            </div>
            <div class="container-md">
                <div class="container">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="img-text" style="background: url(assets/img/Icon/bgtst.png);">
                                            <h3>Inovasi Pupuk</h3>
                                            <p>"Menggemburkan Lahan dan Meningkatkan Hasil Pertanian"</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img-text" style="background: url(assets/img/Icon/bgtst1.png);">
                                            <h3>Inovasi Pupuk</h3>
                                            <p>"Menggemburkan Lahan dan Meningkatkan Hasil Pertanian"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="img-text" style="background: url(assets/img/Icon/bgtst2.png);">
                                            <h3>Inovasi Pupuk</h3>
                                            <p>"Menggemburkan Lahan dan Meningkatkan Hasil Pertanian"</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img-text" style="background: url(assets/img/Icon/bgtst3.png);">
                                            <h3>Inovasi Pupuk</h3>
                                            <p>"Menggemburkan Lahan dan Meningkatkan Hasil Pertanian"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---->

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
                <a class="btn btn-link text-decoration-none text-light" href="">Petani Pintar</a>
                <a class="btn btn-link text-decoration-none text-light" href="">Kalkulator Pupuk</a>
                <a class="btn btn-link text-decoration-none text-light" href="">Chat Room</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-dark mb-4"><b>Special Links</b></h4>
                <a class="btn btn-link text-decoration-none text-light" href="">About Us</a>
                <a class="btn btn-link text-decoration-none text-light" href="">Contact Us</a>
                <a class="btn btn-link text-decoration-none text-light" href="">My Team</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-dark mb-4"><b>Thanks To</b></h4>
                <p>Sekolah Vokasi Institut Pertanian Bogor</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

</main><!-- End #main -->

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
