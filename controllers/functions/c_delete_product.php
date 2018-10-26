<?php
    //Configurations
    include '../../configs/database.php';
    include '../../configs/libraries.php';

    $id_product = $_GET['id'];

    $reg1 = "DELETE FROM products WHERE id = $id_product";
    $reg2 = "DELETE FROM product_image WHERE product_id = $id_product";
    $query = mysqli_query($mysql,$reg1);
    mysqli_query($mysql,$reg2);

    if ($query) {
        $path = 'public/products/'.$id_product.'/';
        $dir = __DIR__.'/../../';
        rmvdir($dir.$path);
        unset($_SESSION['cart']);
        $reset_product = "ALTER TABLE products AUTO_INCREMENT = 0";
        $reset_product_img = "ALTER TABLE product_image AUTO_INCREMENT = 0";
        mysqli_query($mysql,$reset_product);
        mysqli_query($mysql,$reset_product_img);
        $_SESSION['deleteproduct_msg'] = "Data produk berhasil dihapuskan";
        header('Location:'. site_url(""));
    } else {
        $_SESSION['deleteproduct_msg'] = "Data produk gagal dihapuskan";
        header('Location:'. site_url(""));
    }