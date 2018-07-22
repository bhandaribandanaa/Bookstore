<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customerview_model extends CI_Model {

	public function view_customerprofile($id){
            $this->db->where('id',$id);
        	$query=$this->db->get('customer');
        	return $query->row_array();
        }


        public function view_review($id){
        	/*
	        	$this->db->select('*');
	        	$this->db->from('review_cus rc');
	        	$this->db->join('review r', 'r.re_id = rc.re_id');
	        	$this->db->where('rc.cus_id', $id);
	        	$q = $this->db->get();
	        	if($q->num_rows() > 0)
	        	{
	        		print_r($q->result());
	        		exit();
	        	}
			*/
	        $this->db->select('*');
	        $this->db->from('book_detail b');
	        $this->db->join('review re', 're.book_id = b.book_id');
            $this->db->where('re.customer_id',$id);
            //$data['rc_id']= $query->row()->rc_id;
            // $data= $query->result()->book_id;
            // $query = $this->db->get('table_name');
            $query= $this->db->get();

    		foreach($query->result() as $row)
    		{
        		$array[] = $row; // add each user id to the array
    		}

    		return $array;
            //return $data;
            // $query = $this->db->get_where('review',array('re_id' => $data['re_id']));
            // $data =$query->row_array();
            // $query = $this->db->get_where('book_detail',array('book_id' => $data['book_id']));
            // $data['book_title'] = $query->row()->book_title;
            // return $data;


        } 

        public function view_wishlist($cus_id)
        {
            // echo $cus_id;
            // die();
            $this->db->select('*');
            $this->db->from('customer c');
            $this->db->join('wishlist w', 'c.id = w.cus_id');
            $this->db->where('w.cus_id', $cus_id);
            $query= $this->db->get();

            foreach($query->result() as $row)
            {
                $array[] = $row->book_id;
                // $id = strval($row);
                // $book[] = $id;
                // add each user id to the array
            }
            // die();
           //$array = implode(',', $array);

            $this->db->select('*');
            $this->db->from('book_detail');
            $this->db->where_in('book_id', $array);
            $query1 = $this->db->get();

            return $query1->result();




        }

        public function view_orders($id)
        {
            $array[]= 0 ;
           $this->db->select('*');
            $this->db->from('book_detail b');
            $this->db->join('book_order or', 'or.book_id = b.book_id');
            $this->db->where('or.cus_id',$id);
            $query= $this->db->get();

            foreach($query->result() as $row)
            {
                $array[] = $row; // add each user id to the array
            }
            // print_r($array);
            // die();
            return $array;
        }

}