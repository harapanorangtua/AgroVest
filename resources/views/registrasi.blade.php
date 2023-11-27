<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('assets/img/Icon/AgroVest.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap-login.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/stylelogin.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/googleAuth.js') }}" defer type="module"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>{{ config('app.name', 'Agrovest | Registrasi') }}</title>
</head>

<style>
    body {
        font-family: "Poppins", sans-serif;
        background-image: url(assets/img/login/cover.jpg);
        background-size: cover;
    }
</style>

<body>
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Registration Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #099312">
                <div class="featured-image mb-3">
                    <?php $imagePath = 'assets/img/login/Login.png';
                    echo "<img src='$imagePath' class='img-fluid' style='width: 250px' />"; ?>
                </div>
                <p class="text-white fs-2" style=" font-family: 'Courier New', Courier, monospace; font-weight: 600;">
                    AgroVest</p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem; font-family: 'Courier New', Courier, monospace">Green Your Way to Growing
                    Success and Sustainable Growth</small>
            </div>

            <!-------------------------- Right Box (Registration Form) ---------------------------->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Registrasi</h2>
                        <p>Ciptakan perubahan mulai dari sekarang</p>
                    </div>
                    <form id="form_register" action="{{ route('save.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-2">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" id="nama"
                                name="nama" placeholder="Masukan Nama Lengkap" required />
                        </div>
                        <div class="row input-group mb-2">
                            <label>Jenis Kelamin :</label>
                            <div class="form-check form-check-inline col-6">
                                <input type="radio" class="form-check-input" id="gender_male" name="jenis_kelamin"
                                    value="Laki-laki" style="margin-left: 0;" />
                                <label class="form-check-label" for="gender_male"
                                    style="margin-left:10px">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline col-4">
                                <input type="radio" class="form-check-input" id="gender_female" name="jenis_kelamin"
                                    value="Perempuan" />
                                <label class="form-check-label" for="gender_female">Perempuan</label>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <input type="number" class="form-control form-control-lg bg-light fs-6" id="usia"
                                name="usia" placeholder="Masukan Usia" required />
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" id="username"
                                name="username" placeholder="Masukan Username" required />
                        </div>
                        <div class="input-group mb-2">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" id="password"
                                name="password" placeholder="Masukan Password" required />
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-success w-100 fs-6">Register</button>
                        </div>
                    </form>

                    <div class="row">
                        <small>Sudah memiliki akun? <a href="login">Log In</a></small>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
                    </script>
                    <script src="{{ asset('assets/js/singup.js') }}"></script>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
