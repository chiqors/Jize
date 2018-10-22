<?php

include 'configs/database.php';
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('/?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case load_url().'' || load_url().'/index' || load_url().'/':
        include __DIR__ . '/controllers/c_index.php';
		include __DIR__ . '/views/templates/v_header.php';
        include __DIR__ . '/views/v_index.php';
		include __DIR__ . '/views/templates/v_footer.php';
        break;
    // About page
    case load_url().'/about':
        include __DIR__ . '/controllers/c_about.php';
		include __DIR__ . '/views/templates/v_header.php';
        include __DIR__ . '/views/v_about.php';
		include __DIR__ . '/views/templates/v_footer.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
		include __DIR__ . '/views/templates/v_header.php';
        include __DIR__ . '/views/v_404.php';
		include __DIR__ . '/views/templates/v_footer.php';
        break;
}