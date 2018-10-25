<?php
if(isset($_GET['id']) & !empty($_GET['id'])) {
	$id = $_GET['id'];
	unset($_SESSION['cart'][$id]);
	header('location:'.site_url("carts"));
}