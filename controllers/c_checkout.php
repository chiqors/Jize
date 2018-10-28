<?php
//title name page
$title = "Checkout";

is_logedin();

if(!isset($_SESSION['cart'])) {
	header("location: {$fn->site_url()}");
}

if(is_array($_SESSION['cart'])) {
	if(count($_SESSION['cart']) < 1) {
		header("location: {$fn->site_url()}");
	}
	$idProduct = array_keys($_SESSION['cart']);
} else {
	$idProduct = [];
}

$carts = "SELECT A.id, A.title, A.price, B.image_path, IF(A.discount > 0, (A.price - A.price * (A.discount/100)), null) AS discount_price FROM products AS A INNER JOIN product_images AS B ON B.product_id = A.id WHERE A.id in (".implode(',', $idProduct).") GROUP BY A.id ORDER BY A.id";
$carts = $mysql->query($carts);

$userId = mysqli_real_escape_string($mysql, $_SESSION['id_user']);
$user = $mysql->query("SELECT A.*, B.address, B.phone, B.postal_code FROM users AS A LEFT JOIN user_details AS B ON B.user_id = A.id WHERE A.id = $userId");
$user = $user->fetch_object();
