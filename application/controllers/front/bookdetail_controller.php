<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookdetail_controller extends CI_Controller {
	


	public function index()
	{
		$id=$this->input->get('id');
		$this->load->model('front/bookdetail_model');
		$data['records'] = $this->bookdetail_model->get_book($id);
		$data['rate'] = $this->bookdetail_model->get_reviewbybook($id);
		$data['customer'] = $this->bookdetail_model->get_customername($id);
	    $this->load->view('front/book_detail', $data);
	}

	 // public function getbybook(){
	 // 	$id=$this->input->get('id');
	 //    $this->load->model('front/bookdetail_model');
	 //    $data['rate'] = $this->bookdetail_model->get_reviewbybook();
	 //    $this->load->view('front/book_detail', $data);	
  //   }

}

/* End of file bookdetail_controller.php */
/* Location: ./application/controllers/front/bookdetail_controller.php */