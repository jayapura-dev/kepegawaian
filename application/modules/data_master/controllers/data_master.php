<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_master extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->model('M_datamaster');
    Modules::run('auth/cek_login');
  }
  public function jabatan()
  {
    $data['title'] = 'Data Master Jabatan';
    $data['jabatan'] = $this->M_datamaster->jabatan();

    $this->template->load('MasterLayout','r-jabatan',$data);
  }
  public function pangkat()
  {
    $data['title'] = 'Data Master Pangkat';
    $data['pangkat'] = $this->M_datamaster->pangkat();

    $this->template->load('MasterLayout','r-pangkat',$data);
  }
}
