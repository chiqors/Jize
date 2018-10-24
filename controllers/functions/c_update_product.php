<?php
    //Configurations
    include '../../configs/database.php';
    include '../../configs/libraries.php';

    $id_product = $_GET['id'];

    $nama = $_POST['nama_product'];
    $deskripsi = $_POST['deskripsi_product'];
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];

    $reg = "UPDATE products SET title = '$nama', slug = '', description = '$deskripsi', price = '$harga', discount = $diskon WHERE id = $id_product";
    $query = mysqli_query($mysql,$reg);
    if ($query) {
        $_SESSION['updateproduct_msg'] = "Data produk sukses diedit";
        header('Location:'. site_url(""));
    } else {
        $_SESSION['updateproduct_msg'] = "Data produk tidak bisa diedit";
        header('Location:'. site_url("product/update"));
    }