<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kpb extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('form_validation','upload'));
    $this->load->database();
    $this->load->model('M_kpb');
    Modules::run('auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Kenaikan Pangkat';
    $data['kpb'] = $this->M_kpb->kpb();
    $data['pangkat'] = $this->db->query("SELECT * FROM tb_pangkat")->result();
    $this->template->load('MasterLayout','r-kpb',$data);
  }
  public function usulan_kp()
  {
    $this->load->library('Indo_tanggal');
    $data['title'] = 'Pegawai Naik Pangkat';
    $data['naik'] = $this->M_kpb->data_naik_pangkat();

    $this->template->load('MasterLayout','r-usulan-naikpangkat',$data);
  }

  function update_notif_proses()
  {
    Modules::run('auth/cek_login', 1);
    $id_pegawai = $this->input->post('id_pegawai');
    $notifikasi = $this->input->post('notifikasi');
    $ket = $this->input->post('ket');

    $data = array(
      'id_pegawai'    => $id_pegawai,
      'notifikasi'    => $notifikasi,
      'ket'           => $ket
    );

    $where = array(
      'id_pegawai'    => $id_pegawai
    );

    $this->M_kpb->update_notif($where,$data,'tb_pegawai');
    $this->session->set_flashdata(
      "update_notif",
      "<div class='alert alert-success fade in'>
          <a href='#' class='close' data-dismiss='alert'>&times;</a>
          <strong>error !</strong> Success Update Notifikasi!
      </div>"
    );
    redirect('kpb/usulan_kp');
  }

  public function create_kpb($id_pegawai)
  {
    Modules::run('auth/cek_login', 1);
    $data['title'] = 'Tambah Data kenaikan Pangkat';
    //$data['detail'] = $this->db->get_where('tb_pegawai', ['id_pegawai' => $id_pegawai])->row_array();
    $data['detail'] = $this->M_kpb->detail($id_pegawai);
    $data['pangkat'] = $this->db->query("SELECT * FROM tb_pangkat")->result();
    $this->template->load('MasterLayout','c-kpb',$data);
  }
  public function create_kpb_proses()
  {
    Modules::run('auth/cek_login', 1);
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
			$dok_kpb = $this->upload->file_name;
      // Tambah Data Pangkat Pejabat pada tb_kpb
      $data = array(
        'id_pegawai' => $this->input->post('id_pegawai'),
        'no_sk' => $this->input->post('no_sk'),
        'tgl_sk' => $this->input->post('tgl_sk'),
        'pkt_lama' => $this->input->post('pkt_lama'),
        'id_pangkat' => $this->input->post('id_pangkat'),
        'tmt_kpb' => $this->input->post('tmt_kpb'),
        'ket_kpb' => $this->input->post('ket_kpb'),
        'dok_kpb' => $dok_kpb,
      );

      // Update Data TMT Pejabat pada tb_pegawai
      $id_pegawai = $this->input->post('id_pegawai');
      $tmt_pkt = $this->input->post('tmt_kpb');
      $id_pangkat = $this->input->post('id_pangkat');
      $update_data = array(
        'id_pegawai'    => $id_pegawai,
        'tmt_pkt'       => $tmt_pkt,
        'id_pangkat'    => $id_pangkat
      );

      $where = array(
        'id_pegawai'    => $id_pegawai
      );

      $this->M_kpb->create_kpb($data);
      $this->M_kpb->update_tmt_pkt($where,$update_data,'tb_pegawai');
      $this->session->set_flashdata(
          "simpan",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Menyimpan!
          </div>"
      );
    }
    redirect('kpb/usulan_kp');
  }
  public function update_kpb($id_pegawai)
  {
    Modules::run('auth/cek_login', 1);
    $data['title'] = 'Edit Data KPB';
    $data['detail'] = $this->M_kpb->detail_kpb($id_pegawai);

    $this->template->load('MasterLayout','u-kpb',$data);
  }
  public function update_kpb_proses()
  {
    Modules::run('auth/cek_login', 1);
    $id_kpb = $this->input->post('id_kpb');
    $id_pegawai = $this->input->post('id_pegawai');
    $no_sk = $this->input->post('no_sk');
    $tgl_sk = $this->input->post('tgl_sk');
    $pkt_lama = $this->input->post('pkt_lama');
    $id_pangkat = $this->input->post('id_pangkat');
    $tmt_kpb = $this->input->post('tmt_kpb');
    $ket_kpb = $this->input->post('ket_kpb');

    $data = array(
      'id_kpb'      => $id_kpb,
      'id_pegawai'  => $id_pegawai,
      'no_sk'       => $no_sk,
      'tgl_sk'      => $tgl_sk,
      'pkt_lama'    => $pkt_lama,
      'id_pangkat'  => $id_pangkat,
      'tmt_kpb'     => $tmt_kpb,
      'ket_kpb'     => $ket_kpb,
    );
    $where = array(
      'id_kpb'   => $id_kpb
    );
    $this->M_kpb->update_kpb($where,$data,'tb_kpb');
    $this->session->set_flashdata(
        "update",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Mengupdate!
        </div>"
    );
  }
  public function updatefile_kpb_proses()
  {
    Modules::run('auth/cek_login', 1);
    $config['upload_path'] = './images/kpb';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $id_kpb = $this->input->post('id_kpb');
    $file = $this->db->get_where('tb_kpb', ['id_kpb' => $id_kpb]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->dok_kpb;
      if($name != null){
        $delete_path = './images/kpb/'.$name;
        @unlink($delete_path);
      }
    }

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_kpb'))
		{
			$dok_kpb = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Mengupdate Data!
        </div>"
      );
      redirect('kpb');
		} else{
			$dok_kpb = $this->upload->file_name;

      $data = array(
        'id_kpb' => $id_kpb,
        'dok_kpb' => $dok_kpb,
      );

      $where = array(
        'id_kpb'  => $id_kpb
      );

      $this->M_kpb->update_file_kpb($where,$data,'tb_kpb');
      $this->session->set_flashdata(
          "update_file",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Mengupdate File!
          </div>"
      );
      redirect('kpb');
    }
  }
  public function delete_kpb($id_kpb)
  {
    Modules::run('auth/cek_login', 1);
    $data['title'] = 'Hapus Item KP Pejabat';
    $data['detail'] = $this->M_kpb->detail_kpb($id_kpb);

    $this->template->load('MasterLayout','d-kpb',$data);
  }
  function delete_kpb_proses($id_kpb = 0)
  {
    Modules::run('auth/cek_login', 1);
    $id_kpb = $this->input->post('id_kpb');
    $file = $this->db->get_where('tb_kpb', ['id_kpb' => $id_kpb]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->dok_kpb;
      if($name != null){
        $delete_path = './images/kpb/'.$name;
        @unlink($delete_path);
      }
    }

    $this->M_kpb->delete_kpb($id_kpb);
    $this->session->set_flashdata("hapus","
        <div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menghapus Data!
        </div>"
    );
    redirect('kpb');
  }

  public function cari_kpb()
  {
    Modules::run('auth/cek_login', 1);
    $data['title'] = 'Cari Data KPB';
    $this->template->load('MasterLayout','l-kpb',$data);
  }

  public function result_kpb($dari_tgl = 0,$smp_tgl = 0)
  {
    Modules::run('auth/cek_login', 1);
    $data['title'] = 'Data KP Result';
    $dari_tgl = $this->input->post('dari_tgl');
    $smp_tgl = $this->input->post('smp_tgl');

    $data['result'] = $this->M_kpb->cari($dari_tgl,$smp_tgl);

    $this->template->load('MasterLayout','result-kpb',$data);
  }
}
