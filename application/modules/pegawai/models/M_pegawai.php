<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{
  function pegawai()
  {
    $query = $this->db->query("SELECT
    tb_pegawai.id_pegawai as id_pegawai,
    tb_pegawai.nip as nip,
    tb_pegawai.nama as nama,
    tb_pegawai.tmt_pkt as tmt_pkt,
    tb_pegawai.tmt_jbt as tmt_jbt,
    tb_pegawai.jekel as jekel,
    tb_pegawai.pend_terahir as pend_terahir,
    tb_pegawai.id_jabatan as id_jabatan,
    tb_pegawai.id_pangkat as id_pangkat,
    tb_pegawai.id_unit as id_unit,
    tb_pegawai.id_kp as id_kp,
    tb_pegawai.gapok_pegawai as gapok_pegawai,
    tb_pegawai.tmt_gapok as tmt_gapok,
    tb_pegawai.tmt_cpns as tmt_cpns,
    tb_kp.jenis_kp as jenis_kp,
    tb_unit.unit_kerja as unit_kerja,
    tb_pangkat.pangkat as pangkat,
    tb_pangkat.golongan as golongan,
    tb_jabatan.jabatan as jabatan,
    tb_pegawai.tmt_pkt + INTERVAL tb_kp.naik_pangkat DAY as selanjutnya,
    TIMESTAMPDIFF(YEAR, tb_pegawai.tmt_cpns, CURDATE()) as masa_kerja
    FROM tb_pegawai
    LEFT JOIN tb_kp ON tb_pegawai.id_kp = tb_kp.id_kp
    LEFT JOIN tb_unit ON tb_pegawai.id_unit = tb_unit.id_unit
    LEFT JOIN tb_pangkat ON tb_pegawai.id_pangkat = tb_pangkat.id_pangkat
    LEFT JOIN tb_jabatan ON tb_pegawai.id_jabatan = tb_jabatan.id_jabatan");
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
  function update_foto($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
