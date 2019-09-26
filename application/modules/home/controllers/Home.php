<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
    $this->load->helper('url');
		Modules::run('auth/cek_login');
	}
	public function index()
	{
		$data['title'] = 'Dashboard | READ K-4';
		$this->template->load('MasterLayout','dashboard',$data);
	}
}
