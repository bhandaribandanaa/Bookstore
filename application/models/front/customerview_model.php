<? <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customerview_model extends CI_Model {

	public function view_customerprofile($id){
            $this->db->where('id',$id);
        	$query=$this->db->get('customer');
        	return $query->row_array();
        }
}