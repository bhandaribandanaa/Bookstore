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
		$cus_id = $this->session->userdata('id');
		$this->load->model('front/customerview_model');
		$data['customer'] = $this->customerview_model->view_customerprofile($id);
		$data['reviews'] = $this->customerview_model->view_review($id);
		$data['wishlist'] = $this->customerview_model->view_wishlist($cus_id);
		$data['order'] = $this->customerview_model->view_orders($cus_id);
		/*foreach ($data['review'] as $row) {
			echo $row->comment;
		// }*/
		// print_r($data['reviews']);
		// exit();
		$this->load->view('front/customerpage_view', $data);
	}

	public function cancel_order()
	{
		$order_id= $this->input->get('order_id');
		$this->load->model('front/order');
		if($this->order->cancelorder($order_id)){
			redirect(site_url('front/cancel_policy'),'refresh');
		}else{
			echo error;
		}
	}



}