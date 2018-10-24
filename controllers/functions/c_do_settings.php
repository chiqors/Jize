<?php
    //Configurations
    include '../../configs/database.php';
    include '../../configs/libraries.php';
    $user=$_GET['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $kpassword = $_POST['kpassword'];
    if($password != $kpassword) {
        $_SESSION['kpassword massage'] = "Konfirmasi Password Tidak Sesuai";
        header('Location:'. site_url("settings"));
    } else {
        $reg = "UPDATE users SET nama='$nama',email='$email',username='$username',password='$password' ";
        $query = mysqli_query($mysql,$reg);
        if ($query) {
        header('Location:'. site_url());
        }
    }
?>