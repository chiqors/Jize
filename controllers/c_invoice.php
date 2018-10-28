<?php

is_logedin();

$id = $_GET['id'];

if($id == "") {
    header("Location: {$fn->site_url('/orders')}");
}

$invoice = $mysql->query("SELECT * FROM orders WHERE user_id = ".$_SESSION['id_user']." AND id = $id");
$invoice = $invoice->fetch_object();

$user = $mysql->query("SELECT A.*, B.address, B.postal_code, B.phone FROM users AS A LEFT JOIN user_details AS B ON B.user_id = A.id WHERE A.id = $invoice->user_id");
$user = $user->fetch_object();

$invoiceItems = $mysql->query("SELECT A.*, B.title FROM order_items AS A INNER JOIN products AS B ON B.id = A.product_id WHERE A.order_id = $invoice->id");
