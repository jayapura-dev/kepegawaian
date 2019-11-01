<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{
  function pegawai()
  {
    $query = $this->db->query("SELECT
    tb_pegawai.id_pegawai as id_pegawai,
    tb_pegawai.nip as nip,
    tb_pegawai.nama as nama,
    tb_pegawai.tgl_lahir as tgl_lahir,
    tb_pegawai.tmt_pkt as tmt_pkt,
    tb_pegawai.tmt_jbt as tmt_jbt,
    tb_pegawai.jekel as jekel,
    tb_pegawai.agama as agama,
    tb_pegawai.pend_terahir as pend_terahir,
    tb_pegawai.bidang as bidang,
    tb_pegawai.id_jabatan as id_jabatan,
    tb_pegawai.subjabatan as subjabatan,
    tb_pegawai.id_pangkat as id_pangkat,
    tb_pegawai.id_unit as id_unit,
    tb_pegawai.id_kp as id_kp,
    tb_pegawai.gapok_pegawai as gapok_pegawai,
    tb_pegawai.tmt_gapok as tmt_gapok,
    tb_pegawai.tmt_cpns as tmt_cpns,
    tb_pegawai.notifikasi as notifikasi,
    tb_pegawai.ket as ket,
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
  function update_file_cpns($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_file_jbt($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_file_pangkat($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_file_gaji($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function delete_pejabat($where = 0)
  {
    $hapus_kpb = $this->db->get_where('tb_kpb',['id_pegawai'  => $where]);
    if($hapus_kpb->num_rows() > 1){
      $this->db->delete('tb_kpb', array('id_pegawai' => $where));
    }

    $hapus_kgb = $this->db->get_where('tb_kgb',['id_pegawai' => $where]);
    if($hapus_kgb->num_rows() > 1){
      $this->db->delete('tb_kgb', array('id_pegawai' => $where));
    }

    $hapus_jbt = $this->db->get_where('tb_jp',['id_pegawai' => $where]);
    if($hapus_jbt->num_rows() > 1){
      $this->db->delete('tb_jp', array('id_pegawai' => $where));
    }

    $hapus_ijin = $this->db->get_where('tb_ijin_bljr',['id_pegawai' => $where]);
    if($hapus_ijin->num_rows() > 1){
      $this->db->delete('tb_ijin_bljr', array('id_pegawai' => $where));
    }

    $hapus_tgs = $this->db->get_where('tb_tgs_bljr',['id_pegawai' => $where]);
    if($hapus_tgs->num_rows() > 1){
      $this->db->delete('tb_tgs_bljr', array('id_pegawai' => $where));
    }

    $this->db->delete('tb_pegawai', array('id_pegawai' => $where));
  }
}
