<h3>Forget Password</h3>
        <?php if(isset($_SESSION['fpassword_message'] )) { ?>
            <label>
                <?php
                    echo $_SESSION['fpassword_message'];
                    unset($_SESSION['fpassword_message']);
        ?>
            </label>
        <?php } if(isset($_SESSION['cpassword_message'] )) { ?>
            <label>
                <?php
                    echo $_SESSION['cpassword_message'];
                    unset($_SESSION['cpassword_message']);
        ?>
            </label>
    <?php } 
    if (!isset($_SESSION['change_password'])) {
    ?>
<form action="<?php echo site_url("controllers/functions/c_do_forget_password.php") ?>" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name = "username" placeholder = "Masukkan Username Anda..." required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name = "email" placeholder = "Masukkan Email Anda..." required></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
    <?php } else { ?>
        <form action="<?php echo site_url("controllers/functions/c_do_forget_password.php") ?>" method="post">
    <table>
        <tr>
            <td>Password</td>
            <td><input type="Password" name = "password" placeholder = "Password" required></td>
        </tr>
        <tr>
            <td>Konfirmasi Password</td>
            <td><input type="Password" name = "kpassword" placeholder = "Konfirmasi Password" required></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
    <?php } ?>