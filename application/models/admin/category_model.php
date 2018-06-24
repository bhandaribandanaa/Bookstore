<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class category_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        public function insert_bookcategory(){
            $data['cat_title']= $this->input->post('category_title');
            return $this->db->insert('book_category',$data);
        }
        public function view_bookcategory(){
            $query=$this->db->get("book_category");
            return $query->result();
        }
         public function getbookcategory(){
            $query=$this->db->get("book_category");
            return $query->num_rows();
        }
        public function delete_bookcategory($id){
            $this->db->where('cat_id',$id);
            $this->db->delete('book_category');
            return true;
        }
        public function edit_bookcategory($id){ 
             $this->db->where('cat_id',$id);
             $query=$this->db->get('book_category');
             $data['records']=$query->row();
             return $data;
        }

        public function update_bookcategory(){
            $id=$this->input->post('id');
            $data['cat_title'] =$this->input->post('cat_title');
            $this->db->where('cat_id',$id);
            return $this->db->update('book_category', $data);
        }  

        public function ajax_subcat($cat_id)
        {
            $this->db->where('cat_id', $cat_id);
            $query = $this->db->get('book_subcategory');
            return $query->result();
        }
    }
