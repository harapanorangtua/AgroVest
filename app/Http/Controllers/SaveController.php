<?php

// app/Http/Controllers/SaveController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SaveController extends Controller
{
    public function store(Request $request)
    {
        // Mendapatkan data dari formulir
        $id = $request->input('id');
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $usia = $request->input('usia');
        $username = $request->input('username');
        $password = md5($request->input('password'));

        // Konfigurasi opsi cURL
        $options = [
            CURLOPT_URL => 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/insertPengguna',
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query([
                'id' => $id,
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'usia' => $usia,
                'username' => $username,
                'password' => $password,
            ]),
        ];

        // Inisialisasi cURL
        $cUrl = curl_init();

        // Set opsi cURL
        curl_setopt_array($cUrl, $options);

        // Eksekusi cURL
        $response = curl_exec($cUrl);

        // Tutup koneksi cURL
        curl_close($cUrl);

        // Redirect ke halaman login
        return redirect()->route('login');
    }
}
