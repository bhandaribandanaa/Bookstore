<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('front/validate_email');
	}

	public function getemail()
	{
		$this->load->model('front/email_model');
		$id=$this->input->get('id');
		$customer_email=$this->email_model->get_email($id);
		$token=$this->email_model->get_token($id);
		if($customer_email){
			$this->load->library('email');
			$config = array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'interfacebookstore@gmail.com',
			  'smtp_pass' => 'Interfacebookstore1',
			  'mailtype'  => 'html',
		    'charset'   => 'utf-8'
			);

		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");

		$htmlContent = '<h1>Validation Code</h1>';
		$htmlContent .= '<p>Your code is: </p>'.$token;
		$htmlContent .= '<p>Click <a href="http://localhost/interface-bookstore/front/email_controller/verifyemail">here</a> to enter your validation code.</p>';
		$this->email->to($customer_email);
		$this->email->from('interfacebookstore@gmail.com','Interface Book Store');
		$this->email->subject('Please Validate Your Email');
		$this->email->message($htmlContent);

		//Send email
		$this->load->library('encrypt');
		$this->email->send();
		}else{
			echo"error";
		}
	}

	public function verifyemail()
	{
		$this->load->view('front/verify_email');
	}

	public function validatetoken()
	{
		$this->load->model('front/email_model');
		$id=$this->session->userdata('id');
		$token_entered = $this->input->post('token');
		$token_existing = $this->email_model->get_token($id);
		if($token_existing == $token_entered){
			redirect('front/email_controller/validatedemail/','refresh');
		}else{
			echo "error";
		}
	}

	public function validatedemail()
	{
		$this->load->model('front/email_model');
		$id=$this->session->userdata('id');
		$status_changed = $this->email_model->change_status($id);
		$this->load->view('front/email_validated');
		
	}

}

/* End of file email_controller.php */
/* Location: ./application/controllers/front/email_controller.php */