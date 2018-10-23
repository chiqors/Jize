<?php
	session_start();
	/*Alternatif Base URL
	define('BASE_URL','http://localhost/ecommerce');*/

	//Assets Routing
    function base_url($path = false) {
    	$assets = "";
    	if($path) $assets = $path;
		return "http://localhost/ecommerce".$assets;
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
?>