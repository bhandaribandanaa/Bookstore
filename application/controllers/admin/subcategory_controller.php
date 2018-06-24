<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subcategory_controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		//validate admin login
		if(!is_adminlogin())
		{
			//redirect(site_url('admin/login'),'refresh');
			exit();
		}
	}
	
	public function index(){
		$this->load->model('admin/subcategory_model');
		$data['category']=$this->subcategory_model->getcategory();
		$this->load->view('admin/subcategory_view', $data);
		
	}

	public function addbookcategory(){
		$this->load->model('admin/subcategory_model');
		$this->subcategory_model->insert_bookcategory();
		$data=$this->load->view('admin/subcategory_view');
		if($data){
			redirect(site_url('admin/subcategory_controller/viewbookcategory'),'refresh');
		}else{
			echo"error";
		}
	}
	public function viewbookcategory(){	
		$this->load->model('admin/subcategory_model');
		$data['records'] = $this->subcategory_model->view_bookcategory();
		$this->load->view('admin/subcategory_table',$data);
	}		
	public function deletebookcategory(){
		$this->load->model('admin/subcategory_model');
		$id=$this->input->get('id');
		if($this->subcategory_model->delete_bookcategory($id)){
			redirect(site_url('admin/subcategory_controller/viewbookcategory'),'refresh');
		}else{
			echo "not deleted";
		}
	}
	public function editbookcategory(){
		$this->load->model('admin/subcategory_model');
		$id=$this->input->get('id');
		$data['record'] = $this->subcategory_model->edit_bookcategory($id);
		//print_r($data['records']);
		//exit();
		$data['category']=$this->subcategory_model->getcategory();
		$this->load->view('admin/subcategory_edit',$data);
	}
		//$data['records']=$this->admin_model->edit_user($id);
		//$this->load->view('adminedit_view',$data);
	
	public function updatebookcategory()
	{
		$this->load->model('admin/subcategory_model');
		if($this->subcategory_model->update_bookcategory()){
			redirect(site_url('admin/subcategory_controller/viewbookcategory'),'refresh');
		}else{
			echo "not updated";
		}
}
}
