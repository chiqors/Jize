<?php

is_logedin();

//title name page
$title = "Admin Order Detail";
$id = $_GET['id'];

if($id == "") {
    header("Location: {$fn->site_url('dashboard/orders')}");
}

$hscripts ='<link rel="stylesheet" href="'.site_url('/assets/plugins/fancybox/jquery.fancybox.min.css').'">';
$fscripts = '<script src="'.site_url('/assets/plugins/fancybox/jquery.fancybox.min.js').'"></script><script>$(\'[data-fancybox]\').fancybox();</script>';

$order = $mysql->query("SELECT A.*, SUM(B.total_price) AS total_price, IF(A.order_expire < CURRENT_DATE(), true, false) AS is_expired FROM orders AS A INNER JOIN order_items AS B ON B.order_id = A.id WHERE A.id = $id");
$order = $order->fetch_object();
