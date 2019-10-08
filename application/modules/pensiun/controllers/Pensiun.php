<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pensiun extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('upload','session','form_validation'));
    $this->load->database();
    $this->load->model('M_pensiun');
    Modules::run('auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Data Pensiun Pejabat';
    $data['pensiun'] = $this->M_pensiun->pensiun();

    $this->template->load('MasterLayout','r-pensiun',$data);
  }
  public function usulan_pensiun()
  {
    $data['title'] = 'Usulan Pensiun Pejabat';
    $data['up'] = $this->M_pensiun->usulan_pensiun();

    $this->template->load('MasterLayout','r-usulan-pensiun',$data);
  }
  public function create_pensiun($id_pegawai)
  {
    $data['title'] = 'Tambah Data Pensiun Pejabat';
    $data['detail'] = $this->M_pensiun->detail($id_pegawai);

    $this->template->load('MasterLayout','c-pensiun',$data);
  }
  public function create_pensiun_proses()
  {
    $config['upload_path'] = './images/pensiun';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_pensiun'))
		{
			$dok_pensiun = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Menambah Data!
        </div>"
      );
      redirect('pensiun/');
		} else{
			$dok_pensiun = $this->upload->file_name;
      // Tambah Data KGB pada tb_kgb
      $data = array(
        'id_pegawai' => $this->input->post('id_pegawai'),
        'no_sk' => $this->input->post('no_sk'),
        'tgl_sk' => $this->input->post('tgl_sk'),
        'ket_pensiun' => $this->input->post('ket_pensiun'),
        'dok_pensiun' => $dok_pensiun,
      );

      $this->M_pensiun->create_pensiun($data);
      $this->session->set_flashdata(
          "simpan",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Menyimpan!
          </div>"
      );
    }
    redirect('pensiun/');
  }
}
