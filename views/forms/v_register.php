<h3>Registration</h3>
    <form action="<?php echo site_url("controllers/functions/c_do_register.php") ?>" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name = "nama" placeholder = "Masukkan Nama Anda..." required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name = "email" placeholder = "Masukkan Email Anda..." required></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name = "username" placeholder = "Masukkan Username Anda..." required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name = "password" placeholder = "Masukkan Password Anda..." required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name = "kpassword" placeholder = "Masukkan Konfirmasi Password Anda..." required></td>
                <td>
                <?php
                    if (isset($_SESSION['kpassword massage'])) {
                        echo $_SESSION['kpassword massage'];
                        unset($_SESSION['kpassword massage']); 
                    }
                ?>
                </td>
            </tr>
            <tr><td><input type="submit"></td></tr>
        </table>
    </form>