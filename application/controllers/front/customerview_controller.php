<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customerview_controller extends CI_Controller {

	public function __construct(){
			parent::__construct();
			//Load Library and model.
			if(!is_userlogin())
		{
			redirect(site_url('front/customer_controller'),'refresh');
			exit();
		}
			}

	public function index()
	{
		$id= $this->input->get('id');
		$this->load->model('front/customerview_model');
		$data['customer'] = $this->customerview_model->view_customerprofile($id);
		$this->load->view('front/customerpage_view',$data);
	}

}