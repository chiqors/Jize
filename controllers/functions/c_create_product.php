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

        $id = $mysql->insert_id;
        $product = $mysql->query("SELECT * FROM products WHERE id = $id ");
        $products = mysqli_fetch_object($product);
    
        $path = "public/images/";
        $gambar = $_FILES['gambar'];
    
        for($i=0;$i<count($gambar['name']);$i++) {
            $namaFile = $path.$gambar['name'][$i];
    
            $query = sprintf("INSERT INTO product_images VALUES (NULL, %s, '%s', '%s')", $products->id, $gambar['name'][$i], $namaFile);
            if(move_uploaded_file($gambar['tmp_name'][$i], __DIR__.'/../../'.$namaFile)) { 
                $mysql->query($query);
            }
        }
        header('Location:'. site_url(""));
    } else {
        $_SESSION['createproduct_msg'] = "Data produk tidak bisa ditambahkan";
        header('Location:'. site_url("product/create"));
    }
    