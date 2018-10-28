<?php
if($_SESSION['role'] == "admin") {
    $title = "Admin Dashboard";
} else {
    header('Location:'.site_url(""));
    exit;
}

if($request_uri[0] == load_url()."/dashboard") {
    
}