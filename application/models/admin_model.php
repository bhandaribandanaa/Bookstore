<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin_model extends CI_Model {

        public function __construct()
        {
        	parent::__construct();
        	//Do your magic here
        }
        public function insert_user(){
        	$data['username']= $this->input->post('name');
			$data['password']= $this->input->post('password');
 			return $this->db->insert('admin',$data);
        }
        public function view_user(){
            $data=$this->db->get('admin');
            return $data->result();
            
        }
        public function delete_user($id){
        $this->db->where('id',$id);
        $this->db->delete('admin');
        return true;
        }
        public function edit_user($id){ 
             $query=$this->db->get_where("admin",array('id' => $id));
            
            return $query->row();
        }

        public function update_user(){
            $id=$this->input->post('id');
            $data['username'] =$this->input->post('username');
            //$data['password'] = $this->input->post('password');
            $this->db->where('id',$id);
            return $this->db->update('admin', $data);
        }  
        public function edit_pass($id){ 
             $query=$this->db->get_where("admin",array('id' => $id));
            $data['records']=$query->row();
            return $data;
        }

        public function update_pass(){
            $id=$this->input->post('id');
            //$data['username'] =$this->input->post('username');
            $password= md5($this->input->post('password'));
            $data['password']=$password;
            $this->db->where('id',$id);
            return $this->db->update('admin', $data);
        }
        public function get_results($search_term='default')
    {
        // Use the Active Record class for safer queries.
        // $this->db->select('*');
        $this->db->from('admin');
        $this->db->like('username',$search_term);
        // $this->db->or_like('password',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result();
    }
    }
?>