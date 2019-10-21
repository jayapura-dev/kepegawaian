<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datamaster extends CI_Model{
  function pangkat()
  {
    $query = $this->db->query("SELECT * FROM tb_pangkat ORDER BY id_pangkat DESC");
    return $query->result();
  }
  function jabatan()
  {
    $query = $this->db->query("SELECT * FROM tb_jabatan
    LEFT JOIN tb_kp ON tb_jabatan.id_kp = tb_kp.id_kp");
    return $query->result();
  }
}
