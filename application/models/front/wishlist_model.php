<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist_model extends CI_Model {

	
public function save($cus_id)
{
    $book_id = $this->input->post('book_id');
    $this->db->where('book_id',$book_id);
    $this->db->where('cus_id',$cus_id);
    $query = $this->db->get('wishlist');
    // echo $query->num_rows() ;
    // die();
    if ($query->num_rows() > 0){
        echo "Already in wishlist";
    }else{
      $data = array(
        'cus_id' => $cus_id,
        'status' => 0,
        'book_id' => $book_id
    );
    $result = $this->db->insert('wishlist', $data);
    if($result == 1)
        return 1;
    return 2;
    }

    

    }
	

public function delete()
{
	# code...
}
}

/* End of file wishlist_model.php */
/* Location: ./application/models/front/wishlist_model.php */