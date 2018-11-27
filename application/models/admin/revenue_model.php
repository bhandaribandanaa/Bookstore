<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class revenue_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        public function view_revenue(){
            $query = "SELECT b.*,o.* FROM book_detail b JOIN book_order o ON o.book_id = b.book_id where o.status= 'Delivered' " ;
             $result = $this->db->query($query);
             return $result->result();
        }
    }
