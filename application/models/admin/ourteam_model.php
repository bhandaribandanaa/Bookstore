<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ourteam_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        public function insert_ourteam($filename){
            $data['name']= $this->input->post('name');
            $data['description']= $this->input->post('description');
            $data['image']= $filename;
            $data['email']= $this->input->post('email');
            $data['facebook']= $this->input->post('facebook');
            return $this->db->insert('our_team',$data);
        }
        public function view_ourteam(){
            $query = $this->db->get("our_team");
            return $query->result();
        }
        public function delete_ourteam($id){
            $this->db->where('id',$id);
            $this->db->delete('our_team');
            return true;
        }
        public function edit_ourteam($id){ 
             $this->db->where('id',$id);
             $query=$this->db->get('our_team');
             $data['records']=$query->row();
             return $data;
        }

        public function update_ourteam($filename){
            $id=$this->input->post('id');
            $data['name']= $this->input->post('name');
            $data['description']= $this->input->post('description');
            $data['image']= $filename;
            $data['email']= $this->input->post('email');
            $data['facebook']= $this->input->post('facebook');
            $this->db->where('id',$id);
            return $this->db->update('our_team', $data);
        }  
    }
?>