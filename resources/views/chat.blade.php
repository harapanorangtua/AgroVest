@if (!empty(Session::get('username')))
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ config('app.name', ' | Chatroom') }}</title>
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
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"
            integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <link href="{{ asset('assets/css/stylechat.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('path/to/font-awesome/css/font-awesome.min.css') }}">

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
                                <a href="{{ url('signout') }}" class="btn btn-danger btn-sm mt-2"
                                    style="width: 100px;">
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
                                <a href="{{ url('signout') }}" class="btn btn-danger btn-sm mt-2"
                                    style="width: 100px;">
                                    <i class="bi bi-box-arrow-left"></i> Logout
                                </a>
                            </div>
                        </div>
                    @else
                        <a href="login" class="btn btn mt-2 hijauuu mx-auto fw-bold"
                            style="display: block; width: 100%;">Login</a>
                    @endif
                </div>

                <nav id="navbar" class="nav-menu navbar">
                    <ul>
                        <li><a href="index" class="nav-link scrollto"><i class="bx bx-home"></i>
                                <span>Beranda</span></a>
                        </li>
                        <li><a href="chat" class="nav-link scrollto active"><i class="bx bx-chat"></i><span>Chat
                                    Room</span></a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-split"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="bx bi-image"></i>Galeri</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a href="galeriPupuk" class="nav-link scrollto"><i class="bx bi-bucket"></i>
                                        <span>Galeri Pupuk</span></a>
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
                                <li><a href="kalkulator" class="nav-link scrollto"><i
                                            class="bx bx-calculator"></i><span>Kalkulator Pupuk</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div style="float: bottom; text-align: center; margin-top: 11rem;">
                <img src="{{ asset('assets/img/Icon/AgroVest2.png') }}" alt="logo"
                    style="height: 57px; width: 198px;">
            </div>
        </header>
        <!-- End Header -->

        <main id="main">
            <div class="container py-5">
                <div class="card" style="height: 90vh;">
                    <div class="card-header d-flex justify-content-between align-items-center p-3"
                        style="border-top: 4px solid #81b228;">
                        <h5 class="mb-0">Chat Room</h5>
                        <div class="d-flex flex-row align-items-center">
                            <i class="bi bi-circle-fill" style="color: #81b228;"></i>
                        </div>
                    </div>

                    <div id="list-chats" class="card-body overflow-auto" data-mdb-perfect-scrollbar="true">

                    </div>


                    <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                        <form id="form-send" class="input-group mb-0">
                            <input id="chat" type="text" name="usertext" class="form-control"
                                placeholder="Ketik Pesan" required />
                            <button class="tbl text-white" style="background-color:#81b228;" type="submit"
                                id="buttonInput" style="padding-top: .55rem;">
                                <i class="bi bi-send"> Kirim</i>
                            </button>
                        </form>
                    </div>
                    <script></script>
                </div>
            </div>
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
                        <a href="#"><i class="bi bi-whatsapp"
                                style="color: #040b14; padding-right: 20px;"></i></a>
                        <a href="#"><i class="bi bi-telegram"
                                style="color: #040b14; padding-right: 20px;"></i></a>
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
                    <a class="btn btn-link text-decoration-none text-light" href="">Terms &
                        Condition</a>
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
    {{-- chat js --}}
    <script src="{{ asset('assets/js/chat.js') }}"></script>
    {{--  --}}
    <script>
        var usernameSession = '{{ session('username') }}';
    </script>

    </html>
@else
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ config('app.name', 'Agrovest | Chatroom') }}</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/Icon/AgroVest.png" rel="icon">

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            body {
                position: relative;
                background-image: url('assets/img/Home/pupuk01.png');
                background-size: 444vh 222vh;
                background-position: center;
                background-repeat: no-repeat;
                color: #ffffff;
                margin: 0;
                height: 100vh;
                overflow: hidden;
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background-color: rgba(0, 0, 0, 0.5);
            }
        </style>
    </head>

    <body class="overlay">
        <div class="overlay"></div>
        <div class="container mt-5 text-center">
            <div class="alert alert-warning alert-dismissible fade show" role="alert"
                style="background-color: #81b228;">
                <h5 style="color: aliceblue"><strong>Perhatian!</strong> Jika Anda ingin mengakses fitur chat, Anda
                    harus login terlebih dahulu!</h5>
                <hr style="color: azure; text-align: center;">
                <h5 class="fw-bold text-center" style="color: azure">Apakah Anda ingin login?</h5><br>
                <div style="text-align: center;">
                    <i class="fa-solid fa-leaf fa-spin" style="color: #ffffff;"></i>
                    <i class="fa-solid fa-leaf fa-spin fa-2xl" style="color: #ffffff;"></i>
                    <i class="fa-solid fa-leaf fa-spin" style="color: #ffffff;"></i>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ url('login') }}" class="btn btn-primary">YA</a>
                    <a href="{{ url('index') }}" class="btn btn-secondary">TIDAK</a>
                </div>
            </div>
        </div>
    </body>
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

    </html>
@endif
