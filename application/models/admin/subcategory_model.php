<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subcategory_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        public function getcategory(){
        	$query= $this->db->get('book_category');
        	return $query->result();
        }
        public function getcategoryname($cat_id)
		{
			$query=$this->db->get_where("book_subcategory",array('subcat_id' => $cat_id));
			$data=$query->row('subcat_title');
			return $data;
		}

        public function insert_bookcategory(){
            $data['category']= $this->input->post('category');
            $query=$this->db->get_where('book_category',array('cat_title' => $data['category']));
            $data['cat_id']= $query->row()->cat_id;
            $data['subcat_title']= $this->input->post('subcat_title');
            return $this->db->insert('book_subcategory',$data);
        }
        public function view_bookcategory(){
            $query=$this->db->get("book_subcategory");
            return $query->result();
        }
        public function delete_bookcategory($id){
            $this->db->where('subcat_id',$id);
            $this->db->delete('book_subcategory');
            return true;
        }
        public function edit_bookcategory($id){ 
            $query=$this->db->get_where('book_subcategory',array('subcat_id' => $id));

            $data=$query->row();
            return $data;
        }

        public function update_bookcategory(){
            $id=$this->input->post('subcat_id');
            $data['category']= $this->input->post('category');
            $query=$this->db->get_where('book_category',array('cat_title' => $data['category']));
            $data['cat_id']= $query->row()->cat_id;
            $data['subcat_title'] =$this->input->post('subcat_title');
            $this->db->where('subcat_id',$id);
            return $this->db->update('book_subcategory', $data);
        }  
    }
  