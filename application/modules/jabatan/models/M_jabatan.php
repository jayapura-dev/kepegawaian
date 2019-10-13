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

  function detail_jabatan($id_jp)
  {
    $query = $this->db->query("SELECT * FROM tb_jp
    LEFT JOIN tb_pegawai ON tb_jp.id_pegawai = tb_pegawai.id_pegawai
    LEFT JOIN tb_jabatan ON tb_jp.id_jabatan = tb_jabatan.id_jabatan
    LEFT JOIN tb_kp ON tb_jp.id_kp = tb_kp.id_kp
    WHERE tb_jp.id_jp = '$id_jp' ");
    return $query->row_array();
  }

  function create_jbt($data)
  {
    $this->db->insert('tb_jp',$data);
  }
  // Update TMT jabatan dan Jabatan pada Tb Pegawai
  function update_tmt_jbt($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_jbt($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  // Update TMT jabatan dan Jabatan pada tb_pegawai
  function update_jbt_pegawai($where_pegawai,$data_pegawai,$table)
  {
    $this->db->where($where_pegawai);
    $this->db->update($table,$data_pegawai);
  }

  // Update File Jabatan
  function update_file_jabatan($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function delete_jabatan($id_jp = 0)
  {
    $this->db->delete('tb_jp', array('id_jp' => $id_jp));
  }
}
