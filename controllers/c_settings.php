<?php
    $title = "Edit Profile";
    $user=$_SESSION['username'];
    $mysql_query=mysqli_query($mysql,"SELECT * FROM users WHERE username ='$user' ");
    ?>