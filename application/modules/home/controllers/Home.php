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
		$data['hitung_pejabat'] = $this->M_home->hitung_pejabat();
		$data['struktural'] = $this->M_home->table_struktural();
		$data['jfu'] = $this->M_home->table_jfu();
		$data['jft'] = $this->M_home->table_jft();
		$this->template->load('MasterLayout','dashboard',$data);
	}
	public function hukum()
	{
		$data['title'] = 'Hukum';
		$this->template->load('MasterLayout','file',$data);
	}
}
