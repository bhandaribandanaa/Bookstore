<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class custretailer_controller extends CI_Controller{
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
		$this->load->view('admin/custretailer_view');
	}
	public function adduser(){
		$filename = $this->upload_file();
		$token = generate_token();
		$this->load->model('admin/custretailer_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
        					'username', 'username',
        					'required|min_length[5]|max_length[20]|required|is_unique[customer.username]');
				if ($this->form_validation->run())
                {
						$this->custretailer_model->insert_user($filename,$token);
                }
          		else{
          	 			echo validation_errors();
          	 			exit();		
          		}	
		
		$data=$this->load->view('admin/custretailer_view');
		if($data){
			redirect(site_url('admin/custretailer_controller/viewuser'),'refresh');
		}else{
			echo"error";
		}
	}
	public function viewuser(){
			$this->load->model('admin/custretailer_model');
			$data['records']=$this->custretailer_model->view_user();
			$this->load->view('admin/custretailer_table',$data);
		}
		
	public function deleteuser(){
		$this->load->model('admin/custretailer_model');
		$id=$this->input->get('id');
		if($this->custretailer_model->delete_user($id)){
			redirect(site_url('admin/custretailer_controller/viewuser'),'refresh');
		}else{
			echo "not deleted";
		}
	}
	public function edituser(){
		$this->load->model('admin/custretailer_model');
		$id=$this->input->get('id');
		$data=$this->custretailer_model->edit_user($id);
		$this->load->view('admin/custretailer_edit',$data);	
	}
	public function updateuser()
	{
		$filename = $this->upload_file();	
		$this->load->model('admin/custretailer_model');
		$this->load->library('form_validation');
		//since the username must be unique only if the user edits it the validation rules are different hence if else is used here
		$id = $this->input->post('id');
		$query=$this->db->get_where("customer",array('id' => $id));
		$oldname= $query->row()->username;
		if($this->input->post('username') != $oldname){
			$this->form_validation->set_rules(
        					'username', 'username',
        					'required|min_length[5]|max_length[20]|required|is_unique[customer.username]');
		}else{
			$this->form_validation->set_rules(
        					'username', 'username',
        					'required|min_length[5]|max_length[20]|required');
		}

		
				if ($this->form_validation->run())
                {
						if($this->custretailer_model->update_user($filename)){
							redirect(site_url('admin/custretailer_controller/viewuser'),'refresh');
						}else{
							echo "not updated";
						}
                }
          		else{
          	 			echo validation_errors();
          	 			exit();		
          		}	
		
}
public function upload_file()
        {

                $config['upload_path']          = './uploads/custretailer/';
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
