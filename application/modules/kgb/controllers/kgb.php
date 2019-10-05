<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kgb extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation','upload');
    $this->load->database();
    $this->load->model('M_kgb');
    Modules::run('auth/cek_login');
  }
  public function usulan_kgb()
  {
    $data['title'] = 'Usulan KGB';
    $data['kpb'] = $this->M_kpb->kpb();
    $this->template->load('MasterLayout','r-kpb',$data);
  }
}
