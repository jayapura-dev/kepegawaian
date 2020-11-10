<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends MX_Controller {
  var $sekolah = "";

  public function __construct()
  {
    parent::__construct();
    $this->sekolah = "http://127.0.0.1/sekolah/api";
    $this->load->library(array('upload','session','form_validation','curl'));
    $this->load->database();
    $this->load->model('M_pegawai');
    Modules::run('auth/cek_login');
  }

  public function index()
  {
    $data['title'] = 'Menu Data Pegawai';
    $this->template->load('MasterLayout','r-menu-pegawai',$data);
  }

  public function asn_struktural()
  {
      $data['title'] = 'ASN Struktural Dinas';
      $data['struk'] = $this->M_pegawai->asn_struktural();

      $this->template->load('MasterLayout','struktural/r-pegawai',$data);
  }

  public function detail_struktural($id)
  {
      $data['title'] = 'Detail Pegawai';
      $data['detail'] = $this->M_pegawai->detail_pegawai($id);

      $this->template->load('MasterLayout','struktural/l-pegawai',$data);
  }

  public function create_asn_struktural()
  {
      $data['title'] = 'Tambah Data ASN Struktural';
      $data['jabatan'] = $this->db->query("SELECT * FROM tb_jabatan WHERE id_penempatan = '1' ORDER BY id_jabatan ASC ")->result();
      $data['pangkat'] = $this->db->query("SELECT * FROM tb_pangkat ORDER BY id_pangkat ASC ")->result();

      $this->template->load('MasterLayout','struktural/c-pegawai',$data);
  }

  public function asn_fungsional()
  {
      $data['title'] = 'ASN Fungsional';
      $data['fung'] = $this->M_pegawai->asn_fungsional();

      $this->template->load('MasterLayout','fungsional/r-pegawai',$data);
  }

  public function create_asn_fungsional()
  {
      $data['title'] = 'Tambah Data ASN Fungsional';
      $data['jabatan'] = $this->db->query("SELECT * FROM tb_jabatan WHERE id_penempatan = '2' ORDER BY id_jabatan ASC ")->result();
      $data['pangkat'] = $this->db->query("SELECT * FROM tb_pangkat ORDER BY id_pangkat ASC ")->result();
      //$data['sek'] = json_decode($this->curl->simple_get($this->sekolah.'/sekolah'));
      $data['sek'] = $this->M_pegawai->get_api_sekolah();
      //<?php echo '<pre>'; print_r($sek); echo '</pre>';
      $this->template->load('MasterLayout','fungsional/c-pegawai',$data);
  }

  public function kontrak()
  {
      $data['title'] = 'ASN Fungsional';
      $data['kontrak'] = $this->M_pegawai->kontrak();

      $this->template->load('MasterLayout','kontrak/r-pegawai',$data);
  }

  public function create_kontrak()
  {
      $data['title'] = 'Tambah Data Kontrak';
      $data['bidang'] = $this->db->query("SELECT * FROM tb_bidang")->result();
      $data['jabatan'] = $this->db->query("SELECT * FROM tb_jabatan WHERE id_penempatan = '2' ORDER BY id_jabatan ASC ")->result();
      $data['sek'] = $this->M_pegawai->get_api_sekolah();
      $data['mapel'] = $this->M_pegawai->get_api_mapel();
      $this->template->load('MasterLayout','kontrak/c-pegawai',$data);
  }
}
