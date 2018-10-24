<?php
    //Configurations
    include '../../configs/database.php';
    include '../../configs/libraries.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $kpassword = $_POST['kpassword'];
    if($password != $kpassword) {
        $_SESSION['kpassword_message'] = "Konfirmasi Password Tidak Sesuai";
        header('Location:'. site_url("register"));
    } else {
        $reg = "INSERT INTO users VALUES('','$nama','$email','$username','$password','guest')";
        $query = mysqli_query($mysql,$reg);
        if ($query) {
        header('Location:'. site_url("login"));
        }
    }
?>