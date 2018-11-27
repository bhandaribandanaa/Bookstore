<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class topseller_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        public function view_topseller(){
            $query= "SELECT b.*, SUM(o.quantity) AS quantity,o.status FROM book_order o JOIN book_detail b ON o.book_id = b.book_id WHERE o.status='Delivered' GROUP BY o.book_id ORDER BY quantity DESC";            
            $result = $this->db->query($query);
            return $result->result();
        }

        public function view_finishingbooks(){
            $query= "SELECT * FROM book_detail where book_stock <= 10 ORDER BY book_stock";            
            $result = $this->db->query($query);
            return $result->result();
        }
    }
