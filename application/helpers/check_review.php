<?php 
if(!function_exists('check_review'))
{
	function check_review()
	{
		$CI =& get_instance();
		$this->load->model('front/review_model');
		$id = 
		$data = $this->review_model->check_review($CI->session->userdata('id'));
		if($CI->session->userdata('id') != NULL && $CI->session->userdata('admin_logged_in') === TRUE)
		{
			return TRUE;
		}
	}

}
?>