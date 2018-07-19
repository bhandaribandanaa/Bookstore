<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class search_model extends CI_Model {

        public function __construct()
        {
        	parent::__construct();
        	//Do your magic here
        }
         public function get_results($search_term='default') {
        // Use the Active Record class for safer queries.
        $this->db->from('book_detail');
        $this->db->like('book_title',$search_term);
        $this->db->or_like('book_author',$search_term);
        $this->db->or_like('book_publisher',$search_term);
        $this->db->or_like('isbn',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result();
    }
}