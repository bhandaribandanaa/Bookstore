<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

public function getallorders()
{
	$query = "SELECT c.*,b.*,o.* FROM customer c JOIN book_order o ON o.cus_id = c.id JOIN book_detail b ON o.book_id = b.book_id" ;
	$result = $this->db->query($query);
	return $result->result();
}

public function edit_status($order_id)
{
	$this->db->where('or_id', $order_id);
	
	$query = $this->db->get('book_order');
	$data['order'] = $query->row();
	return $data;
}

public function update_status()
	{
		$order_id = $this->input->post('order_id');
		$data = array(
        'status' => $this->input->post('status')
		);
		$this->db->where('or_id', $order_id);
		return $this->db->update('book_order', $data);
	}	

}

/* End of file order_model.php */
/* Location: ./application/models/admin/order_model.php */