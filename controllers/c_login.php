<?php
    //title name page
    $title = "Login";

    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header('Location:'.site_url(""));
        exit;
    }