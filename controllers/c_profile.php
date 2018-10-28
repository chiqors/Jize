<?php
is_logedin();
$title = "Profile";
    $user=$_SESSION['username'];
    $id=$_SESSION['id_user'];
    $userData=mysqli_query($mysql,"SELECT A.*, B.address, B.postal_code, B.phone FROM users AS A LEFT JOIN user_details AS B ON B.user_id = A.id WHERE A.username ='$user' AND A.id = $id ");
    $userData = $userData->fetch_assoc();
?>
