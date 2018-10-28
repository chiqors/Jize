<?php

include '../../configs/database.php';
include '../../configs/libraries.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUser = $_SESSION['id_user'];
    $date = date("Y-m-d H:i:s");
    $date_exp = date("Y-m-d H:i:s", strtotime("+3 Days"));
    $paymentMethod = $_POST['payment_method'];

    $order = $mysql->query("INSERT INTO orders VALUES (NULL, $idUser, '$date', '$date_exp', NULL, '$paymentMethod','',
         'unpaid')");

    $idOrder = $mysql->insert_id;

    foreach ($_SESSION['cart'] as $key => $value) {
        $product = $mysql->query("SELECT *, IF(discount > 0, (price - price * (discount/100)), null) AS discount_price FROM products WHERE id = $key");
        $product = $product->fetch_object();
        $price = $product->discount_price ? $product->discount_price : $product->price;
        $totalPrice = $price*$value['quantity'];

        $orderItem = $mysql->query("INSERT INTO order_items VALUES (NULL, $idOrder, $product->id, 'product', $price, $product->discount, $totalPrice)");
        unset($_SESSION['cart'][$key]);

    }
}
