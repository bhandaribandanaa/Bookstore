<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class revenue_controller extends CI_Controller{
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
		$this->load->model('admin/revenue_model');
		$data['revenue'] = $this->revenue_model->view_revenue();
		$this->load->view('admin/dashboard',$data);
		
	}
}
