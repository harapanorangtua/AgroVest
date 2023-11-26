<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroVest | User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/profile.css">
</head>

<body>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/img/Icon/Profil.png') }}" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;">
                            @if (!empty(Session::get('username')))
                                <div class="text-end mt-3">
                                    <h1 class="text-dark text-center fw-bold">
                                        {{ Session::get('nama') }}
                                    </h1>
                                </div>
                                <p class="text-muted mb-1"> {{ Session::get('jenis_kelamin') }} |
                                    {{ Session::get('usia') }} Tahun </p>
                                <div class="d-flex justify-content-center mb-2 mt-4">
                                    <button type="button" class="btn"
                                        style="background-color: #81b228; color: white;" data-bs-toggle="modal"
                                        data-bs-target="#editProfileModal"> Edit Profil </button>
                                    <a href="signout" type="button" class="btn btn-outline-danger ms-1">Logout</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama Lengkap</p>
                                </div>
                                <div class="col-sm-9">
                                    {{ session('nama') }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-9">
                                    {{ session('jenis_kelamin') }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Usia</p>
                                </div>
                                <div class="col-sm-9">
                                    {{ session('usia') }} Tahun
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Username</p>
                                </div>
                                <div class="col-sm-9">
                                    {{ session('username') }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Password</p>
                                </div>
                                <div class="col-sm-9">
                                    @php
                                        // Mengganti teks dengan karakter bulatan sesuai panjang string kata sandi
                                        $password = session('password');
                                        $maskedPassword = str_repeat('●', strlen($password));
                                    @endphp

                                    {{ $maskedPassword }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Di bagian akhir dari badan HTML Anda, tepat sebelum tag </body> -->
                <div class="modal fade " id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editProfileModalLabel">Edit Profil Pengguna</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="FormProfile" action="{{ url('update') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="editNama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="{{ session('nama') }}">
                                        <input type="hidden" id="id" name="id"
                                            value="{{ session('id') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="editJenisKelamin" class="form-label">Jenis Kelamin</label>
                                        <div>
                                            <input type="radio" id="jenisLaki" name="jenis_kelamin"
                                                value="Laki-laki"
                                                {{ session('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }}>
                                            <label for="jenisLaki">Laki-laki</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="jenisPerempuan" name="jenis_kelamin"
                                                value="Perempuan"
                                                {{ session('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}>
                                            <label for="jenisPerempuan">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="editUsia" class="form-label">Usia</label>
                                        <input type="number" class="form-control" id="usia" name="usia"
                                            value="{{ session('usia') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="editUsername" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            value="{{ session('username') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="editPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            value="{{ session('password') }}">
                                    </div>
                                    <button type="submit" class="btn"
                                        style="background-color: #81b228; color: white;">Simpan Perubahan</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
    </section>
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
                <a class="btn btn-link text-decoration-none text-light" href="index">Petani Pintar</a>
                <a class="btn btn-link text-decoration-none text-light" href="kalkulator">Kalkulator Pupuk</a>
                <a class="btn btn-link text-decoration-none text-light" href="chat">Chat Room</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-dark mb-4"><b>Special Links</b></h4>
                <a class="btn btn-link text-decoration-none text-light" href="index">About Us</a>
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

</html>
