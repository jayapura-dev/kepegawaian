<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tb extends CI_Model{
  function tb()
  {
    $query = $this->db->query("SELECT * FROM tb_tgs_bljr
    LEFT JOIN tb_pegawai ON tb_tgs_bljr.id_pegawai = tb_pegawai.id_pegawai
    LEFT JOIN tb_jenjang ON tb_tgs_bljr.id_jenjang = tb_jenjang.id_jenjang");

    return $query->result();
  }
  function create_tugas($data)
  {
    $this->db->insert('tb_tgs_bljr',$data);
  }
  function update_tgs($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_file_tgs($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function detail_tgs($id_tgs)
  {
    $query = $this->db->query("SELECT * FROM tb_tgs_bljr
    LEFT JOIN tb_pegawai ON tb_tgs_bljr.id_pegawai = tb_pegawai.id_pegawai
    WHERE tb_tgs_bljr.id_tgs = '$id_tgs' ");
    return $query->row_array();
  }
  function delete_tgs($id_tgs = 0)
  {
    $this->db->delete('tb_tgs_bljr', array('id_tgs' => $id_tgs));
  }
}
