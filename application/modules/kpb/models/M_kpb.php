<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kpb extends CI_Model{
  function kpb()
  {
    $query = $this->db->query("SELECT * FROM tb_kpb");

    return $query->result();
  }
  function create_kpb()
  {
    $this->db->insert('tb_kpb',$data);
  }
  function data_naik_pangkat()
  {
    $query = $this->db->query("SELECT
    id_pegawai,
    nama,
    nip
    FROM view_selisih_pangkat
    WHERE selisih <= 60 ");

    return $query->result();
  }
}
