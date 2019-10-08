<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model{
  //Start Notif Usulan KP
  function hitung_kp()
  {
    $query = $this->db->query("SELECT
      COUNT(id_pegawai) as jumlah_pejabat
      FROM view_selisih_pangkat
      WHERE selisih <= 60 ");

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
    path_foto
    FROM data_kp_notif
    WHERE selisih <= 60 ");

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
}
