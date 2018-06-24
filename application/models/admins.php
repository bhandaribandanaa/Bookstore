<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admins extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function insert_user(){

		//$username=$this->input->post('username');
		//$password=$this->input->post('password');

		/*$data = array(
			'username'=> $username,
			'password'=> $password
		);*/
	
		$data['username'] =$this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$data['email'] =$this->input->post('email');
		return $this->db->insert('admin',$data);
	}

	public function view_user()
	{
		$query = $this->db->get("admin");
		$data['records']=$query->result();
		$this->load->view('admin_view',$data);
	}

	public function delete_user($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('admin');
		return true;
	}

	public function edit_user($id)
	{
		$query=$this->db->get_where("admin",array('id' => $id));
		$data['records']=$query->row();
		$this->load->view('admin_edit',$data);
	}
	public function update_user()
	{
		$id=$this->input->post('id');
		$data['username'] =$this->input->post('username');
		$data['email'] =$this->input->post('email');
		$data['password'] = md5($this->input->post('password'));
		$this->db->where('id',$id);
		return $this->db->update('admin', $data);
	}
}

/* End of file Admin.php */
/* Location: ./application/models/Admin.php */