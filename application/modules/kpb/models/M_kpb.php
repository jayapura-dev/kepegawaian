<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kpb extends CI_Model{
  function kpb()
  {
    $query = $this->db->query("SELECT * FROM tb_kpb
    LEFT JOIN tb_pegawai ON tb_kpb.id_pegawai = tb_pegawai.id_pegawai
    LEFT JOIN tb_pangkat ON tb_kpb.id_pangkat = tb_pangkat.id_pangkat");
    return $query->result();
  }
  function create_kpb($data)
  {
    $this->db->insert('tb_kpb',$data);
  }

  // update TMT pangkat pada tb_pegawai
  function update_tmt_pkt($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function detail($id_pegawai)
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai
    LEFT JOIN tb_pangkat ON tb_pegawai.id_pangkat = tb_pangkat.id_pangkat
    WHERE id_pegawai = '$id_pegawai' ");

    return $query->row_array();
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
