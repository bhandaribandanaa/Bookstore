<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function insert_user($filename, $token){
            $data['token'] = $token;
			$data['fullname']= $this->input->post('fullname');
            $data['address']= $this->input->post('address');
            $data['phone']= $this->input->post('phone');
            $data['username']= $this->input->post('username');
            $data['password']= md5($this->input->post('password'));
            $data['status']= "Not Verified";
            $data['email']= $this->input->post('email');
            $data['resetpassword']= 0;
            $data['image']= $filename;
            return $this->db->insert('customer',$data);
        }

        public function validate_user()
    {
        $username = trim($this->input->post('username'));
        $password = trim($this->input->post('password'));
        $password = md5($password);
        $this->db->select('*');
        $this->db->from('customer');
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
    public function edit_user($id){
            $query=$this->db->get_where("customer",array('id' => $id));
            $data['records']=$query->row();
            return $data;
        }

        public function change_user($filename){
            $id=$this->input->post('id');
            $data['fullname']= $this->input->post('fullname');
            $data['address']= $this->input->post('address');
            $data['phone']= $this->input->post('phone');
            $data['username']= $this->input->post('username');
            $data['password']= $this->input->post('password');
            $data['status']= "Not Verified";
            $data['email']= $this->input->post('email');
            $data['status']= $this->input->post('status');
            $data['token']= $this->input->post('token');
            $data['resetpassword']= $this->input->post('resetpassword');
            $data['image']= $filename;
            $this->db->where('id',$id);
            return $this->db->update('customer', $data);
        }
         public function edit_userpass($id){
            $query=$this->db->get_where("customer",array('id' => $id));
            $data['records']=$query->row();
            return $data;
        }
        public function change_userpass($filename){
            $id=$this->input->post('id');
            $data['fullname']= $this->input->post('fullname');
            $data['address']= $this->input->post('address');
            $data['phone']= $this->input->post('phone');
            $data['username']= $this->input->post('username');
            $data['password']= md5($this->input->post('password'));
            $data['status']= "Not Verified";
            $data['email']= $this->input->post('email');
            $data['status']= $this->input->post('status');
            $data['token']= $this->input->post('token');
            $data['resetpassword']= $this->input->post('resetpassword');
            $data['image']= $filename;
            $this->db->where('id',$id);
            return $this->db->update('customer', $data);
        } 

}

/* End of file customer.php */
/* Location: ./application/models/front/customer.php */