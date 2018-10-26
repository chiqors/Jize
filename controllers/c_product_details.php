<?php

$title = "Product Details";

$hscripts = <<<HSCRIPTS
<link rel="stylesheet" href="{$fn->site_url('/assets/plugins/owl-carousel/assets/owl.carousel.min.css')}">
<link rel="stylesheet" href="{$fn->site_url('/assets/plugins/owl-carousel/assets/owl.theme.green.min.css')}">
<link rel="stylesheet" href="{$fn->site_url('/assets/plugins/fancybox/jquery.fancybox.min.css')}">
HSCRIPTS;

$fscripts = <<<FSCRIPTS
<script src="{$fn->site_url('/assets/plugins/owl-carousel/owl.carousel.min.js')}"></script>
<script src="{$fn->site_url('/assets/plugins/fancybox/jquery.fancybox.min.js')}"></script>
<script>
    $(function() {
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            items:1,
            dots: true,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 2500

        });

        $('.owl-item.cloned').find('a').removeAttr('data-fancybox');

        $('[data-fancybox]').fancybox();
    });
</script>
FSCRIPTS;

// escape string for revent sql injection
$idProduct = mysqli_real_escape_string($mysql, $_GET['id']);
$url    = site_url("controllers/functions/c_add_to_cart.php");

// query
$sql = "SELECT A.*, IF(A.discount > 0, (A.price - A.price * (A.discount/100)), null) AS discount_price FROM products AS A WHERE id = $idProduct";

$sqlImages = "SELECT * FROM product_images WHERE product_id = $idProduct";

$sqlFeatured = "SELECT A.id, A.title, A.price, B.image_path, IF(A.discount > 0, (A.price - A.price * (A.discount/100)), null) AS discount_price FROM products AS A INNER JOIN product_images AS B ON B.product_id = A.id WHERE A.id != {$idProduct} GROUP BY A.id ORDER BY RAND() LIMIT 4";

// get product
$product = $mysql->query($sql);

// if product not found
if(mysqli_num_rows($product) < 1) header("Location: {$fn->site_url()}");

// get product images
$productImages = $mysql->query($sqlImages);

// get featured products
$featuredProducts = $mysql->query($sqlFeatured);

// get data product
$product = $product->fetch_object();

?>