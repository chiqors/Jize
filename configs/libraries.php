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

	//auth check
	function is_logedin() {
		if(!isset($_SESSION['id_user'])) {
			header("Location: ".site_url('/login'));
		}
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

	// Rupiah Format Function
	function rupiah($angka){
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
		return $hasil_rupiah;
	}

	function rmvdir($dir) {
		if (is_dir($dir)) {
			$objects = scandir($dir);
		  	foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
			  		if (filetype($dir."/".$object) == "dir") {
				 		rrmdir($dir."/".$object);
					} else {
						unlink($dir."/".$object);
					}
				}
		  	}
		  	reset($objects);
		  	rmdir($dir);
		}
	}

	// Count cart
	function totalCart()
	{
		if(isset($_SESSION['cart'])) {
			$count = 0;
			foreach ($_SESSION['cart'] as $key => $value) {
				$count += $value['quantity'];
			}
			return $count;
		}
		return 0;
	}

	function totalOrders()
	{
		global $mysql;
		if(isset($_SESSION['id_user'])) {
			$orders = $mysql->query("SELECT id FROM orders WHERE user_id = ".$_SESSION['id_user']);
			return mysqli_num_rows($orders);
		}
		return 0;
	}

	//initialize cart
	if(!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
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
