<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kgb extends CI_Model{
  function kgb()
  {
    $query = $this->db->query("SELECT * FROM tb_kgb
    LEFT JOIN tb_pegawai ON tb_kgb.id_pegawai = tb_pegawai.id_pegawai");

    return $query->result();
  }
  function data_ukgb()
  {
    $query = $this->db->query("SELECT
    id_pegawai,
    nama,
    nip
    FROM data_kgb_notif
    WHERE selisih <= 60 ");
    return $query->result();
  }
  function create_kgb($data)
  {
    $this->db->insert('tb_kgb',$data);
  }
  function update_tmt_gapok($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
