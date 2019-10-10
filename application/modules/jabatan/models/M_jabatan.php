<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jabatan extends CI_Model{
  function jabatan()
  {
    $query = $this->db->query("SELECT * FROM tb_jp
    LEFT JOIN tb_jabatan ON tb_jp.id_jabatan = tb_jabatan.id_jabatan
    LEFT JOIN tb_pegawai ON tb_jp.id_pegawai = tb_pegawai.id_pegawai");

    return $query->result();
  }
  function detail($id_pegawai)
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai
    LEFT JOIN tb_jabatan ON tb_pegawai.id_jabatan = tb_jabatan.id_jabatan
    WHERE tb_pegawai.id_pegawai = '$id_pegawai' ");
    return $query->row_array();
  }
  function create_jbt($data)
  {
    $this->db->insert('tb_jp',$data);
  }
  // Update TMT jabatan pada Tb Pegawai
  function update_tmt_jbt($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
