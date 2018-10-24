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
    }

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