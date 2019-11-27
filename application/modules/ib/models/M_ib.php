<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ib extends CI_Model{
  function tb()
  {
    $query = $this->db->query("SELECT * FROM tb_ijin_bljr
    LEFT JOIN tb_pegawai ON tb_ijin_bljr.id_pegawai = tb_pegawai.id_pegawai
    LEFT JOIN tb_jenjang ON tb_ijin_bljr.id_jenjang = tb_jenjang.id_jenjang");
    return $query->result();
  }
  function pejabat_ijin()
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai
    LEFT JOIN tb_jenjang ON tb_pegawai.id_jenjang = tb_jenjang.id_jenjang
    WHERE status_ijin_belajar = 'ya'
    ORDER BY id_pegawai ");

    return $query->result();
  }
  function usulan_pib()
  {
    $query = $this->db->query("SELECT
    id_pegawai as id_pegawai,
    nama as nama,
    nip as nip,
    tgl_akhir as tgl_akhir,
    path_foto as path_foto
    FROM data_ijinbelajar_notif
    WHERE selisih <= 30 ");

    return $query->result();
  }
  function update_ijin_pejabat($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_file_ijin($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function create_ijin($data)
  {
    $this->db->insert('tb_ijin_bljr',$data);
  }
  function update_ijin($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_data_pegawai($where_pegawai,$data_pegawai,$table)
  {
    $this->db->where($where_pegawai);
    $this->db->update($table,$data_pegawai);
  }
  
  function detail_ijin($id_ijin)
  {
    $query = $this->db->query("SELECT * FROM tb_ijin_bljr
    LEFT JOIN tb_pegawai ON tb_ijin_bljr.id_pegawai = tb_pegawai.id_pegawai
    WHERE tb_ijin_bljr.id_ijin = '$id_ijin' ");
    return $query->row_array();
  }
  function delete_ijin($id_ijin = 0)
  {
    $this->db->delete('tb_ijin_bljr', array('id_ijin' => $id_ijin));
  }
}
