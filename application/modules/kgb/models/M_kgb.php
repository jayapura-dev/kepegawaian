<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kgb extends CI_Model{
  function kgb()
  {
    $query = $this->db->query("SELECT * FROM tb_kgb
    LEFT JOIN tb_pegawai ON tb_kgb.id_pegawai = tb_pegawa.id_pegawai");

    return $query->result();
  }
  function usulan_kgb()
  {
    
  }
}
