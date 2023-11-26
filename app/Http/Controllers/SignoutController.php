<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignoutController extends Controller
{
    public function signout(Request $request)
    {
        Auth::logout(); // Logout pengguna saat ini

        $request->session()->invalidate(); // Menghapus sesi

        return redirect('/login'); // Mengarahkan kembali ke halaman login atau halaman lain yang Anda inginkan
    }
}
