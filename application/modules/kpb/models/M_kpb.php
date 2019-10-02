<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kpb extends CI_Model{
  function kpb()
  {
    $query = $this->db->query("SELECT * FROM tb_kpb");

    return $query->result();
  }
  function create_kpb()
  {
    $this->db->insert('tb_kpb',$data);
  }
}
