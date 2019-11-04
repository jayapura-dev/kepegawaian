<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
    $this->load->helper('url');
		$this->load->model('M_home');
		Modules::run('auth/cek_login');
	}
	public function index()
	{
		$data['title'] = 'Dashboard | READ K-4';
		$data['jumlah_pejabat'] = $this->M_home->hitung_pejabat();
		$data['hitung_kp'] = $this->M_home->hitung_kp1();
		$data['struktural'] = $this->M_home->table_struktural();
		$data['jfu'] = $this->M_home->table_jfu();
		$data['jft'] = $this->M_home->table_jft();
		$this->template->load('MasterLayout','dashboard',$data);
	}
}
