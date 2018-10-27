<?php

//title name page
$title = "Carts";

if(!isset($_SESSION['cart'])) {
	header("location: {$fn->site_url()}");
}

if(is_array($_SESSION['cart'])) {
	$idProduct = array_keys($_SESSION['cart']);
} else {
	$idProduct = [];
}

$carts = "SELECT A.id, A.title, A.price, B.image_path, IF(A.discount > 0, (A.price - A.price * (A.discount/100)), null) AS discount_price FROM products AS A INNER JOIN product_images AS B ON B.product_id = A.id WHERE A.id in (".implode(',', $idProduct).") GROUP BY A.id ORDER BY A.id";
$carts = $mysql->query($carts);

if(isset($_POST['update'])) {
	if(count($_SESSION['cart']) > 0) {
		foreach($_POST['qty'] as $idx => $value) {
			if($value < 1) {
				unset($_SESSION['cart'][$idx]);
			} else {
				$_SESSION['cart'][$idx] = array("quantity" => $value);
			}
		}
	}
	header("location: {$fn->site_url('carts')}");
}

if(isset($_GET['deleteCart'])) {
	if(array_key_exists($_GET['deleteCart'], $_SESSION['cart'])) {
		unset($_SESSION['cart'][$_GET['deleteCart']]);
	}
	header("location: {$fn->site_url('carts')}");
}
