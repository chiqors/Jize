<?php
    while($data= mysqli_fetch_array($mysql_query)){
?>
 <h3>Edit Profile</h3>
    <form action="<?php echo site_url("controllers/functions/c_do_settings.php")?>" method="post">
        <table>
            <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $data['id'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"  required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $data['email'] ?>"  required></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $data['username'] ?>"  required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Password"  required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="kpassword" placeholder="Konfirmasi Password"  required></td>
                <td>
                <?php
                    if (isset($_SESSION['kpassword massage'])) {
                        echo $_SESSION['kpassword massage'];
                        unset($_SESSION['kpassword massage']); 
                    }
            }
                while($data2=mysqli_fetch_array($userdetails)){
                    ?>
               </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $data2['address'] ?>" placeholder="Address"  required></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name="phone" value="<?php echo $data2['phone'] ?>" placeholder="Phone Number" required></td>
            </tr>
            <tr>
                <td>Postal Code</td>
                <td><input type="text" name="postal_code" value="<?php echo $data2['postal_code'] ?>" placeholder="Postal Code" required></td>
            </tr>
        <tr><td><input type="submit"></td></tr>
        </table>
        <?php } ?>
