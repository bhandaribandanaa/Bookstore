<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class search_controller extends CI_Controller{
	
	public function index(){
		// $this->load->view('admin_view');

	}
 public function search(){
    	$this->load->model('front/search_model');
        $this->load->model('front/category_model');
        // Retrieve the posted search term.
            $search_term = $this->input->post('search');
            // echo $search_term;
            // die();
        // Use a model to retrieve the results.
        $data['results'] = $this->search_model->get_results($search_term);
        $data['categories'] = $this->category_model->view_bookcategory();
        $data['subcategories'] = $this->category_model->view_booksubcategory();
        // Pass the results to the view.
        $this->load->view('front/search_view',$data);
    }
}