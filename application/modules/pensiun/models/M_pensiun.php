<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pensiun extends CI_Model{
  function pensiun()
  {
    $query = $this->db->query("SELECT * FROM tb_pensiun
    LEFT JOIN tb_pangkat ON tb_pensiun.id_pangkat = tb_pangkat.id_pangkat
    LEFT JOIN tb_jabatan ON tb_pensiun.id_jabatan = tb_jabatan.id_jabatan
    LEFT JOIN tb_kp ON tb_pensiun.id_kp = tb_kp.id_kp
    LEFT JOIN tb_unit ON tb_pensiun.id_unit = tb_unit.id_unit");

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
    LEFT JOIN tb_pangkat ON tb_pegawai.id_pangkat = tb_pangkat.id_pangkat
    LEFT JOIN tb_jabatan ON tb_pegawai.id_jabatan = tb_jabatan.id_jabatan
    LEFT JOIN tb_kp ON tb_pegawai.id_kp = tb_kp.id_kp
    LEFT JOIN tb_unit ON tb_pegawai.id_unit = tb_unit.id_unit
    WHERE id_pegawai = $id_pegawai ");

    return $query->row_array();
  }
  function create_pensiun($data)
  {
    $this->db->insert('tb_pensiun',$data);
  }

  // Mengapus Pegawai yang telah di input kedalam table Pensiun
  function delete_pegawai($where = 0)
  {
    $this->db->delete('tb_pegawai', array('id_pegawai' => $where));
  }

  function update_pensiun($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_file_pensiun($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
