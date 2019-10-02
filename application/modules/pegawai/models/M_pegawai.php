<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{
  function pegawai()
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai
    LEFT JOIN tb_pangkat ON tb_pegawai.id_pangkat = tb_pangkat.id_pangkat
    LEFT JOIN tb_jabatan ON tb_pegawai.id_jabatan = tb_jabatan.id_jabatan
    LEFT JOIN tb_kp ON tb_pegawai.id_kp = tb_kp.id_kp
    LEFT JOIN tb_unit ON tb_pegawai.id_unit = tb_unit.id_unit");
    return $query->result();
  }
  function create_pegawai($data)
  {
    $this->db->insert('tb_pegawai',$data);
  }
  function update_pegawai($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function detail_pegawai($id_pegawai)
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai
    LEFT JOIN tb_pangkat ON tb_pegawai.id_pangkat = tb_pangkat.id_pangkat
    LEFT JOIN tb_jabatan ON tb_pegawai.id_jabatan = tb_jabatan.id_jabatan
    WHERE id_pegawai = '$id_pegawai' ");

    return $query->result();
  }
}
