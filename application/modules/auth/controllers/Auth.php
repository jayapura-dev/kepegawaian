<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends MX_Controller{
  function  __construct()
  {
      parent::__construct();
      $this->load->model('M_auth');
      $this->load->library('form_validation');
      $this->load->helper('form');
  }

  public function index()
  {
      $data['title'] = 'Login | Read K-4';
      $this->load->view('login',$data);
  }

  function login_proses()
  {
		$nip = $this->input->post('nip');
		$sandi = md5($this->input->post('sandi'));
		if (isset($nip, $sandi)) {
			if($this->M_auth->cek($nip, $sandi) == TRUE){
				$admin = $this->M_auth->getAdmin($nip, $sandi);
				$data['nip'] = $nip;
				$data['sandi'] = $sandi;
				$data['id_admin'] = $admin->id_admin;
				$data['level'] = $admin->level;
				$data['nama'] = $admin->nama;
				$data['login'] = TRUE;
				$this->session->set_userdata($data);
        if ($this->session->userdata('level')=='1'){
				redirect('home');
			  }
  			elseif ($this->session->userdata('level')=='2'){
          //helper_log("login", "Login ke applikasi");
  		  redirect('home');
  			}
			}
			else {
				$this->session->set_flashdata(
          "wrong",
          "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Wrong!</strong> Nip Atau Sandi anda salah!!
            </div>"
        );
				redirect('auth');
			}
		}
		else {
			redirect('auth');
		}
	}

  function cek_login($user_level = ""){
		$status_login = $this->session->userdata('login');
		if (!isset($status_login) || $status_login != TRUE){
			redirect('auth');
		}
		else {
      $this->nama = $this->session->userdata('nama');
      $this->global ['nama'] = $this->nama;
			if ($user_level) {
				if (is_array($user_level)) { //cek apakah $user_level merupakan jenis array
					if (!in_array($this->session->userdata('level'), $user_level)) {//cek apakah user_level yg login masuk dalam array $user_level
						redirect('home');
					}
				}
				else {
					if ($this->session->userdata('level') != $user_level){
						redirect('auth/PageNotFound');
					}
				}
			}
		}
	}
  function PageNotFound()
  {
    $data['title'] = 'Halaman Tidak Ditemunkan';
    $this->load->view('404',$data);
  }
  function logout(){
		$this->session->sess_destroy();
    //helper_log("logout", "Logout dari Applikasi");
		redirect('auth', 'refresh');
	}
}
