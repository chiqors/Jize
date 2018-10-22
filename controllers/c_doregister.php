<?php
    include '../configs/database.php';
    include '../configs/libraries.php';
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $reg = "INSERT INTO users VALUES('','$nama','$email','$username','$password','')";
    $query = mysqli_query($mysql,$reg);
    if ($query) {
        header('Location:'. site_url("index"));
    } else {
        header('Location:'. site_url("about"));
    } 
?>