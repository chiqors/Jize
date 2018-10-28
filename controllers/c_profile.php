<?php
is_logedin();
$title = "Profile";
    $user=$_SESSION['username'];
    $id=$_SESSION['id_user'];
    $mysql_query=mysqli_query($mysql,"SELECT * FROM users WHERE username ='$user' ");
    $userdetails=mysqli_query($mysql,"SELECT * FROM user_details WHERE user_id = '$id' ");
?>
