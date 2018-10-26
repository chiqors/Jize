<?php
	session_start();
	/*Alternatif Base URL
	define('BASE_URL','http://localhost/ecommerce');*/

	//Assets Routing
    function base_url() {
		return "http://localhost/ecommerce";
	}
	//Pages Routing (index.php)
	function load_url() {
        return "/ecommerce";
    }
	//Load Page Function
	function site_url($path = '') {
		if(is_array($path)) {
			return base_url().'/'.(implode('/', $path));
		} else if(is_string($path)) {
			return base_url().'/'.ltrim($path,'/');
		}
		return base_url();
	}

	// Rupiah Currency Shorter (rb,jt,m,tr)
	function currencyShort($num) {
		if($num>1000) {
			  $x = round($num);
			  $x_number_format = number_format($x);
			  $x_array = explode(',', $x_number_format);
			  $x_parts = array('rb', 'jt', 'm', 'tr');
			  $x_count_parts = count($x_array) - 1;
			  $x_display = $x;
			  $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
			  $x_display .= $x_parts[$x_count_parts - 1];

			  return $x_display;
		}

		return $num;
	}

	//Call functions
	class Fn
	{
		function __call($name, $args)
		{
			if(function_exists($name)) {
				return call_user_func_array($name, $args);
			}
		}
	}
	$fn = new Fn();
?>