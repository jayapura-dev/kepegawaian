<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kpb extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->model('M_kpb');
    Modules::run('auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Kenaikan Pangkat';
    $data['kpb'] = $this->M_kpb->kpb();
    $this->template->load('MasterLayout','r-kpb',$data);
  }
  public function naik_pangkat()
  {
    $data['title'] = 'Pegawai Naik Pangkat';
    $data['naik'] = $this->M_kpb->data_naik_pangkat();

    $this->template->load('MasterLayout','r-datanaikpangkat',$data);
  }
  public function create_kpb($id_pegawai)
  {
    $data['title'] = 'Tambah Data kenaikan Pangkat';
    $data['detail'] = $this->db->get_where('tb_pegawai', ['id_pegawai' => $id_pegawai])->row_array();
    $data['pangkat'] = $this->db->query("SELECT * FROM tb_pangkat")->result();
    $this->template->load('MasterLayout','c-kpb',$data);
  }
  function create_kpb_proses()
  {
    $config['upload_path'] = './images/kpb';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_kpb'))
		{
			$dok_kpb = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Menambah Data!
        </div>"
      );
      redirect('kpb');
		} else{
			$file_path = $this->upload->file_name;

      $data = array(
        'id_pegawai' => $this->input->post('id_pegawai'),
        'id_pangkat' => $this->input->post('id_pangkat'),
        'tmt_kpb' => $this->input->post('tmt_kpb'),
        'dok_kpb' => $dok_kpb,
      );

      $this->M_kpb->create_kpb($data);
      $this->session->set_flashdata(
          "simpan",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Menyimpan!
          </div>"
      );
    }
    redirect('kpb');
  }
}
