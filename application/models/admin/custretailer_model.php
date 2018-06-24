<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class custretailer_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        public function insert_user($filename, $token){

            $data['token'] = $token;
            $data['fullname']= $this->input->post('fullname');
            $data['address']= $this->input->post('address');
            $data['phone']= $this->input->post('phone');
            $data['username']= $this->input->post('username');
            $data['password']= $this->input->post('password');
            $data['status']= "Not Verified";
            $data['email']= $this->input->post('email');
            $data['resetpassword']= 0;
            $data['image']= $filename;
            return $this->db->insert('customer',$data);
        }
        public function view_user(){
            $query=$this->db->get("customer");
            return $query->result();            
        }
        public function delete_user($id){
            $this->db->where('id',$id);
            $this->db->delete('customer');
            return true;
        }
        public function edit_user($id){
            $query=$this->db->get_where("customer",array('id' => $id));
            $data['records']=$query->row();
            return $data;
        }

        public function update_user($filename){
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
    }
?>