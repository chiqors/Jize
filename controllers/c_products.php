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
        $url 	= "controllers/functions/c_update_product.php";
    } else {
        $title = "Products";
    }