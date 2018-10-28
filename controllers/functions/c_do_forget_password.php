<?php
    include '../../configs/database.php';
    include '../../configs/libraries.php';
    
    $password=$_POST['password'];
    $kpassword=$_POST['kpassword'];
    $username=$_POST['user'];
    $email=$_POST['email'];
    $id=$_SESSION['id_user'];

    $users="SELECT * FROM users WHERE email = '$email' AND username = '$username'";
    $query=mysqli_query($mysql,$users);
    $userspsw="UPDATE users SET password = '$password' WHERE id = '$id'";
    if (mysqli_num_rows($query)>0) {
        $row = mysqli_fetch_object($query);
        $_SESSION['id_user'] = $row->id;
        $_SESSION['change_password'] = true;
        header('Location:'. site_url("forget_password"));
    }else {
        $_SESSION['fpassword_message'] = "Username atau Email Tidak Sesuai";
        header('Location:'. site_url("forget_password"));
    } 
    if (isset($_SESSION['change_password']) && isset($_POST['submitkpsw'])) {
        if ($password != $kpassword) {
            $_SESSION['cpassword_message'] = "Konfirmasi Password Tidak Sesuai";
            header('Location:'. site_url("forget_password"));
        } else {
            mysqli_query($mysql,$userspsw);
            unset($_SESSION['change_password']);
            $_SESSION['fpassword_message'] = "Password Berhasil Diperbaharui";
            header('Location:'. site_url("login"));
        }
    }
?>