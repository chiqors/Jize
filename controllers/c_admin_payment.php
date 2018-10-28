<?php

is_logedin();

$title = "Konfirmasi Bukti Pembayaran";
$id = $_GET['id'];

if($id == "") {
    header("Location: {$fn->site_url('dashboard/orders')}");
}

$hscripts ='<link rel="stylesheet" href="'.site_url('/assets/plugins/fancybox/jquery.fancybox.min.css').'">';
$fscripts = '<script src="'.site_url('/assets/plugins/fancybox/jquery.fancybox.min.js').'"></script><script>$(\'[data-fancybox]\').fancybox();</script>';

$order = $mysql->query("SELECT * FROM orders WHERE id = $id AND status = 'unpaid' OR status = 'verification'");

if(mysqli_num_rows($order) < 1) {
    header("Location: ".site_url('dashboard/orders'));
}

$order = $order->fetch_object();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mysql->query("UPDATE orders SET status = 'sending' WHERE id = $order->id");
    $_SESSION['order_msg'] = "Order (#$order->id) is sucessfully changed status to sending";
    header("location: ".site_url('dashboard/order/detail?id='.$order->id));
}

?>