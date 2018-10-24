<?php
    //Configurations
    include '../../configs/database.php';
    include '../../configs/libraries.php';

    $id_product = $_GET['id'];

    $reg = "DELETE FROM products WHERE id = $id_product";
    $query = mysqli_query($mysql,$reg);
    if ($query) {
        $_SESSION['deleteproduct_msg'] = "Data produk sukses dihapuskan";
        header('Location:'. site_url(""));
    } else {
        $_SESSION['deleteproduct_msg'] = "Data produk tidak bisa dihapuskan";
        header('Location:'. site_url(""));
    }