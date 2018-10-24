<?php
    //Configurations
    include '../../configs/database.php';
    include '../../configs/libraries.php';

    $nama = $_POST['nama_product'];
    $deskripsi = $_POST['deskripsi_product'];
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];

    $reg = "INSERT INTO products VALUES('','$nama','','$deskripsi','$harga','$diskon')";
    $query = mysqli_query($mysql,$reg);
    if ($query) {
        header('Location:'. site_url(""));
    } else {
        $_SESSION['createproduct_msg'] = "Data produk tidak bisa ditambahkan";
        header('Location:'. site_url("product/create"));
    }