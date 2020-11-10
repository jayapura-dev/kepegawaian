<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurnal extends CI_Model{
    function get_api_jurnal_pendidik()
    {
        $uri = "http://localhost/e-jurnal/api/pendidik";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $uri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $readjson = curl_exec($ch);

        $data = json_decode($readjson,TRUE);
        $hasil = $data['result'];
        return $hasil;
    }
}
