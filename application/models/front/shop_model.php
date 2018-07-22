<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop_model extends CI_Model {

	

	public function count_books()
	{
		return $this->db->count_all("book_detail");
	}

	public function book_detail($limit, $start)
	{
		$this->db->limit($limit , $start);
		// $this->db->where('book_id', $id);
		$query=  $this->db->get("book_detail");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
		// return $query->result();
	}

}

/* End of file load_books.php */
/* Location: ./application/models/front/load_books.php */