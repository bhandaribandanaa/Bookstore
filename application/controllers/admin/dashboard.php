<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

	public function index()
	{
		$data['main_content'] = 'dashboard';
		$this->load->model('admin/category_model');
		$data['number']= $this->category_model->getbookcategory();
		$this->load->view('admin/template', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('admin_logged_in');
		redirect(site_url('admin/login'),'refresh');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */