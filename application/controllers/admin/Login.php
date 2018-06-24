<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//validate admin login
		if(is_adminlogin())
		{
			redirect(site_url('admin/dashboard'),'refresh');
			exit();
		}
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function validate_user()
	{
		if($this->input->post('login') != NULL && $this->input->post('login') == 'LOGIN')
		{
			$this->load->model('admin/login_model');
			$result = $this->login_model->validate_user();
			if($result)
			{
				$data['admin_logged_in'] = TRUE;
				$data['adminusername'] = $result->username;
				$data['adminid']= $result->id;
				$this->session->set_userdata( $data );

				//redirecting to dashboard after succesful login
				redirect(site_url('admin/dashboard'),'refresh');
				exit();
			}
			else
			{
				$this->session->set_flashdata('invalid_user', TRUE);
				redirect(site_url('admin/login'),'refresh');
				exit();
			}
		}
	}
}

/* End of file index.php */
/* Location: ./application/controllers/admin/index.php */