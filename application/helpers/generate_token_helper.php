<?php 

if(!function_exists('generate_token'))
{
	function generate_token()
	{
		$t = mt_rand(1000,100000);
		return $t;
	}

}
?>