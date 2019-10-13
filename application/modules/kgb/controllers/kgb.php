<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kgb extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('form_validation','upload'));
    $this->load->database();
    $this->load->model('M_kgb');
    Modules::run('auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Data KGB';
    $data['kgb'] = $this->M_kgb->kgb();
    $this->template->load('MasterLayout','r-kgb',$data);
  }
  public function usulan_kgb()
  {
    $data['title'] = 'Usulan KGB';
    $data['usulankgb'] = $this->M_kgb->data_ukgb();
    $this->template->load('MasterLayout','r-usulan-kgb',$data);
  }
  public function create_kgb($id_pegawai)
  {
    $data['title'] = 'Tambah Data KGB';
    //$data['detail'] = $this->db->get_where('tb_pegawai', ['id_pegawai' => $id_pegawai])->row_array();
    $data['detail'] = $this->db->get_where('tb_pegawai', ['id_pegawai' => $id_pegawai])->row_array();
    $this->template->load('MasterLayout','c-kgb',$data);
  }
  function create_kgb_proses()
  {
    $config['upload_path'] = './images/kgb';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_kgb'))
		{
			$dok_kgb = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Menambah Data!
        </div>"
      );
      redirect('kgb/usulan_kgb');
		} else{
			$dok_kgb = $this->upload->file_name;
      // Tambah Data KGB pada tb_kgb
      $data = array(
        'id_pegawai' => $this->input->post('id_pegawai'),
        'no_sk' => $this->input->post('no_sk'),
        'tgl_sk' => $this->input->post('tgl_sk'),
        'gapok_lama' => str_replace(',','',$this->input->post('gapok_lama')),
        'gapok_baru' => $this->input->post('gapok_baru'),
        'tmt_kgb' => $this->input->post('tmt_kgb'),
        'dok_kgb' => $dok_kgb,
      );

      // Update Data TMT Gapok Pejabat pada tb_pegawai
      $id_pegawai = $this->input->post('id_pegawai');
      $tmt_gapok = $this->input->post('tmt_kgb');
      $gapok = $this->input->post('gapok_baru');
      $update_data = array(
        'id_pegawai'    => $id_pegawai,
        'gapok_pegawai' => $gapok,
        'tmt_gapok'     => $tmt_gapok,
      );

      $where = array(
        'id_pegawai'    => $id_pegawai
      );

      $this->M_kgb->create_kgb($data);
      $this->M_kgb->update_tmt_gapok($where,$update_data,'tb_pegawai');
      $this->session->set_flashdata(
          "simpan",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Menyimpan!
          </div>"
      );
    }
    redirect('kgb/usulan_kgb');
  }
  function update_kgb_proses()
  {
    $id_kgb = $this->input->post('id_kgb');
    $id_pegawai = $this->input->post('id_pegawai');
    $no_sk = $this->input->post('no_sk');
    $tgl_sk = $this->input->post('tgl_sk');
    $gapok_lama = $this->input->post('gapok_lama');
    $gapok_baru = $this->input->post('gapok_baru');
    $tmt_kgb = $this->input->post('tmt_kgb');

    // Update Data Pada tb_kgb
    $data = array(
      'id_kgb'      => $id_kgb,
      'id_pegawai'  => $id_pegawai,
      'no_sk'       => $no_sk,
      'tgl_sk'      => $tgl_sk,
      'gapok_lama'  => $gapok_lama,
      'gapok_baru'  => $gapok_baru,
      'tmt_kgb'     => $tmt_kgb
    );

    $where = array(
      'id_kgb'    => $id_kgb
    );

    // Update Data pada tb_pegawai
    $data_pegawai = array(
      'id_pegawai'       => $id_pegawai,
      'gapok_pegawai'    => $gapok_baru,
      'tmt_gapok'        => $tmt_kgb
    );

    $where_pegawai = array(
      'id_pegawai'  => $id_pegawai
    );

    $this->M_kgb->update_kgb($where,$data,'tb_kgb');
    $this->M_kgb->update_pegawai($where_pegawai,$data_pegawai,'tb_pegawai');
    $this->session->set_flashdata(
        "simpan",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Mengupdate Data!
        </div>"
    );
    redirect('kgb');
  }
  public function updatefile_kgb_proses()
  {
    $config['upload_path'] = './images/kgb';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $id_kgb = $this->input->post('id_kgb');
    $file = $this->db->get_where('tb_kgb', ['id_kgb' => $id_kgb]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->dok_kgb;
      if($name != null){
        $delete_path = './images/kgb/'.$name;
        @unlink($delete_path);
      }
    }

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_kgb'))
		{
			$dok_kgb = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Mengupdate Data!
        </div>"
      );
      redirect('kgb');
		} else{
			$dok_kgb = $this->upload->file_name;

      $data = array(
        'id_kgb' => $id_kgb,
        'dok_kgb' => $dok_kgb,
      );

      $where = array(
        'id_kgb'  => $id_kgb
      );

      $this->M_kgb->update_file_kgb($where,$data,'tb_kgb');
      $this->session->set_flashdata(
          "update_file",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Mengupdate File!
          </div>"
      );
      redirect('kgb');
    }
  }
  public function delete_kgb($id_kgb)
  {
    $data['title'] = 'Hapus Item KGB ';
    $data['detail'] = $this->M_kgb->detail_kgb($id_kgb);

    $this->template->load('MasterLayout','d-kgb',$data);
  }
  function delete_kgb_proses($id_kgb = 0)
  {
    $id_kgb = $this->input->post('id_kgb');
    $file = $this->db->get_where('tb_kgb', ['id_kgb' => $id_kgb]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->dok_kgb;
      if($name != null){
        $delete_path = './images/kgb/'.$name;
        @unlink($delete_path);
      }
    }

    $this->M_kgb->delete_kgb($id_kgb);
    $this->session->set_flashdata("hapus","
        <div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menghapus Data!
        </div>"
    );
    redirect('kgb');
  }
}
