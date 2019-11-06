<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model{
  function user()
  {
    $query = $this->db->query("SELECT * FROM tb_user
    LEFT JOIN tb_user_level ON tb_user.level = tb_user_level.id_level
    ");

    return $query->result();
  }
  function pejabat()
  {
    $query = $this->db->query("SELECT * FROM tb_pegawai");

    return $query->result();
  }
  function create_users($data)
  {
    $this->db->insert('tb_user',$data);
  }
  function edit_users($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function delete_users($id_user = 0)
  {
    $this->db->delete('tb_user', array('id_user' => $id_user));
  }
}
