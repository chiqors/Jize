<?php
if(isset($_GET) & !empty($_GET)){
	$id = $_GET['id'];
	if(isset($_GET['quant']) & !empty($_GET['quant'])) {
        $quant = $_GET['quant'];
    } else {
        $quant = 1;
    }
	$_SESSION['cart'][$id] = array("quantity" => $quant);
	header('location:'.site_url("carts"));
} else {
	header('location:'.site_url(""));
}