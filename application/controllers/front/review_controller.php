<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_controller extends CI_Controller {

	public function index()
	{
		
	}

	public function add_review()
	{
		$book_id = $this->input->post('book_id');
		$cus_id = $this->session->userdata('id');
		$this->load->model('front/review_model');
		$data = $this->review_model->insert_review($cus_id);
		// $data=$this->load->view('admin/view_bookdetail');
		if($data){
			redirect(site_url('front/bookdetail_controller/?id='.$book_id),'refresh');
		}else{
			echo"error";
		}
	}

	public function edit_review()
	{
		$review_id = $this->input->get('review_id');
		$this->load->model('front/review_model');
		$data = $this->review_model->edit_review($review_id);
		$this->load->view('front/edit_review',$data);
	}

	public function update_review()
	{
		$review_id = $this->input->post('review_id');
		$cus_id = $this->session->userdata('id');
		$book_id=$this->input->post('book_id');
		$this->load->model('front/review_model');
		if($this->review_model->update_review($review_id,$cus_id,$book_id)){
			redirect(site_url('front/bookdetail_controller/?id='.$book_id.'#post-description'),'refresh');
		}else{
			echo "not updated";
		}

	}

	public function delete_review()
	{
		$review_id=$this->input->get('review_id');
		$book_id=$this->input->get('book_id');

		$this->load->model('front/review_model');
		$data = $this->review_model->delete_review($review_id);
		// $data=$this->load->view('admin/view_bookdetail');
		if($data){
			redirect(site_url('front/bookdetail_controller/?id='.$book_id),'refresh');
		}else{
			echo"error";
		}
	}

}

/* End of file review_controller.php */
/* Location: ./application/controllers/front/review_controller.php */