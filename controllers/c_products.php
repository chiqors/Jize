<?php
    @$id_product = $_GET['id'];
    if($request_uri[0] == load_url()."/product/create") {
        $title = "Create Product";

        $form 	= "Create Product";
        $btn = "Add";
        $url 	= "controllers/functions/c_add_product.php";
    } else if($request_uri[0] == load_url()."/product/update") {
        $title = "Update Product";

        $form 	= "Update Product";
        $btn = "Update";
        $url 	= "controllers/functions/c_update_product.php?id=$id_product";
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

        $sql = "SELECT *, (products.price * products.discount) AS discount_price 
                FROM products, product_images 
                WHERE products.id = 
                        (SELECT MAX(product_images.product_id) 
                         FROM product_images 
                         WHERE product_images.product_id = products.id) AND 
                    products.title LIKE '%{$search}%' 
                LIMIT $mulai, $halaman";
        $data = $mysql->query($sql) or die($mysql->error);
    }