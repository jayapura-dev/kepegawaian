<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tb extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('upload','session','form_validation'));
    $this->load->database();
    $this->load->model('M_tb');
    Modules::run('auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Data Tugas Belajar';
    $data['tb'] = $this->M_tb->tb();
    $data['pegawai'] = $this->db->query("SELECT * FROM tb_pegawai")->result();
    $data['jenjang'] = $this->db->query("SELECT * FROM tb_jenjang")->result();
    $this->template->load('MasterLayout','r-tb',$data);
  }

  public function usulan_ptb()
  {
    $data['title'] = 'Usulan PIB';
    $data['usulan_ptb'] = $this->M_tb->usulan_ptb();
    $this->template->load('MasterLayout','r-usulan-ptb',$data);
  }

  public function tugas_belajar()
  {
    $data['title'] = 'Usulan PTB';
    $data['tb'] = $this->M_tb->pejabat_tb();
    $data['jenjang'] = $this->db->query("SELECT * FROM tb_jenjang")->result();
    $this->template->load('MasterLayout','r-pejabat-tugas',$data);
  }

  public function update_tugas_pegawai_proses()
  {
    $id_pegawai = $this->input->post('id_pegawai');
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $no_sk = $this->input->post('no_sk');
    $id_jenjang = $this->input->post('id_jenjang');

    $data = array(
      'id_pegawai'    => $id_pegawai,
      'tgl_awal'      => $tgl_awal,
      'tgl_akhir'     => $tgl_akhir,
      'no_sk'         => $no_sk,
      'id_jenjang'    => $id_jenjang
    );

    $where = array(
      'id_pegawai'    => $id_pegawai
    );

    $this->M_tb->update_tugas_pejabat($where,$data,'tb_pegawai');
    $this->session->set_flashdata(
        "simpan",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Mengupdate Data!
        </div>"
    );
    redirect('tb/tugas_belajar');
  }

  public function create_tb()
  {
    $data['title'] = 'Tambah Tugas Belajar';
    $data['pegawai'] = $this->db->query("SELECT * FROM tb_pegawai")->result();
    $data['jenjang'] = $this->db->query("SELECT * FROM tb_jenjang")->result();

    $this->template->load('MasterLayout','c-tb',$data);
  }
  public function create_tb_proses()
  {
    $config['upload_path'] = './images/tugas_belajar';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_tgs'))
		{
			$dok_tgs = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Menambah Data!
        </div>"
      );
      redirect('tb');
		} else{
			$dok_tgs= $this->upload->file_name;
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
        'dok_tgs' => $dok_tgs,
      );

      $this->M_tb->create_tugas($data);
      $this->session->set_flashdata(
          "simpan",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Menyimpan!
          </div>"
      );
    }
    redirect('tb');
  }
  public function update_tgs_proses()
  {
    $id_tgs = $this->input->post('id_tgs');
    $id_pegawai = $this->input->post('id_pegawai');
    $id_jenjang = $this->input->post('id_jenjang');
    $tmt_awal = $this->input->post('tmt_awal');
    $tmt_akhir = $this->input->post('tmt_akhir');
    $lokasi_pdk = $this->input->post('lokasi_pdk');
    $lembaga = $this->input->post('lembaga');
    $no_sk = $this->input->post('no_sk');
    $tgl_sk = $this->input->post('tgl_sk');

    $data = array(
      'id_tgs'       => $id_tgs,
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
      'id_tgs'       => $id_tgs
    );

    $this->M_tb->update_tgs($where,$data,'tb_tgs_bljr');
    $this->session->set_flashdata(
        "simpan",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menyimpan!
        </div>"
    );
    redirect('tb');
  }
  public function updatefile_tgs_proses()
  {
    $config['upload_path'] = './images/tugas_belajar';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $id_tgs = $this->input->post('id_tgs');
    $file = $this->db->get_where('tb_tgs_bljr', ['id_tgs' => $id_tgs]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->dok_tgs;
      if($name != null){
        $delete_path = './images/tugas_belajar/'.$name;
        @unlink($delete_path);
      }
    }

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_tgs'))
		{
			$dok_tgs = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Mengupdate Data!
        </div>"
      );
      redirect('tb');
		} else{
			$dok_tgs = $this->upload->file_name;

      $data = array(
        'id_tgs' => $id_tgs,
        'dok_tgs' => $dok_tgs,
      );

      $where = array(
        'id_tgs'  => $id_tgs
      );

      $this->M_tb->update_file_tgs($where,$data,'tb_tgs_bljr');
      $this->session->set_flashdata(
          "update_file",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Mengupdate File!
          </div>"
      );
      redirect('tb');
    }
  }
  public function delete_tgs($id_tgs)
  {
    $data['title'] = 'Hapus Item Tugas Belajar';
    $data['detail'] = $this->M_tb->detail_tgs($id_tgs);

    $this->template->load('MasterLayout','d-tb',$data);
  }
  function delete_tgs_proses($id_tgs = 0)
  {
    $id_tgs= $this->input->post('id_tgs');
    $file = $this->db->get_where('tb_tgs_bljr', ['id_tgs' => $id_tgs]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->dok_tgs;
      if($name != null){
        $delete_path = './images/tugas_belajar/'.$name;
        @unlink($delete_path);
      }
    }

    $this->M_tb->delete_tgs($id_tgs);
    $this->session->set_flashdata("hapus","
        <div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menghapus Data!
        </div>"
    );
    redirect('tb');
  }
}
