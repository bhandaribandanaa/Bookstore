<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_controller extends CI_Controller {
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
		$this->load->model('admin/order_model');
		$data['orders'] = $this->order_model->getallorders();
		$this->load->view('admin/order_view', $data);
	}

	public function editstatus()
	{
		$order_id = $this->input->get('id');
		$this->load->model('admin/order_model');
		$data = $this->order_model->edit_status($order_id);
		$this->load->view('admin/order_edit', $data);
	}

	public function updatestatus()
	{
		$this->load->model('admin/order_model');
		if($this->order_model->update_status()){
			redirect(site_url('admin/order_controller'),'refresh');
		}else{
			echo "not updated";
		}
	}


}

/* End of file order_controller.php */
/* Location: ./application/controllers/admin/order_controller.php */