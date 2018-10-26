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
        $path = "public/images/";
        $gambar = $_FILES['gambar'];
        
        if(count($gambar['name']) > 0):

            $oldImages = $mysql->query("SELECT * FROM product_images WHERE product_id = $id_product");
        
            for($i=0;$i<count($gambar['name']);$i++) {
                $namaFile = $path.$gambar['name'][$i];
        
                $query = sprintf("INSERT INTO product_images VALUES (NULL, %s, '%s', '%s')", $id_product, $gambar['name'][$i], $namaFile);
                if(move_uploaded_file($gambar['tmp_name'][$i], __DIR__.'/../../'.$namaFile)) {
                    $mysql->query($query);
                }
            }

            while($row = $oldImages->fetch_object()) {
                if(file_exists(__DIR__.'/../../'.$row->image_path)) {
                    unlink(__DIR__.'/../../'.$row->image_path);
                }
                $mysql->query("DELETE FROM product_images WHERE id = $row->id");
            }
        endif;

        $_SESSION['updateproduct_msg'] = "Data produk sukses diedit";
        header('Location:'. site_url(""));
    } else {
        $_SESSION['updateproduct_msg'] = "Data produk tidak bisa diedit";
        header('Location:'. site_url("product/update"));
    }