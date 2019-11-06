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
    $data['title'] = 'Pengguna';
    $data['users'] = $this->M_users->user();
    $data['level'] = $this->db->query("SELECT * FROM tb_user_level")->result();

    $this->template->load('MasterLayout','r-users',$data);
  }
  public function tambah_user()
  {
    $data['title'] = 'Tambah Pengguna';
    $data['pejabat'] = $this->M_users->pejabat();
    $data['level'] = $this->db->query("SELECT * FROM tb_user_level")->result();
    $this->template->load('MasterLayout','c-users',$data);
  }
  public function tambah_users_proses()
  {
    $data['nama'] = $this->input->post('nama');
		$data['sandi'] = md5($this->input->post('sandi'));
		$data['sandi_deskripsi'] = $this->input->post('sandi');
		$data['email'] = $this->input->post('email');
		$data['status'] = $this->input->post('status');
		$data['level'] = $this->input->post('level');
		$data['nip'] = $this->input->post('nip');
    $data['nama_lengkap'] = $this->input->post('nama_lengkap');
    $data['kontak'] = $this->input->post('kontak');
		$this->M_users->create_users($data);
		$this->session->set_flashdata("simpan","
						<div class='alert alert-success fade in'>
								<a href='#' class='close' data-dismiss='alert'>&times;</a>
								<strong>Success !</strong> Berhasil Manambah Pengguna !
						</div>");
		redirect('users');
  }
  public function edit_users($id_user)
  {
    $data['title'] = 'Edit Pengguna';
    $data['detail'] = $this->db->get_where('tb_user',['id_user' => $id_user])->row_array();
    $data['pejabat'] = $this->M_users->pejabat();
    $data['level'] = $this->db->query("SELECT * FROM tb_user_level")->result();
    $this->template->load('MasterLayout','u-users',$data);
  }
  function edit_user_proses()
  {
    $id_user = $this->input->post('id_user');
    $nama = $this->input->post('nama');
    $sandi = md5($this->input->post('sandi'));
    $sandi_deskripsi = $this->input->post('sandi');
    $email = $this->input->post('email');
    $status = $this->input->post('status');
    $level = $this->input->post('level');
    $nip = $this->input->post('nip');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $kontak = $this->input->post('kontak');

    $data = array(
      'id_user'         => $id_user,
      'nama'            => $nama,
      'sandi'           => $sandi,
      'sandi_deskripsi' => $sandi_deskripsi,
      'email'           => $email,
      'status'          => $status,
      'level'           => $level,
      'nip'             => $nip,
      'nama_lengkap'    => $nama_lengkap,
      'kontak'          => $kontak
    );

    $where = array(
      'id_user'         => $id_user
    );

    $this->M_users->edit_users($where,$data,'tb_user');
    $this->session->set_flashdata("update","
						<div class='alert alert-success fade in'>
								<a href='#' class='close' data-dismiss='alert'>&times;</a>
								<strong>Success !</strong> Berhasil Mengedit Data !
						</div>");
    redirect('users');
  }
  public function delete_users($id_user)
  {
    $data['title'] = 'Hapus Pengguna';
    $data['detail'] = $this->db->get_where('tb_user',['id_user' => $id_user])->row_array();

    $this->template->load('MasterLayout','d-users',$data);
  }
  function delete_users_proses($id_user = 0)
  {
    $id_user = $this->input->post('id_user');
    $this->M_users->delete_users($id_user);
    $this->session->set_flashdata("hapus","
        <div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menghapus Data!
        </div>"
    );
    redirect('users');
  }
}
