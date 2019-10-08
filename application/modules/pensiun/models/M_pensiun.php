<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pensiun extends CI_Model{
  function pensiun()
  {
    $query = $this->db->query("SELECT * FROM tb_pensiun
    LEFT JOIN tb_pegawai ON tb_pensiun.id_pegawai = tb_pegawai.id_pegawai");

    return $query->result();
  }
  function usulan_pensiun()
  {
    $query = $this->db->query("SELECT
    id_pegawai,
    nama,
    nip,
    path_foto,
    tgl_lahir,
    tgl_pensiun,
    umur
    FROM data_usulan_pensiun
    WHERE selisih <= 180 ");

    return $query->result();
  }
  function detail($id_pegawai)
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai
    WHERE id_pegawai = $id_pegawai ");

    return $query->row_array();
  }
  function create_pensiun($data)
  {
    $this->db->insert('tb_pensiun',$data);
  }
}
