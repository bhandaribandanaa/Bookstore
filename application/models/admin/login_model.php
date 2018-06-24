<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function validate_user()
	{
		$username = trim($this->input->post('username'));
		$password = trim($this->input->post('password'));
		$password = md5($password);
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get();
		if( $result->num_rows() == 1)
		{
			return $result->row();
		}
		else
		{
			return FALSE;
		}
	}

}

/* End of file login_model.php */
/* Location: ./application/models/admin/login_model.php */