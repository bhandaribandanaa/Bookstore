<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist_model extends CI_Model {

	
public function save()
{
	$data  = array(
		'cus_id' => 14,
		'status' => 1 
	);
			$result['wishlist']=$this->db->insert('wishlist',$data);
			// $this->db->where('cus_id',$this->input->post('cus_id'));
			// $wishlist_id = $this->db->get('w_id');
			// $wishlist_book = array(
			// 	'w_id' => $wishlist_id,
			// 	'book_id' => $this->input->post('book_id')
			// );
			// $result['wishlist_book'] = $this->db->insert('wishlist',$wishlist_book);
		        return $result;
	}
	
	
public function update()
{
	# code...
}
public function delete()
{
	# code...
}
}

/* End of file wishlist_model.php */
/* Location: ./application/models/front/wishlist_model.php */