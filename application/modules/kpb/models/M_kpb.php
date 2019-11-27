<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kpb extends CI_Model{
  function kpb()
  {
    $query = $this->db->query("SELECT * FROM tb_kpb
    LEFT JOIN tb_pegawai ON tb_kpb.id_pegawai = tb_pegawai.id_pegawai
    LEFT JOIN tb_pangkat ON tb_kpb.id_pangkat = tb_pangkat.id_pangkat");
    return $query->result();
  }
  function update_notif($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function create_kpb($data)
  {
    $this->db->insert('tb_kpb',$data);
  }
  function update_kpb($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_file_kpb($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  // update TMT pangkat pada tb_pegawai
  function update_tmt_pkt($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function detail_kpb()
  {
    $query = $this->db->query("SELECT * FROM tb_kpb
    LEFT JOIN tb_pegawai ON tb_kpb.id_pegawai = tb_pegawai.id_pegawai
    LEFT JOIN tb_pangkat ON tb_kpb.id_pangkat = tb_pangkat.id_pangkat");

    return $query->row_array();
  }

  function detail($id_pegawai)
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai
    LEFT JOIN tb_pangkat ON tb_pegawai.id_pangkat = tb_pangkat.id_pangkat
    WHERE id_pegawai = '$id_pegawai' ");
    return $query->row_array();
  }
  function delete_kpb($id_kpb = 0)
  {
    $this->db->delete('tb_kpb', array('id_kpb' => $id_kpb));
  }
  function data_naik_pangkat()
  {
    $query = $this->db->query("SELECT
    id_pegawai,
    nama,
    nip,
    notifikasi,
    selisih,
    tgl_kp,
    ket
    FROM data_kp_notif
    WHERE selisih <= 60 AND notifikasi = 'aktif'
    ORDER BY selisih");

    return $query->result();
  }
  function cari($dari_tgl = 0,$smp_tgl = 0)
  {
    $query = $this->db->query("SELECT * FROM tb_kpb
    LEFT JOIN tb_pegawai ON tb_kpb.id_pegawai = tb_pegawai.id_pegawai
    LEFT JOIN tb_pangkat ON tb_kpb.id_pangkat = tb_pangkat.id_pangkat
    WHERE tb_kpb.tmt_kpb between '$dari_tgl' AND '$smp_tgl' ");

    return $query->result();
  }
}
