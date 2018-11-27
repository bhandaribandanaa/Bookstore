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
		$this->db->select('r.*, c.fullname');
		$this->db->join('customer c','c.id = r.customer_id');
		$this->db->where('r.book_id',$id);
        $query=$this->db->get('review r');
        return $query->result();
	}
	public function average_rate($id){
		$data = $this->db->query("SELECT ROUND(AVG(rate)) as rate FROM `review` WHERE book_id =".$id);

		$query = $data->row()->rate;
		return $query;


}
}

/* End of file bookdetail_model.php */
/* Location: ./application/models/front/bookdetail_model.php */