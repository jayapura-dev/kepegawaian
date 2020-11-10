<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jurnal extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('M_jurnal');
    Modules::run('auth/cek_login');
  }

  public function index()
  {
      $data['title'] = 'Menu Jurnal';
      $this->template->load('MasterLayout','r-menu',$data);
  }

  public function jurnal_pendidik()
  {
      $data['title'] = 'Jurnal Pendidik';
      $data['pendidik'] = $this->M_jurnal->get_api_jurnal_pendidik();
      $this->template->load('MasterLayout','pendidik/r-jurnal',$data);
  }
}
