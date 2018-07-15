<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class change_controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		//validate admin login
		if(!is_userlogin())
		{
			redirect(site_url('front/shop_controller'),'refresh');
			exit();
		}
	}

	public function changeuserinfo(){

		$this->load->model('front/customer_model');
		$id=$this->input->get('id');
		$data=$this->customer_model->edit_user($id);
		$this->load->view('front/change_userinfo',$data);
	}
	public function updateuserinfo(){
		$this->load->model('front/customer_model');
		  //$filename=$this->upload_file();
		 $data=$this->customer_model->change_user();
          $id=$this->input->post('id');

          if($data){

			redirect(site_url('front/customerview_controller/?id='.$id),'refresh');
		}else{
			$this->session->set_flashdata('Error Registering', TRUE);
			redirect(site_url('front/change_controller/changeuserinfo'),'refresh');
			exit();
		}
          
	}
	public function changeuserpass(){
		$this->load->model('front/customer_model');
		$id=$this->input->get('id');
		$data=$this->customer_model->edit_userpass($id);
		$this->load->view('front/change_userpass',$data);
	}
	public function updateuserpass(){
		$this->load->model('front/customer_model');
		//$filename=$this->upload_file();
		$this->load->library('form_validation');
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
		$this->form_validation->set_rules(
        					'password', 'password',
        					'required|min_length[5]|max_length[20]|required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		//captcha

				if ($this->form_validation->run())
                {
						$data= $this->customer_model->change_userpass();
						if($data){
							redirect(site_url('front/customerview_controller/?id='.$id),'refresh');
						}else{
							$this->session->set_flashdata('Error Registering', TRUE);
							redirect(site_url('front/changeuserpass'),'refresh');
							exit();
						}
                }
          		else{
          	 			echo validation_errors();
          	 			exit();		
          		}	

		
	}

	//upload picture for customer

	public function changeuserpicture(){
		$this->load->model('front/customer_model');
		$id=$this->input->get('id');
		$data=$this->customer_model->edit_userpicture($id);
		$this->load->view('front/change_userpicture',$data);
	}

	public function updateuserpicture(){
		$this->load->model('front/customer_model');
		$filename=$this->upload_file();
		$id = $this->session->userdata('id');
		$data= $this->customer_model->change_userpicture($filename);
		if($data){
			redirect(site_url('front/customerview_controller/?id='.$id),'refresh');
			}else{
				$this->session->set_flashdata('Error Registering', TRUE);
				redirect(site_url('front/change_controller/changeuserpicture/?id='.$id),'refresh');
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


public function recaptcha($str='')
  {
  	$google_url="https://www.google.com/recaptcha/api/siteverify";
    $secret='6LeHBWMUAAAAAEu4dB5OzZxgEA9-2sMULeNf7-Ej';
    $ip=$_SERVER['REMOTE_ADDR'];
    $url=$google_url."?secret=".$secret."&response=".$str."&remoteip=".$ip;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    $res = curl_exec($curl);
    curl_close($curl);
    $res= json_decode($res, true);

    if($res['success'])
    {
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('recaptcha', 'The reCAPTCHA field is telling me that you are a robot. Shall we give it another try?');
      return FALSE;
    }
  }
}
