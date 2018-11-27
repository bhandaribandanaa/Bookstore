<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class topseller_controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		//validate admin login
		if(!is_adminlogin())
		{
			redirect(site_url('admin/login'),'refresh');
			exit();
		}
	}
	
	public function index(){
		$this->load->model('admin/topseller_model');
		$data['seller'] = $this->topseller_model->view_topseller();
		// var_dump($data['seller']);
		// exit();		
		$dat = array();
		foreach ($data['seller'] as $row ) {
			$dat[] = $row;
		}
		json_encode($dat);
		$this->load->view('admin/topseller_view',$data);
		
	}
	public function finishingbooks()
	{
		$this->load->model('admin/topseller_model');
		$data['books'] = $this->topseller_model->view_finishingbooks();
		$this->load->view('admin/finishingbooks',$data);
	}
}
