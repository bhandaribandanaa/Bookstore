<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rating_model extends CI_Model {

        public function __construct()
        {
        	parent::__construct();
        	//Do your magic here
        }
        public function insert_rate(){
             $data['rate']=  $this->input->post('score');
             $data['title']= "hi";
             $data['book_id']= 1 ;
             $data['customer_id']= 1;
             return $this->db->insert('review',$data);
        	
        }
        public function get_reviewbybook(){
            
        }
 
    }
         