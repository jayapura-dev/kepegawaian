<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->helper('url');
    $this->load->model('M_users');
    Modules::run('auth/cek_login');
  }
  public function index()
  {
    $data['users'] = 'Pengguna';
    $data['users'] = $this->M_users->user();
    $data['level'] = $this->db->query("SELECT * FROM tb_user_level")->result();
    $this->template->load('MasterLayout','r-users',$data);
  }
  public function tambah_users_proses()
  {
    $data['nama'] = $this->input->post('nama');
		$data['sandi'] = md5($this->input->post('sandi'));
		$data['sandi_deskripsi'] = $this->input->post('sandi');
		$data['email'] = $this->input->post('email');
		$data['status'] = $this->input->post('status');
		$data['level'] = $this->input->post('level');
		$data['nik'] = $this->input->post('nik');
    $data['nama_lengkap'] = $this->input->post('nama_lengkap');
    $data['kontak'] = $this->input->post('kotak');
		$this->M_users->tambah_pengguna($data);
		$this->session->set_flashdata("simpan","
						<div class='alert alert-success fade in'>
								<a href='#' class='close' data-dismiss='alert'>&times;</a>
								<strong>Success !</strong> Berhasil Manambah Pengguna !
						</div>");
		redirect('Users');
  }
}
