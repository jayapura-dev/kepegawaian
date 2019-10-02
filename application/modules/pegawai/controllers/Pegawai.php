<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->model('M_pegawai');
    Modules::run('auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Data Pegawai';
    $data['pegawai'] = $this->M_pegawai->pegawai();
    $data['pangkat'] = $this->db->query("SELECT * FROM tb_pangkat")->result();
    $data['jabatan'] = $this->db->query("SELECT * FROM tb_jabatan")->result();
    $data['kp'] = $this->db->query("SELECT * FROM tb_kp")->result();
    $data['unit'] = $this->db->query("SELECT * FROM tb_unit")->result();
    $this->template->load('MasterLayout','r-pegawai',$data);
  }
  public function create_pegawai()
  {
    $data['title'] = 'Tambah Pegawai';
    $data['pangkat'] = $this->db->query("SELECT * FROM tb_pangkat")->result();
    $data['jabatan'] = $this->db->query("SELECT * FROM tb_jabatan")->result();
    $data['kp'] = $this->db->query("SELECT * FROM tb_kp")->result();
    $data['unit'] = $this->db->query("SELECT * FROM tb_unit")->result();
    $this->template->load('MasterLayout','c-pegawai',$data);
  }
  public function create_pegawai_proses()
  {
    $nama = $this->input->post('nama');
    $nip = $this->input->post('nip');
    $jekel = $this->input->post('jekel');
    $pend_terahir = $this->input->post('pend_terahir');
    $id_pangkat = $this->input->post('id_pangkat');
    $tmt_pkt = $this->input->post('tmt_pkt');
    $id_jabatan = $this->input->post('id_jabatan');
    $tmt_jbt = $this->input->post('tmt_jbt');
    $tmt_cpns = $this->input->post('tmt_cpns');
    $id_kp = $this->input->post('id_kp');
    $id_unit = $this->input->post('id_unit');

    $data = array(
      'nama'          => $nama,
      'nip'           => $nip,
      'jekel'         => $jekel,
      'pend_terahir'  => $pend_terahir,
      'id_pangkat'    => $id_pangkat,
      'tmt_pkt'       => $tmt_pkt,
      'id_jabatan'    => $id_jabatan,
      'tmt_jbt'       => $tmt_jbt,
      'tmt_cpns'      => $tmt_cpns,
      'id_kp'         => $id_kp,
      'id_unit'       => $id_unit
    );

    $this->M_pegawai->create_pegawai($data);
    $this->session->set_flashdata(
        "simpan",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menyimpan Data!
        </div>"
    );
    redirect('pegawai');
  }
  function update_pegawai_proses()
  {
    $id_pegawai = $this->input->post('id_pegawai');
    $nama = $this->input->post('nama');
    $nip = $this->input->post('nip');
    $jekel = $this->input->post('jekel');
    $pend_terahir = $this->input->post('pend_terahir');
    $id_pangkat = $this->input->post('id_pangkat');
    $tmt_pkt = $this->input->post('tmt_pkt');
    $id_jabatan = $this->input->post('id_jabatan');
    $tmt_jbt = $this->input->post('tmt_jbt');
    $tmt_cpns = $this->input->post('tmt_cpns');
    $id_kp = $this->input->post('id_kp');
    $id_unit = $this->input->post('id_unit');

    $data = array(
      'id_pegawai'    => $id_pegawai,
      'nama'          => $nama,
      'nip'           => $nip,
      'jekel'         => $jekel,
      'pend_terahir'  => $pend_terahir,
      'id_pangkat'    => $id_pangkat,
      'tmt_pkt'       => $tmt_pkt,
      'id_jabatan'    => $id_jabatan,
      'tmt_jbt'       => $tmt_jbt,
      'tmt_cpns'      => $tmt_cpns,
      'id_kp'         => $id_kp,
      'id_unit'       => $id_unit
    );

    $where = array(
      'id_pegawai'    => $id_pegawai
    );

    $this->M_pegawai->update_pegawai($where,$data,'tb_pegawai');
    $this->session->set_flashdata(
        "update",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Mengupdate Data!
        </div>"
    );
    redirect('pegawai');
  }
  public function detail_pegawai($id_pegawai)
  {
    $data['title'] = 'Detail Pegawai';
    $data['detail'] = $this->M_pegawai->detail_pegawai($id_pegawai);

    $this->template->load('MasterLayout','l-pegawai',$data);
  }
}
