<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//validate admin login
		if(!is_userlogin())
		{
			redirect(site_url('front/shop_controller/view'),'refresh');
			exit();
		}
		$this->load->model('front/wishlist_model');
	}

	public function index()
	{
		
	}

	public function add()
	{	
		$cus_id = $this->session->userdata('id');
		// $book_id = $this->input->post('book_id');
		$data = $this->wishlist_model->save($cus_id);
		echo $data;
	}

	// public function update()
	// {
	// 	$data = $this->wishlist_model->update();
	// 	echo json_encode($data);
	// }

	public function delete()
	{
		$cus_id = $this->session->userdata('id');
		// echo $cus_id;
		$data = $this->wishlist_model->delete($cus_id);
		echo $data;
	}

}

/* End of file wishlist_controller.php */
/* Location: ./application/controllers/front/wishlist_controller.php */