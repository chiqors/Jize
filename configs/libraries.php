<?php
	//Alternatif
	//define('BASE_URL','http://localhost/ecommerce');

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
?>