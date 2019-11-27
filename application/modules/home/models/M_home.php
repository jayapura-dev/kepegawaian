<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model{
  //Start Notif Usulan KP
  function hitung_kp()
  {
    $query = $this->db->query("SELECT
      COUNT(id_pegawai) as jumlah_pejabat
      FROM data_kp_notif
      WHERE selisih <= 100 AND notifikasi = 'aktif' ");

    return $query->result();
  }
  function data_kp()
  {
    $query = $this->db->query("SELECT
    id_pegawai,
    nama,
    nip,
    tgl_kp,
    selisih,
    path_foto,
    notifikasi,
    ket
    FROM data_kp_notif
    WHERE selisih <= 100 AND notifikasi = 'aktif'
    ORDER BY tgl_kp ");
    return $query->result();
  }
  // End Notif Usulan KP

  // Start Usulan kgb
  function hitung_kgb()
  {
    $query = $this->db->query("SELECT
      COUNT(id_pegawai) as jumlah_pejabat
      FROM data_kgb_notif
      WHERE selisih <= 60 ");
    return $query->result();
  }
  function data_ukgb()
  {
    $query = $this->db->query("SELECT
    id_pegawai,
    nama,
    nip,
    tgl_ukgb,
    selisih,
    path_foto
    FROM data_kgb_notif
    WHERE selisih <= 60 ");
    return $query->result();
  }
  // End Usulan KGB

  // Start Usulan Pensiun
  function data_pensiun()
  {
      $query = $this->db->query("SELECT
      id_pegawai,
      nama,
      nip,
      path_foto,
      tgl_lahir,
      tgl_pensiun,
      umur,
      selisih
      FROM data_usulan_pensiun
      WHERE selisih <= 180 ");

      return $query->result();
  }
  function hitung_pensiun()
  {
    $query = $this->db->query("SELECT
      COUNT(id_pegawai) as jumlah_pejabat
      FROM data_usulan_pensiun
      WHERE selisih <= 180 ");
    return $query->result();
  }

  // Notif Ijin Belajar
  function data_usulan_ijin()
  {
    $query = $this->db->query("SELECT
    id_pegawai as id_pegawai,
    nama as nama,
    nip as nip,
    tgl_akhir as tgl_akhir,
    path_foto as path_foto,
    selisih as selisih
    FROM data_ijinbelajar_notif
    WHERE selisih <= 60 ");

    return $query->result();
  }
  function hitung_usulan_ib()
  {
    $query = $this->db->query("SELECT
      COUNT(id_pegawai) as jumlah_pejabat
      FROM data_ijinbelajar_notif
      WHERE selisih <= 60 ");
    return $query->result();
  }
  // End Notif Ijin Belajar

  // Notif Ijin Belajar
  function data_usulan_tb()
  {
    $query = $this->db->query("SELECT
    id_pegawai as id_pegawai,
    nama as nama,
    nip as nip,
    tgl_akhir as tgl_akhir,
    path_foto as path_foto,
    selisih as selisih
    FROM data_tgsbelajar_notif
    WHERE selisih <= 60 ");

    return $query->result();
  }
  function hitung_usulan_tb()
  {
    $query = $this->db->query("SELECT
      COUNT(id_pegawai) as jumlah_pejabat
      FROM data_tgsbelajar_notif
      WHERE selisih <= 60 ");
    return $query->result();
  }
  // End Notif Ijin Belajar

  function hitung_pejabat()
  {
    $query = $this->db->query("SELECT
    COUNT(DISTINCT id_pegawai) as jumlah_pejabat,
    COUNT(DISTINCT CASE WHEN id_kp = '1' THEN id_pegawai END) as jastruk,
    COUNT(DISTINCT CASE WHEN id_kp = '2' THEN id_pegawai END) as jafung_umum,
    COUNT(DISTINCT CASE WHEN id_kp = '3' THEN id_pegawai END) as jafung_tertentu
    FROM tb_pegawai
    WHERE id_pegawai");
    return $query->result();
  }
  function hitung_kp1()
  {
    $query = $this->db->query("SELECT
      tb_kp.jenis_kp as jenis_kp,
      tb_pegawai.id_kp as id_kp,
      COUNT(Distinct tb_pegawai.id_pegawai) as jp
      FROM tb_pegawai
      LEFT JOIN tb_kp ON tb_pegawai.id_kp = tb_kp.id_kp
      GROUP BY tb_kp.jenis_kp");

      return $query->result();
  }
  // View Dashboard
  function table_struktural()
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai WHERE id_kp = '1' ");

    return $query->result();
  }
  function table_jfu()
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai WHERE id_kp = '2' ");

    return $query->result();
  }
  function table_jft()
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai WHERE id_kp = '3' ");

    return $query->result();
  }
}
