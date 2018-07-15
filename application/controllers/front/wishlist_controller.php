<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//validate admin login
		if(!is_userlogin())
		{
			redirect(site_url('front/shop_controller'),'refresh');
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
		$book_id = $this->input->post('book_id');
		$data = $this->wishlist_model->save($cus_id,$book_id);
		echo json_encode($data);
	}

	// public function update()
	// {
	// 	$data = $this->wishlist_model->update();
	// 	echo json_encode($data);
	// }

	public function delete()
	{
		$data = $this->wishlist_model->delete();
		echo json_encode($data);
	}

}

/* End of file wishlist_controller.php */
/* Location: ./application/controllers/front/wishlist_controller.php */