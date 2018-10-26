<?php
    @$id_product = $_GET['id'];
    if($request_uri[0] == load_url()."/product/create") {
        $title = "Create Product";

        $form 	= "Create Product";
        $btn = "Add";
        $url 	= "controllers/functions/c_create_product.php";
    } else if($request_uri[0] == load_url()."/product/update") {
        $title = "Update Product";

        $form 	= "Update Product";
        $btn = "Update";
        $url 	= "controllers/functions/c_update_product.php?id=$id_product";
        $idProduct = mysqli_real_escape_string($mysql, $_GET['id']);
        $product = $mysql->query("SELECT * FROM products WHERE id = $idProduct");

        if(mysqli_num_rows($product) < 1) header("Location: {$fn->site_url()}");

        $product = mysqli_fetch_object($product);

    } else {
        $title = "Products";

        // Item Column Configurations
        if(isset($_SESSION['loggedin'])) {
            $mainColumn = 9;
            $listColumn = 4;
            $perPage = 9;
        } else {
            $mainColumn = 12;
            $listColumn = 3;
            $perPage = 12;
        }

        //Pagination System
        $halaman = 10; //batasan halaman
        $page = isset($_GET['page']) ? (int)$_GET["page"] : 1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

        @$search = $_GET['search'];

        $sql_pagination = "SELECT * FROM products";
        $data_pagination = $mysql->query($sql_pagination) or die($mysql->error);
        $total = mysqli_num_rows($data_pagination);
        $pages = ceil($total/$halaman);

        $sql = "SELECT A.*, B.image_path, IF(A.discount > 0, (A.price - A.price * (A.discount/100)), null) AS discount_price FROM products AS A INNER JOIN product_images AS B ON B.product_id = A.id WHERE A.title LIKE '%{$search}%' GROUP BY A.id LIMIT $mulai, $halaman";

        $data = $mysql->query($sql) or die($mysql->error);
    }