<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model{

    function get_asn_fungsional(){
        $query = $this->db->query("SELECT * FROM tb_peg WHERE id_penempatan = 2 ");

        return $query->result();
    }

    function create_pegawai($data){
        $this->db->insert('tb_peg',$data);
    }

    function get_callback_create($where){
        $query = $this->db->get_where('tb_peg',['nama' => $where]);

        return $query->row_array();
    }
}