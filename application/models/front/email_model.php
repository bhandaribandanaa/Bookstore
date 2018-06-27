<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_Model {

	public function get_email($id)
	{

		$this->db->select('email');
		$this->db->from('customer');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$result = $query->row();
		return $result->email;
	}

	public function get_token($id)
	{
		$this->db->select('token');
		$this->db->from('customer');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$result = $query->row();
		return $result->token;
	}

	public function change_status($id)
	{
		$status = 1;
		$this->db->set('status', $status);
		$this->db->where('id', $id);
		$this->db->update('customer');
	}

}

/* End of file email.php */
/* Location: ./application/models/front/email.php */