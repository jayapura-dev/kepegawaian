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
        'id_pegawai'    => $this->input->post('id_pegawai'),
        'nama'          => $this->input->post('nama'),
        'nip'           => $this->input->post('nip'),
        'tgl_lahir'     => $this->input->post('tgl_lahir'),
        'jekel'         => $this->input->post('jekel'),
        'pend_terahir'  => $this->input->post('pend_terahir'),
        'bidang'        => $this->input->post('bidang'),
        'id_pangkat'    => $this->input->post('id_pangkat'),
        'tmt_pkt'       => $this->input->post('tmt_pkt'),
        'id_jabatan'    => $this->input->post('id_jabatan'),
        'tmt_jbt'       => $this->input->post('tmt_jbt'),
        'gapok_pegawai' => $this->input->post('gapok_pegawai'),
        'tmt_gapok'     => $this->input->post('tmt_gapok'),
        'tmt_cpns'      => $this->input->post('tmt_cpns'),
        'id_kp'         => $this->input->post('id_kp'),
        'id_unit'       => $this->input->post('id_unit'),
        'path_foto'     => $this->input->post('path_foto'),
        'no_sk'         => $this->input->post('no_sk'),
        'tgl_sk'        => $this->input->post('tgl_sk'),
        'ket_pensiun'   => $this->input->post('ket_pensiun'),
        'dok_pensiun'   => $dok_pensiun,
      );

      $id_pegawai = $this->input->post('id_pegawai');

      $this->M_pensiun->create_pensiun($data);
      $this->M_pensiun->delete_pegawai($id_pegawai);
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
  public function update_pensiun_proses()
  {
    $id_pegawai    = $this->input->post('id_pegawai');
    $nama          = $this->input->post('nama');
    $nip           = $this->input->post('nip');
    $tgl_lahir     = $this->input->post('tgl_lahir');
    $jekel         = $this->input->post('jekel');
    $pend_terahir  = $this->input->post('pend_terahir');
    $bidang        = $this->input->post('bidang');
    $id_pangkat    = $this->input->post('id_pangkat');
    $tmt_pkt       = $this->input->post('tmt_pkt');
    $id_jabatan    = $this->input->post('id_jabatan');
    $tmt_jbt       = $this->input->post('tmt_jbt');
    $gapok_pegawai = $this->input->post('gapok_pegawai');
    $tmt_gapok     = $this->input->post('tmt_gapok');
    $tmt_cpns      = $this->input->post('tmt_cpns');
    $id_kp         = $this->input->post('id_kp');
    $id_unit       = $this->input->post('id_unit');
    $path_foto     = $this->input->post('path_foto');
    $no_sk         = $this->input->post('no_sk');
    $tgl_sk        = $this->input->post('tgl_sk');
    $ket_pensiun   = $this->input->post('ket_pensiun');

    $data = array(
      'id_pegawai'    => $id_pegawai,
      'nama'          => $nama,
      'nip'           => $nip,
      'tgl_lahir'     => $tgl_lahir,
      'jekel'         => $jekel,
      'pend_terahir'  => $pend_terahir,
      'bidang'        => $bidang,
      'id_pangkat'    => $id_pangkat,
      'tmt_pkt'       => $tmt_pkt,
      'id_jabatan'    => $id_jabatan,
      'tmt_jbt'       => $tmt_jbt,
      'gapok_pegawai' => $gapok_pegawai,
      'tmt_gapok'     => $tmt_gapok,
      'tmt_cpns'      => $tmt_cpns,
      'id_kp'         => $id_kp,
      'id_unit'       => $id_unit,
      'path_foto'     => $path_foto,
      'no_sk'         => $no_sk,
      'tgl_sk'        => $tgl_sk,
      'ket_pensiun'   => $ket_pensiun
    );

    $where = array(
      'id_pegawai'    => $id_pegawai
    );

    $this->M_pensiun->update_pensiun($where,$data,'tb_pensiun');
    $this->session->set_flashdata(
        "update",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menupdate Data!
        </div>"
    );
    redirect('pensiun');
  }
  public function updatefile_pensiun_proses()
  {
    $config['upload_path'] = './images/pensiun';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $id_pegawai = $this->input->post('id_pegawai');
    $file = $this->db->get_where('tb_pensiun', ['id_pegawai' => $id_pegawai]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->dok_pensiun;
      if($name != null){
        $delete_path = './images/pensiun/'.$name;
        @unlink($delete_path);
      }
    }

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_pensiun'))
		{
			$dok_pensiun = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Mengupdate Data!
        </div>"
      );
      redirect('pensiun');
		} else{
			$dok_pensiun = $this->upload->file_name;

      $data = array(
        'id_pegawai' => $id_pegawai,
        'dok_pensiun' => $dok_pensiun,
      );

      $where = array(
        'id_pegawai'  => $id_pegawai
      );

      $this->M_pensiun->update_file_pensiun($where,$data,'tb_pensiun');
      $this->session->set_flashdata(
          "update_file",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Mengupdate File!
          </div>"
      );
      redirect('pensiun');
    }
  }
}
