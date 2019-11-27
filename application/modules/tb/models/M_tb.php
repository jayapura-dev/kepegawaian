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
  function pejabat_tb()
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai
    LEFT JOIN tb_jenjang ON tb_pegawai.id_jenjang = tb_jenjang.id_jenjang
    WHERE status_tgs_belajar = 'ya'
    ORDER BY id_pegawai ");

    return $query->result();
  }
  function update_tugas_pejabat($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function usulan_ptb()
  {
    $query = $this->db->query("SELECT
    id_pegawai as id_pegawai,
    nama as nama,
    nip as nip,
    tgl_akhir as tgl_akhir,
    path_foto as path_foto
    FROM data_tgsbelajar_notif
    WHERE selisih <= 30 ");

    return $query->result();
  }
  function update_tgs_pejabat($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function create_tugas($data)
  {
    $this->db->insert('tb_tgs_bljr',$data);
  }
  function update_data_pegawai($where_pegawai,$data_pegawai,$table)
  {
    $this->db->where($where_pegawai);
    $this->db->update($table,$data_pegawai);
  }
  function update_tgs($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_file_dasar_tgs($where,$data,$table)
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
