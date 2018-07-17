<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model {

	public function insert_review($cus_id)
	{
			 $data['rate']=  $this->input->post('score');
             $data['title']= $this->input->post('title');
             $data['comment'] = $this->input->post('comment');
             $data['book_id']= $this->input->post('book_id') ;
             $data['customer_id']= $cus_id;
             return $this->db->insert('review',$data);
	}

	public function edit_review($review_id)
	{
		$this->db->select('*');
		$this->db->where('review_id',$review_id);
		$query = $this->db->get('review');
		return $query->row_array();
	}

	public function delete_review($review_id)
	{
		$this->db->where('review_id',$review_id);
		$this->db->delete('review');
		return true;
	}

}

/* End of file review_model.php */
/* Location: ./application/models/front/review_model.php */