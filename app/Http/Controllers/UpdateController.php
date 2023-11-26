<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UpdateController extends Controller
{
    public function update(Request $request)
    {
        $id = $request->input('id');
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $usia = $request->input('usia');
        $username = $request->input('username');
        $password = md5($request->input('password'));

        if (empty($id)) {
            // Insert
            $url = "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/insertPengguna";
            $customrequest = 'POST';
        } else {
            // Update
            $url = "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/updatePenggunaById?id=" . $id;
            $customrequest = 'PUT';

            Session::put('nama', $nama);
            Session::put('jenis_kelamin', $jenis_kelamin);
            Session::put('usia', $usia);
            Session::put('username', $username);
            Session::put('password', $password);
        }

        $ch = curl_init();

        $options = [
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => $customrequest,
            CURLOPT_POSTFIELDS => http_build_query([
                'id' => $id,
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'usia' => $usia,
                'username' => $username,
                'password' => $password,
            ]),
        ];

        curl_setopt_array($ch, $options);

        curl_exec($ch);

        curl_close($ch);

        return redirect()->route('profile');
    }
}
