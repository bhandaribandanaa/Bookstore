<?php if(!defined('BASEPATH')) exit('No direct script access allowed ');
class Book_detail extends CI_Controller{
	public function index(){
		$this->load->model('admin/category_model');
		$this->load->model('admin/subcategory_model');
		$data['category'] = $this->category_model->view_bookcategory();
		$data['subcategory'] = $this->subcategory_model->view_bookcategory();
		$this->load->view('admin/add_bookdetail', $data);
	}

	 function adddetail()
	{
		$filename = $this->upload_file();
		$this->load->model('admin/bookdetail_model');
		$this->bookdetail_model->insert_detail($filename);
		$data=$this->load->view('admin/view_bookdetail');
		if($data){
			redirect(site_url('admin/book_detail/viewdetail'),'refresh');
		}else{
			echo"error";
		}
	}
	 function viewdetail(){
		$this->load->model('admin/bookdetail_model');
		$data['records'] = $this->bookdetail_model->view_detail();
		$this->load->view('admin/view_bookdetail',$data);
	}

	public function deletedetail()
	{
		$this->load->model('admin/bookdetail_model');
		$book_id=$this->input->get('book_id');
		if($this->bookdetail_model->delete_detail($book_id)){
			redirect(site_url('admin/book_detail/viewdetail'),'refresh');
		}else{
			echo "not deleted";
		}
	}

	public function editdetail()
	{
		$this->load->model('admin/bookdetail_model');
		$book_id=$this->input->get('book_id');
		$data=$this->bookdetail_model->edit_detail($book_id);
		$this->load->model('admin/category_model');
		$this->load->model('admin/subcategory_model');
		$data['category'] = $this->category_model->view_bookcategory();
		$data['subcategory'] = $this->subcategory_model->view_bookcategory();
		$this->load->view('admin/edit_bookdetail',$data);
	}


	public function updatedetail()
	{
		$filename = $this->upload_file();
		$this->load->model('admin/bookdetail_model');
		if($this->bookdetail_model->update_detail($filename)){
			redirect(site_url('admin/book_detail/viewdetail'),'refresh');
		}else{
			echo "not updated";
		}
	}

	public function upload_file()
        {
                $config['upload_path']          = './uploads/bookdetail/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);
                //var_dump($_FILES);
                //exit();

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