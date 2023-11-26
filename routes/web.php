<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignoutController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/kalkulator', function () {
    return view('kalkulator');
});

Route::get('/galeriTanaman', function () {
    return view('galeriTanaman');
});

Route::get('/galeriPupuk', function () {
    return view('galeriPupuk');
});

Route::get('/chat', function () {
    return view('chat');
});

/* ------------------ */

Route::get('/dashboard', 'DashboardController@index')->middleware('checklogin');

Route::get('/index', 'IndexController@index')->middleware('checklogin');


/* ------------------ */

Route::get('/signin', [SigninController::class, 'signIn'])->name('signin');

Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/signout', [SignoutController::class, 'signout'])->name('signout');

Route::post('/save', [SaveController::class, 'store'])->name('save.store');

Route::post('/update', [UpdateController::class, 'update'])->name('update');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

/* ------------------ */
