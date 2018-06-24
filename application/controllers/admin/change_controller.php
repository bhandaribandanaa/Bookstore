<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class change_controller extends CI_Controller{
	public function changeusername(){

		$this->load->model('admin_model');
		$id=$this->input->get('id');
		$data['records']=$this->admin_model->edit_user($id);
		$this->load->view('admin/change_username',$data);
	}
	public function updateusername(){
		$this->load->model('admin_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
        					'username', 'username',
        					'required|min_length[5]|max_length[20]|required|is_unique[admin.username]');
		if ($this->form_validation->run())
                {
						if($this->admin_model->update_user()){
								$this->session->set_flashdata('Successfully Changed', TRUE);
								redirect(site_url('admin/dashboard'),'refresh');
								exit();
						}else{
								$this->session->set_flashdata('Not Changed', TRUE);
								//redirect(site_url('admin/change_controller/changeusername/'),'refresh');
							}
                }
          else{
          	 echo validation_errors();		
          }						
	}
	public function changepassword(){
		$this->load->model('admin_model');
		$id=$this->input->get('id');
		$data=$this->admin_model->edit_pass($id);
		$this->load->view('admin/change_password',$data);
	}
	public function updatepassword(){
		$this->load->model('admin_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
        					'password', 'password',
        					'required|min_length[5]|max_length[20]|required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		 if ($this->form_validation->run())
                {
                        //$this->session->set_flashdata('Not Changed', TRUE);
						$query=$this->admin_model->update_pass();
						//print_r($query);
						//exit();
						if($this->admin_model->update_pass()){
								$this->session->set_flashdata('Successfully Changed', TRUE);
								redirect(site_url('admin/dashboard'),'refresh');
								exit();
						}else{
								$this->session->set_flashdata('Not Changed', TRUE);
								//redirect(site_url('admin/change_controller/changepassword/'),'refresh');
							}
                }
          else{
          	 echo validation_errors();		
          }		
		
	}

}
