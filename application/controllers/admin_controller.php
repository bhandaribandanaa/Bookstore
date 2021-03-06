<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin_controller extends CI_Controller{
	
	public function index(){
		// $this->load->view('admin_view');
		$data['records']=$this->viewuser();
		$this->load->view('admintable_view',$data);
		// $this->load->view('search_view',$data);
		// $this->load->view('',$data);
		// $data['results']=$this->search();
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('captcha','captcha','trim|required');
 
    if($this->form_validation->run()===FALSE)
    {
      $this->load->view('admin_view');
    }
    else
    {
      echo 'passed';
    }
		 }
	public function adduser(){
		$this->load->model('admin_model');
		$this->admin_model->insert_user();
		$data=$this->load->view('admin_view');
		if($data){
			redirect('http://localhost/interface-bookstore/index.php/admin_controller','refresh');
		}else{
			echo"error";
		}
	}
	public function viewuser(){
		$this->load->model('admin_model');
		$data=$this->admin_model->view_user();
		return $data;
		}
		
	public function deleteuser(){
		$this->load->model('admin_model');
		$id=$this->input->get('id');
		if($this->admin_model->delete_user($id)){
			redirect(site_url('admin_controller'),'refresh');
		}else{
			echo "not deleted";
		}
	}
	public function edituser(){
		$this->load->model('admin_model');
		$id=$this->input->get('id');
		$this->admin_model->edit_user($id);
			
		}
		//$data['records']=$this->admin_model->edit_user($id);
		//$this->load->view('adminedit_view',$data);
	
	public function updateuser()
	{
		$this->load->model('admin_model');
		if($this->admin_model->update_user()){
			redirect(site_url('admin_controller'),'refresh');
		}else{
			echo "not updated";
		}
}
  public function search()
    {
    		$this->load->model('admin_model');
        // Retrieve the posted search term.
        $search_term = $this->input->post('search');

        // Use a model to retrieve the results.
        $data['results'] = $this->admin_model->get_results($search_term);

        // Pass the results to the view.
        $this->load->view('search_view',$data);
    }
    public function recaptcha($str='')
  {
  	$google_url="https://www.google.com/recaptcha/api/siteverify";
    $secret='6LeHBWMUAAAAAEu4dB5OzZxgEA9-2sMULeNf7-Ej';
    $ip=$_SERVER['REMOTE_ADDR'];
    $url=$google_url."?secret=".$secret."&response=".$str."&remoteip=".$ip;
    // $curl = curl_init();
    // curl_setopt($curl, CURLOPT_URL, $url);
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    // $res = curl_exec($curl);
    // curl_close($curl);
    $data= json_decode($url);

    if(isset($data->success)&&$data->success="true")
    {
      echo "success";
    }
    else
    {
    	echo "please fill captcha";
      // $this->form_validation->set_message('recaptcha', 'The reCAPTCHA field is telling me that you are a robot. Shall we give it another try?');
      // return FALSE;
    }
  }
}