<?php

//title name page
$title = "Carts";

// check if cart session not found
if(!isset($_SESSION['cart'])) {
	header("location: {$fn->site_url()}");
}

// check if cart session is array or not if not, set $idProduct to empty array
if(is_array($_SESSION['cart'])) {
	$idProduct = array_keys($_SESSION['cart']);
} else {
	$idProduct = [];
}

$carts = "SELECT A.id, A.title, A.price, B.image_path, IF(A.discount > 0, (A.price - A.price * (A.discount/100)), null) AS discount_price FROM products AS A INNER JOIN product_images AS B ON B.product_id = A.id WHERE A.id in (".implode(',', $idProduct).") GROUP BY A.id ORDER BY A.id";
$carts = $mysql->query($carts);

if(isset($_POST['update'])) {

	// check if cart session have item or not
	if(count($_SESSION['cart']) > 0) {
		// if have, then loop the item for update the quantity
		foreach($_POST['qty'] as $idx => $value) {
			// check if quantity from input form less than one, then delete the cart item
			if($value < 1) {
				unset($_SESSION['cart'][$idx]);
			} else {
				// update the cart quatity
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
