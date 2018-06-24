<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class category_controller extends CI_Controller{
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
		$this->load->view('admin/category_view');
		
	}
	public function addbookcategory(){
		$this->load->model('admin/category_model');
		$this->category_model->insert_bookcategory();
		$data=$this->load->view('admin/category_view');
		if($data){
			redirect(site_url('admin/category_controller/viewbookcategory'),'refresh');
		}else{
			echo"error";
		}
	}
	public function viewbookcategory(){	
		$this->load->model('admin/category_model');
		$data['records'] = $this->category_model->view_bookcategory();
		$this->load->view('admin/category_table',$data);
	}		
	public function deletebookcategory(){
		$this->load->model('admin/category_model');
		$id=$this->input->get('id');
		if($this->category_model->delete_bookcategory($id)){
			redirect(site_url('admin/category_controller/viewbookcategory'),'refresh');
		}else{
			echo "not deleted";
		}
	}
	public function editbookcategory(){
		$this->load->model('admin/category_model');
		$id=$this->input->get('id');
		$data=$this->category_model->edit_bookcategory($id);
		$this->load->view('admin/category_edit',$data);
	}
		//$data['records']=$this->admin_model->edit_user($id);
		//$this->load->view('adminedit_view',$data);
	
	public function updatebookcategory()
	{
		$this->load->model('admin/category_model');
		if($this->category_model->update_bookcategory()){
			redirect(site_url('admin/category_controller/viewbookcategory'),'refresh');
		}else{
			echo "not updated";
		}
	}

	public function ajax_subcat()
	{
		$this->load->model('admin/category_model');
		$cat_id = $this->input->post('cat_id');
		$data['results'] = $this->category_model->ajax_subcat($cat_id);
		$this->load->view('admin/ajax_subcat', $data);
	}
}
