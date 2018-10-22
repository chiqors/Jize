<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jize - 
        <?php
            $uri = explode('/?', $_SERVER['REQUEST_URI'], 2);
            switch ($request_uri[0]) {
                // Home page
                case load_url().'':
                case load_url().'/index':
                case load_url().'/':
                    echo "Home";
                    break;
                // About page
                case load_url().'/about':
                    echo "About";
                    break;
                // Login page
                case load_url().'/login':
                    echo "Login";
                    break;
                // Everything else
                default:
                    echo "Error 404";
                    break;
            }
        ?>
    </title>
    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <p></p>
    </header>