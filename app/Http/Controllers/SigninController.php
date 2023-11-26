<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SigninController extends Controller
{
    public function signIn(Request $request)
    {
        function makeRequest($url)
        {
            $cUrl = curl_init();

            $options = array(
                CURLOPT_URL => $url,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_RETURNTRANSFER => true,
            );

            curl_setopt_array($cUrl, $options);

            $response = curl_exec($cUrl);

            $data = json_decode($response);

            curl_close($cUrl);

            return $data;
        }

        // Mendefinisikan URL endpoint MongoDB
        $mongoDBEndpoint = 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/getPenggunaByUsernamePassword';

        // Membuat URL untuk request
        $requestUrl = $mongoDBEndpoint . '?username=' . $request->input('username') . '&password=' . md5($request->input('password'));

        // Melakukan request menggunakan fungsi makeRequest
        $data = makeRequest($requestUrl);

        if (is_array($data) && !empty($data)) {
            // Jika pengguna terdaftar
            foreach ($data as $row):
                Session::put('id', $row->_id);
                Session::put('nama', $row->nama);
                Session::put('usia', $row->usia);
                Session::put('jenis_kelamin', $row->jenis_kelamin);
                Session::put('username', $row->username);
                Session::put('password', $row->password);
            endforeach;
        } else {
            return redirect('/login');
        }
        return redirect()->route('index');
    }
}
