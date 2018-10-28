<?php
if(@$_SESSION['role'] == "guest") {
    header('Location:'.site_url(""));
    exit;
}
$title = "Admin Dashboard";