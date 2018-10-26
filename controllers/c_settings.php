<?php
    $title = "Edit Profile";
    $user=$_SESSION['username'];
    $id=$_SESSION['id_user'];
    $mysql_query=mysqli_query($mysql,"SELECT A.*, B.address, B.phone, B.postal_code FROM users AS A LEFT JOIN user_details AS B ON B.user_id = A.id WHERE A.username ='$user' ");
    ?>