<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ib extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('upload','session','form_validation'));
    $this->load->database();
    $this->load->model('M_ib');
    Modules::run('auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Tugas Belajar Pejabat';
    $data['tb'] = $this->M_ib->tb();
    $data['pegawai'] = $this->db->query("SELECT * FROM tb_pegawai")->result();
    $data['jenjang'] = $this->db->query("SELECT * FROM tb_jenjang")->result();
    $this->template->load('MasterLayout','r-ib',$data);
  }
  public function create_ijin()
  {
    $data['title'] = 'Tambah Ijin Belajar';
    $data['pegawai'] = $this->db->query("SELECT * FROM tb_pegawai")->result();
    $data['jenjang'] = $this->db->query("SELECT * FROM tb_jenjang")->result();

    $this->template->load('MasterLayout','c-ib',$data);
  }
  public function create_ijin_proses()
  {
    $config['upload_path'] = './images/ijin_belajar';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_ijin'))
		{
			$dok_ijin = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Menambah Data!
        </div>"
      );
      redirect('ib');
		} else{
			$dok_ijin = $this->upload->file_name;
      // Tambah Data Pangkat Pejabat pada tb_pegawai
      $data = array(
        'id_pegawai' => $this->input->post('id_pegawai'),
        'id_jenjang' => $this->input->post('id_jenjang'),
        'tmt_awal' => $this->input->post('tmt_awal'),
        'tmt_akhir' => $this->input->post('tmt_akhir'),
        'lokasi_pdk' => $this->input->post('lokasi_pdk'),
        'lembaga' => $this->input->post('lembaga'),
        'no_sk' => $this->input->post('no_sk'),
        'tgl_sk' => $this->input->post('tgl_sk'),
        'dok_ijin' => $dok_ijin,
      );

      $this->M_ib->create_ijin($data);
      $this->session->set_flashdata(
          "simpan",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Menyimpan!
          </div>"
      );
    }
    redirect('ib');
  }
  public function update_ijin_proses()
  {
    $id_ijin = $this->input->post('id_ijin');
    $id_pegawai = $this->input->post('id_pegawai');
    $id_jenjang = $this->input->post('id_jenjang');
    $tmt_awal = $this->input->post('tmt_awal');
    $tmt_akhir = $this->input->post('tmt_akhir');
    $lokasi_pdk = $this->input->post('lokasi_pdk');
    $lembaga = $this->input->post('lembaga');
    $no_sk = $this->input->post('no_sk');
    $tgl_sk = $this->input->post('tgl_sk');

    $data = array(
      'id_ijin'       => $id_ijin,
      'id_pegawai'  => $id_pegawai,
      'id_jenjang'       => $id_jenjang,
      'tmt_awal'  => $tmt_awal,
      'tmt_akhir'       => $tmt_akhir,
      'lokasi_pdk'  => $lokasi_pdk,
      'lembaga'  => $lembaga,
      'no_sk'       => $no_sk,
      'tgl_sk'  => $tgl_sk
    );

    $where = array(
      'id_ijin'       => $id_ijin
    );

    $this->M_ib->update_ijin($where,$data,'tb_ijin_bljr');
    $this->session->set_flashdata(
        "simpan",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menyimpan!
        </div>"
    );
    redirect('ib');
  }
  public function updatefile_ijin_proses()
  {
    $config['upload_path'] = './images/ijin_belajar';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $id_ijin = $this->input->post('id_ijin');
    $file = $this->db->get_where('tb_ijin_bljr', ['id_ijin' => $id_ijin]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->dok_ijin;
      if($name != null){
        $delete_path = './images/ijin_belajar/'.$name;
        @unlink($delete_path);
      }
    }

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_ijin'))
		{
			$dok_ijin = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Mengupdate Data!
        </div>"
      );
      redirect('ib');
		} else{
			$dok_ijin = $this->upload->file_name;

      $data = array(
        'id_ijin' => $id_ijin,
        'dok_ijin' => $dok_ijin,
      );

      $where = array(
        'id_ijin'  => $id_ijin
      );

      $this->M_ib->update_file_ijin($where,$data,'tb_ijin_bljr');
      $this->session->set_flashdata(
          "update_file",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Mengupdate File!
          </div>"
      );
      redirect('ib');
    }
  }
  public function delete_ijin($id_ijin)
  {
    $data['title'] = 'Hapus Item Ijin Belajar';
    $data['detail'] = $this->M_ib->detail_ijin($id_ijin);

    $this->template->load('MasterLayout','d-ib',$data);
  }
  function delete_ijin_proses($id_ijin = 0)
  {
    $id_ijin= $this->input->post('id_ijin');
    $file = $this->db->get_where('tb_ijin_bljr', ['id_ijin' => $id_ijin]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->dok_ijin;
      if($name != null){
        $delete_path = './images/ijin_belajar/'.$name;
        @unlink($delete_path);
      }
    }

    $this->M_ib->delete_ijin($id_ijin);
    $this->session->set_flashdata("hapus","
        <div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menghapus Data!
        </div>"
    );
    redirect('ib');
  }
}
