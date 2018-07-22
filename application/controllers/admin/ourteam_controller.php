<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ourteam_controller extends CI_Controller{
	
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
		$this->load->view('admin/ourteam_view');
		
		}
	public function addourteam(){
		$filename = $this->upload_file();
		$this->load->model('admin/ourteam_model');
		$this->ourteam_model->insert_ourteam($filename);
		$data=$this->load->view('admin/ourteam_view');
		if($data){
			redirect(site_url('admin/ourteam_controller/viewourteam'),'refresh');
		}else{
			echo"error";
		}
	}
	public function viewourteam(){
			$this->load->model('admin/ourteam_model');
			$data['records'] = $this->ourteam_model->view_ourteam();
            $this->load->view('admin/ourteam_table',$data);
            
		}
		
	public function deleteourteam(){
		$this->load->model('admin/ourteam_model');
		$id=$this->input->get('id');
		if($this->ourteam_model->delete_ourteam($id)){
			redirect(site_url('admin/ourteam_controller/viewourteam'),'refresh');
		}else{
			echo "not deleted";
		}
	}
	public function editourteam(){
		$this->load->model('admin/ourteam_model');
		$id=$this->input->get('id');
		$data=$this->ourteam_model->edit_ourteam($id);
		$this->load->view('admin/ourteam_edit',$data);
	}
	
	public function updateourteam()
	{
		$filename = $this->upload_file();
		$this->load->model('admin/ourteam_model');
		if($this->ourteam_model->update_ourteam($filename)){
			redirect(site_url('admin/ourteam_controller/viewourteam'),'refresh');
		}else{
			echo "not updated";
		}
	}

	public function upload_file()
        {

                $config['upload_path']          = './uploads/ourteam/';
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
