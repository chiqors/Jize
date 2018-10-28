<?php

//Configurations
include '../../configs/database.php';
include '../../configs/libraries.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Password PHP/SQL
    /*  in SQL = SHA1('$password')
        in PHP = SHA1['password'];
    */

    $sql = "SELECT * FROM users
            WHERE username = '$username'
            AND password = '$password'";
    $data = $mysql->query($sql) or die($mysql->error);
    if($data->num_rows != 0) {
        $row = mysqli_fetch_object($data);
        $_SESSION['id_user'] = $row->id;
        $_SESSION['nama'] = $row->nama;
        $_SESSION['username'] = $row->username;
        $_SESSION['role'] = $row->role;
        $_SESSION['loggedin'] = true;
        header('Location:'.site_url(""));
    } else {
        $_SESSION['login_message'] = "Username atau password salah";
        header('Location:'.site_url("login"));
    }
}
