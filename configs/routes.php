<?php

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case load_url().'':
    case load_url().'/index':
    case load_url().'/':
        include './views/templates/guest/v_header.php';
        include './views/guest/v_products.php';
        include './views/templates/guest/v_footer.php';
        break;
    // About page
    case load_url().'/about':
        include './controllers/c_about.php';
		include './views/templates/v_header.php';
        include './views/v_about.php';
		include './views/templates/v_footer.php';
        break;
    // Login page
    case load_url().'/login':
        include './controllers/c_login.php';
		include './views/templates/v_header.php';
        include './views/forms/v_login.php';
		include './views/templates/v_footer.php';
        break;
    case load_url().'/logout':
        include './controllers/c_logout.php';
        break;
     // Register page
    case load_url().'/register':
        include './controllers/c_register.php';
        include './views/templates/v_header.php';
        include './views/forms/v_register.php';
        include './views/templates/v_footer.php';
        break;
    // Register input product
    case load_url().'/admin/input_product':
        include './controllers/c_input_product.php';
        include './views/templates/v_header.php';
        include './views/forms/v_input_product.php';
        include './views/templates/v_footer.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
		include './views/templates/v_header.php';
        include './views/v_404.php';
		include './views/templates/v_footer.php';
        break;
}