@if (Session::has('username') && Session::get('username') == 'adminVest')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ config('app.name', 'Agrovest | Harapan Orang Tua') }}</title>
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

        <!-- Template File -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"
            integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <link href="{{ asset('assets/css/stylechatadmin.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('path/to/font-awesome/css/font-awesome.min.css') }}">


        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/styleadmin.css') }}" rel="stylesheet">
        <style>
            #hero {
                width: 100%;
                height: 100vh;
                background: url("assets/img/Home/Depan.jpg") top center;
                background-size: cover;
            }

            .card {
                border: none;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
                background-color: #fff;
                border-radius: 10px;
            }

            .card-body {
                padding: 20px;
            }

            #chat {
                border-radius: 2px;
            }

            .tbl {
                border-radius: 20px;
                border: #81b228;
            }

            .bg-berhasil {
                background-color: #81b228;
                color: white;
            }

            .mask-custom {
                border-radius: 1em;
                backdrop-filter: blur(15px);
            }

            .bi {
                vertical-align: text-bottom;
            }

            .list-group-item {
                cursor: pointer;
            }

            .custom-table-container {
                max-height: 580px;
                overflow-y: auto;
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
                
                    <a href=""><img src="assets/img/icon/Profil.png" alt=""></a>
                    <div class="text-end mt-3">
                        <h1 class="text-light text-center fw-bold">
                            {{ Session::get('nama') }}
                        </h1>
                        <div class="text-center">
                            <a href="{{ url('index') }}" class="btn hijauuu btn-sm mt-2" style="width: 100px;">
                                <i class="bi bi-flower1"></i> Agrovest
                            </a>
                            <a href="{{ url('signout') }}" class="btn btn-danger btn-sm mt-2" style="width: 100px;">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </div>
                    </div>

                    <div style="margin-bottom: 19rem;">
                        <nav id="navbar" class="nav-menu navbar">
                            <ul>
                                <li><a href="#dataUser" class="nav-link scrollto active"><i
                                            class="bi bi-clipboard-data"></i>
                                        <span>Data User</span></a>
                                </li>
                                <li><a href="#chatRoom" class="nav-link scrollto active"><i class="bx bx-chat"></i>
                                        <span>Room Chat</span></a></li>
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
            </div>
        </section><!-- End Hero -->

        <main id="main">
            <!-- ======= dataUser Section ======= -->
            <section id="dataUser" class="dataUser">
                <div class="container">
                    <div class="section-title">
                        <h2>Data User</h2>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="card" style="height: 99vh;">
                                <div class="card-header d-flex justify-content-between align-items-center p-3"
                                    style="border-top: 4px solid #81b228;">
                                    <h5 class="mb-0 fw-bold">Data User</h5>
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="container mt-3">
                                            <form class="form-inline my-2 my-lg-0">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Cari..."
                                                        id="searchInput">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button"
                                                            id="searchButton">Cari</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body custom-table-container">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="tableUser">
                                            <thead>
                                                <tr class="table">
                                                    <th class="col text-center">No</th>
                                                    <th class="col text-center">ID</th>
                                                    <th class="col text-center">Username</th>
                                                    <th class="col text-center">Nama Pengguna</th>
                                                    <th class="col text-center">Jenis Kelamin</th>
                                                    <th class="col text-center">Usia</th>
                                                    <th class="col text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer" style="height: 11vh;">
                                    <p class="fw-bold text-left">Total <span class="badge text-bg-success" id="totalData">0</span> data</p>
                                </div>
                            </div>
                        </div>

                        {{-- chart data user --}}
                        <div class="col-4">
                            <div class="card" style="height: 99vh;">
                                <div class="card-header d-flex justify-content-between align-items-center p-3"
                                    style="border-top: 4px solid #81b228;">
                                    <h5 class="mb-0 fw-bold">Chart</h5>
                                </div>
                                <div class="card-body">
                                    <span class="fw-bold" style="color: #81b228">Pengguna berdasarkan jenis
                                        kelamin</span>
                                    <canvas id="myChart"></canvas>
                                    <hr>
                                    <span class="fw-bold" style="color: #81b228">Usia pengguna AgroVest</span>
                                    <canvas id="myChart2"></canvas>
                                </div>
                                <div class="card-footer">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End dataUser Section -->

            <!-- ======= chat room Section ======= -->
            <section id="chatRoom" class="chatRoom">
                <div class="container py-5">
                    <div class="section-title">
                        <h2>Room Chat</h2>
                    </div>
                    <div class="card" style="height: 90vh;">
                        <div class="card-header d-flex justify-content-between align-items-center p-3"
                            style="border-top: 4px solid #81b228;">
                            <h5 class="mb-0">Chat Room</h5>
                            <div class="d-flex flex-row align-items-center" id="delt">
                                    <a href="" class="delete"><i class="bi bi-trash text-lg"></i></a>
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

            </section>
            <!-- End chat Section -->
    </body>


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
    <script src="{{ asset('assets/js/chatadmin.js') }}"></script>
    {{--  --}}
    <script>
        var usernameSession = '{{ session('username') }}';
    </script>

    {{-- data user js --}}
    <script src="{{ asset('assets/js/datauser.js') }}"></script>

    {{-- chart --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>

    </html>
@else
    {{-- {{ view('index') }} --}}
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
                <h5 style="color:black"><strong>Tahukah anda!?</strong></h5>
                <hr style="color: azure; text-align: center;">
                <h5 class="fw-bold text-center" style="color: azure">Padi bukanlah tanaman asli Indonesia.</h5>
                <h5 class="fw-bold text-center" style="color: azure">Padi baru dibudidayakan di Indonesia sekitar 1500 sebelum masehi.</h5>
                <div class="mt-5" style="text-align: center;">
                    <i class="fa-solid fa-leaf fa-spin" style="color: black;"></i>
                    <i class="fa-solid fa-leaf fa-spin fa-2xl" style="color: #ffffff;"></i>
                    <i class="fa-solid fa-leaf fa-spin" style="color: black;"></i>
                </div>
                <div class="text-center mt-5">
                    <a href="{{ url('index') }}" class="btn btn-light btn-lg"> Kembali ke Halaman Utama </a>
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
