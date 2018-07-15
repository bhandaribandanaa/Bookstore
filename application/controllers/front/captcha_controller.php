<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha_controller extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('name','Name','trim|required');
 
    if($this->form_validation->run()===FALSE)
    {
      $this->load->view('front/captcha');
    }
    else
    {
      echo 'passed';
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

/* End of file captcha_controller.php */
/* Location: ./application/controllers/front/captcha_controller.php */