<?php

if(!function_exists('is_adminlogin'))
{
	function is_adminlogin()
	{
		$CI =& get_instance();

		if($CI->session->userdata('admin_logged_in') != NULL && $CI->session->userdata('admin_logged_in') === TRUE)
		{
			return TRUE;
		}
	}

}

if(!function_exists('is_userlogin'))
{
	function is_userlogin()
	{
		$CI =& get_instance();

		if($CI->session->userdata('user_logged_in') != NULL && $CI->session->userdata('user_logged_in') === TRUE)
		{
			return TRUE;
		}
	}
	
}

if(!function_exists('test'))
{
	function test()
	{
		$CI =& get_instance();

		$CI->load->database();
		$CI->db->get('users');

		return TRUE;
	}
}