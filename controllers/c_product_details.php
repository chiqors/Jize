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

?>