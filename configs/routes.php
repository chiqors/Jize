<?php

// Route it up!
switch ($request_uri[0]) {
    // index product page
    case load_url().'':
    case load_url().'/index':
    case load_url().'/product':
    case load_url().'/':
        include './controllers/c_products.php';
        include './views/templates/guest/v_header.php';
        include './views/guest/v_products.php';
        include './views/templates/guest/v_footer.php';
        break;
    // Product details
    case load_url().'/product/detail':
        include './controllers/c_product_details.php';
        include './views/templates/guest/v_header.php';
        include './views/guest/v_product_details.php';
        include './views/templates/guest/v_footer.php';
        break;
    // create product
    case load_url().'/product/create':
        include './controllers/c_products.php';
        include './views/templates/guest/v_header.php';
        include './views/forms/v_form_product.php';
        include './views/templates/guest/v_footer.php';
        break;
    // update product
    case load_url().'/product/update':
        include './controllers/c_products.php';
        include './views/templates/guest/v_header.php';
        include './views/forms/v_form_product.php';
        include './views/templates/guest/v_footer.php';
        break;
    // delete product
    case load_url().'/product/delete':
        include './controllers/functions/c_delete_product.php';
        break;
    // home landing page
    case load_url().'/home':
        include './controllers/c_index.php';
        include './views/templates/v_header.php';
        include './views/guest/v_index.php';
        include './views/templates/v_footer.php';
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
    // Forget Password page
    case load_url().'/forget_password':
        include './controllers/c_forget_password.php';
		include './views/templates/v_header.php';
        include './views/forms/v_forget_password.php';
        include './views/templates/v_footer.php';
        break;
    // Setting page
    case load_url().'/settings':
        include './controllers/c_settings.php';
        include './views/templates/guest/v_header.php';
        include './views/forms/v_settings.php';
        include './views/templates/guest/v_footer.php';
        break;
    // Carts page
    case load_url().'/carts':
        include './controllers/c_carts.php';
        include './views/templates/guest/v_header.php';
        include './views/guest/v_carts.php';
        include './views/templates/guest/v_footer.php';
        break;
    // Checkout page
    case load_url().'/checkout':
        include './controllers/c_checkout.php';
        include './views/templates/guest/v_header.php';
        include './views/guest/v_checkout.php';
        include './views/templates/guest/v_footer.php';
        break;
    // Payment proof
    case load_url().'/orders/payment':
        include './controllers/c_payment.php';
        include './views/templates/guest/v_header.php';
        include './views/v_payment_proof.php';
        include './views/templates/guest/v_footer.php';
        break;
    // Invoice page
    case load_url().'/invoices':
        include './controllers/c_invoice.php';
        include './views/invoices/invoice.php';
        break;
    // Orders page
    case load_url().'/orders':
        include './controllers/c_orders.php';
        include './views/templates/guest/v_header.php';
        include './views/guest/v_orders.php';
        include './views/templates/guest/v_footer.php';
        break;
    // Orders Detail
    case load_url().'/orders/detail':
        include './controllers/c_order_detail.php';
        include './views/templates/guest/v_header.php';
        include './views/v_order_detail.php';
        include './views/templates/guest/v_footer.php';
        break;
    // Profile page
    case load_url().'/profile':
        include './controllers/c_profile.php';
        include './views/templates/guest/v_header.php';
        include './views/v_profile.php';
        include './views/templates/guest/v_footer.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
		include './views/templates/v_header.php';
        include './views/v_404.php';
		include './views/templates/v_footer.php';
        break;
}
