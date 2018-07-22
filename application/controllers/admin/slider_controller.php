<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class slider_controller extends CI_Controller{
	
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
		$this->load->view('admin/slider_view');
		
		}
	public function addslider(){
		$filename = $this->upload_file();
		$this->load->model('admin/slider_model');
		$this->slider_model->insert_slider($filename);
		$data=$this->load->view('admin/slider_view');
		if($data){
			redirect(site_url('admin/slider_controller/viewslider'),'refresh');
		}else{
			echo"error";
		}
	}
	public function viewslider(){
			$this->load->model('admin/slider_model');
			$data['records']=$this->slider_model->view_slider();
			$this->load->view('admin/slider_table',$data);
		}
		
	public function deleteslider(){
		$this->load->model('admin/slider_model');
		$id=$this->input->get('id');
		if($this->slider_model->delete_slider($id)){
			redirect(site_url('admin/slider_controller/viewslider'),'refresh');
		}else{
			echo "not deleted";
		}
	}
	public function editslider(){
		$this->load->model('admin/slider_model');
		$id=$this->input->get('id');
		$data=$this->slider_model->edit_slider($id);
		$this->load->view('admin/slider_edit',$data);	
	}
	
	public function updateslider()
	{
		$filename = $this->upload_file();
		$this->load->model('admin/slider_model');
		if($this->slider_model->update_slider($filename)){
			redirect(site_url('admin/slider_controller/viewslider'),'refresh');
		}else{
			echo "not updated";
		}
	}

	public function upload_file()
        {

                $config['upload_path']          = './uploads/slider/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);
                //var_dump($_FILES);

                if($this->upload->do_upload('image'))
				{	
					
   					$upload_data = $this->upload->data();
   					$image_name = $upload_data['file_name'];
   					return $image_name;
   				}	
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
					die();
				}
        }
}
