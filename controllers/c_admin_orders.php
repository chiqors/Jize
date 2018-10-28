<?php

$title = "Admin Orders";

$orders = $mysql->query("SELECT A.*, SUM(B.total_price) AS total_price, IF(A.order_expire < CURRENT_DATE(), true, false) AS is_expired FROM orders AS A INNER JOIN order_items AS B ON B.order_id = A.id GROUP BY A.id");

if(isset($_GET['received'])) {
    $orderId = mysqli_real_escape_string($mysql, $_GET['received']);
    $order = $mysql->query("SELECT * FROM orders WHERE status = 'sending' AND id = $orderId");

    if(mysqli_num_rows($order) > 0) {
        $mysql->query("UPDATE orders SET status = 'sent' WHERE id = $orderId");
    }

    header("location: ".site_url("orders"));
}