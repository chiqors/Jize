<?php
//title name page
$title = "Orders";

$orders = $mysql->query("SELECT A.*, SUM(B.total_price) AS total_price, IF(A.order_expire < CURRENT_DATE(), true, false) AS is_expired FROM orders AS A INNER JOIN order_items AS B ON B.order_id = A.id WHERE user_id = ".$_SESSION['id_user']);
