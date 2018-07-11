<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookdetail_model extends CI_Model {

	public function get_book($id)
	{
		$this->db->where('book_id',$id);
        $query=$this->db->get('book_detail');
        return $query->row_array();
	}

	public function get_reviewbybook($id)
	{
		$this->db->where('book_id',$id);
        $query=$this->db->get('review');
        return $query->result();
	}

	public function get_customername($id)
	{
		$this->db->where('book_id',$id);
		$customer_id = $this->db->get('review')->row()->customer_id;
		$this->db->where('id', $customer_id);
		$query=$this->db->get('customer');
        return $query->row_array();
	}
}

/* End of file bookdetail_model.php */
/* Location: ./application/models/front/bookdetail_model.php */