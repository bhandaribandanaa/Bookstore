<?php 
	
	if(!function_exists('is_userverified'))
{
	function is_userverified()
	{
		$CI =& get_instance();

		$cus_id = $CI->session->userdata('id');
		// $CI->load->database();

		$CI->db->select('*');
		$CI->db->where('id',$cus_id);
		$query = $CI->db->get('customer');
		$st = $query->row();
		// print_r($status);
		// die();
		if($st->status==1){
			return TRUE;
		}
		
	}

}
?>