<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class rating_controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index(){
		$this->load->view('front/rating_view');
    }
    public function insertrate(){
    	$this->load->model('front/rating_model');
		$this->rating_model->insert_rate();
    	
    }
    // public function getbybook(){
    // $this->load->model('rating_model');
    // $this->rating_model->get_reviewbybook();	
    // }
	

	
}
		
		



