<?php
//title name page
$title = "Order Detail";
$id = $_GET['id'];

if($id == "") {
    header("Location: {$fn->site_url('/orders')}");
}

$order = $mysql->query("SELECT A.*, SUM(B.total_price) AS total_price, IF(A.order_expire < CURRENT_DATE(), true, false) AS is_expired FROM orders AS A INNER JOIN order_items AS B ON B.order_id = A.id WHERE A.id = $id AND user_id = ".$_SESSION['id_user']);
$order = $order->fetch_object();
