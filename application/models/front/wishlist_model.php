<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist_model extends CI_Model {

	
public function save($cus_id,$book_id)
{
	$this->db->select('w.*, wb.*');
	$this->db->join('wishlist_book wb', 'wb.w_id = w.w_id','left');
	$this->db->having('w.cus_id', $cus_id);
    $query = $this->db->get('wishlist w');
    // var_dump($query);
    // die();
    if ($query->num_rows() > 0) {
		$this->db->select('w.*, wb.*');
		$this->db->join('wishlist w', 'w.w_id = wb.w_id','right');
		$this->db->where('w.cus_id', $cus_id);
		$this->db->having('wb.book_id', $book_id);
	    $query_book = $this->db->get('wishlist_book wb');
	    // echo $query_book->num_rows();
	    // die();
        if($query_book->num_rows() > 0){
        	echo "book already in wishlist!";
        }else{
        	$this->db->select('w_id');
        	$this->db->where('cus_id',$cus_id);
        	$query = $this->db->get('wishlist');
        	$wishlist_id = $query->row()->w_id;
        	// echo $wishlist_id;
        	// die();
        	$wb = array(
        		'w_id' => $wishlist_id,
        		'book_id' => $book_id

        	);
        	$result1 = $this->db->insert('wishlist_book',$wb);
        	return $result1;
        }
    }
    else {
        	
        	$data  = array(
					'cus_id' => $cus_id,
					'status' => 0 
				);
        	$this->db->select('w_id');
        	$this->db->where('cus_id',$cus_id);
        	$query = $this->db->get('wishlist');
        	$wishlist_id = $query->row()->w_id;
        	// echo $wishlist_id;
        	// die();
        	$wb = array(
        		'w_id' => $wishlist_id,
        		'book_id' => $book_id

        	);
			$result['wishlist'] = $this->db->insert('wishlist',$data);
			$result['wishlist_book'] = $this->db->insert('wishlist_book',$wb);
		        return $result;
        }
    }
	

public function delete()
{
	# code...
}
}

/* End of file wishlist_model.php */
/* Location: ./application/models/front/wishlist_model.php */