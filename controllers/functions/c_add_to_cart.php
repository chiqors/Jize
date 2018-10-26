<?php

include "../../configs/libraries.php";

if(isset($_GET) & !empty($_GET)){
	$id = $_GET['id'];
	if(isset($_GET['quant']) & !empty($_GET['quant'])) {
        $quant = $_GET['quant'];
    } else {
        $quant = 1;
    }

    if(isset($_SESSION['cart'][$id]['quantity'])){
    	$quant += $_SESSION['cart'][$id]['quantity'];
    }

	$_SESSION['cart'][$id] = array("quantity" => $quant);
	header('location:'.site_url("product/detail?id=$id"));
} else {
	header('location:'.site_url(""));
}