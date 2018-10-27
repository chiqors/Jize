<?php
$title = "Unggah Bukti Pembayaran";
$id = $_GET['id'];

if($id == "") {
    header("Location: {$fn->site_url('/orders')}");
}

$order = $mysql->query("SELECT * FROM orders WHERE id = $id");
$order = $order->fetch_object();

?>
