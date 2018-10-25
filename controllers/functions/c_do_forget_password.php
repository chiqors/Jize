<?php
    include '../../configs/database.php';
    include '../../configs/libraries.php';
    
    $password=$_POST['password'];
    $kpassword=$_POST['kpassword'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $users="SELECT * FROM users 
            WHERE username = '$username' 
            AND email = '$email' ";
    $query=mysqli_query($mysql,$users);
    $userspsw="UPDATE users SET password = '$password'";
    if ($query) {
        $_SESSION['change_password'] = true;
        header('Location:'. site_url("forget_password"));
    }else {
        $_SESSION['fpassword_message'] = "Username atau Email Tidak Sesuai";
        header('Location:'. site_url("forget_password"));
    } 
    if (isset($_SESSION['change_password'])) {
        if ($password != $kpassword) {
            $_SESSION['cpassword_message'] = "Konfirmasi Password Tidak Sesuai";
            header('Location:'. site_url("forget_password"));
        } else {
            mysqli_query($mysql,$users);
            unset($_SESSION['change_password']);
            $_SESSION['fpassword_message'] = "Password Berhasil Diperbaharui";
            header('Location:'. site_url("login"));
        }
    }
?>