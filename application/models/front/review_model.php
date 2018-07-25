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

             $this->db->select('*');
             $this->db->where('book_id', $this->input->post('book_id')
             );
             $this->db->having('customer_id',$cus_id);
             $query = $this->db->get('review');
             // print_r($query);
             // die();
             if($query->num_rows()==0){
             	return $this->db->insert('review',$data);
             }
             return "error";
	}

	public function edit_review($review_id)
	{
		$this->db->select('*');
		$this->db->where('review_id',$review_id);
		$query = $this->db->get('review');
		$data['review'] = $query->row();
		return $data;
	}

	public function update_review($review_id,$cus_id,$book_id)
	{
			// $data['rate']=  $this->input->post('score');
             $data['title']= $this->input->post('title');
             $data['comment'] = $this->input->post('comment');
             $data['book_id']= $book_id ;
             $data['rate'] = $this->input->post('score');
             $data['customer_id']= $cus_id;
             $this->db->where('review_id',$review_id);
             return $this->db->update('review', $data);
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