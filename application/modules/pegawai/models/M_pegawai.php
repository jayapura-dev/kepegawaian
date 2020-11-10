<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{
    function asn_struktural()
    {
        $query = $this->db->query("SELECT * FROM v_asn_struktural");

        return $query->result();
    }

    function detail_pegawai($id)
    {
        $query = $this->db->query("SELECT
        id_pegawai,
        nama,
        status_pegawai,
        nip,
        tb_penempatan.badan as penempatan,
        tmp_lahir,
        tgl_lahir,
        jekel,
        etnis,
        agama,
        tb_jabatan.jabatan as jabatan,
        tb_pangkat.pangkat as pangkat,
        pend_terahir
        FROM tb_peg
        LEFT JOIN tb_penempatan ON tb_peg.id_penempatan = tb_penempatan.id_penempatan
        LEFT JOIN tb_jabatan ON tb_peg.id_jabatan = tb_jabatan.id_jabatan
        LEFT JOIN tb_pangkat ON tb_peg.id_pangkat = tb_pangkat.id_pangkat
        WHERE id_pegawai = '$id' ");

        return $query->row_array();
    }

    function asn_fungsional()
    {
        $query = $this->db->query("SELECT * FROM v_asn_fungsional");

        return $query->result();
    }

    function kontrak()
    {
        $query = $this->db->query("SELECT * FROM v_kontrak");
        return $query->result();
    }

    function get_api_sekolah()
    {
        $uri = "http://localhost/sekolah/api/sekolah";

        $ch = curl_init();
      	curl_setopt($ch, CURLOPT_URL, $uri);
    		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    		$readjson = curl_exec($ch);

    		$data = json_decode($readjson,TRUE);
    		$hasil = $data['result'];
    		return $hasil;
    }

    function get_api_mapel()
    {
        $uri = "http://localhost/sekolah/api/mapel";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $uri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $readjson = curl_exec($ch);
        $data = json_decode($readjson,TRUE);
        $hasil = $data['result'];
        return $hasil;
    }
}
