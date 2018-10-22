<?php

//Configurations
include 'configs/database.php';
include 'configs/libraries.php';

// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

include 'configs/routes.php';