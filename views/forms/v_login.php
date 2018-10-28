<div class="container">
    <form action="<?php echo site_url("controllers/functions/c_do_login.php") ?>" method="post">
        <div class="imgcontainer">
            <img src="<?php echo base_url() ?>/assets/img/sample_user.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <?php if(isset($_SESSION['login_message'] )) { ?>
            <label>
                <?php
                    echo $_SESSION['login_message'];
                    unset($_SESSION['login_message']);
                ?>
            </label>
            <?php } ?>
            <?php if(isset($_SESSION['fpassword_message'] )) { ?>
            <label>
                <?php
                    echo $_SESSION['fpassword_message'];
                    unset($_SESSION['fpassword_message']);
                ?>
            </label>
            <br><br>
            <?php } ?>

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <a href="<?= site_url('register') ?>">Daftar</a>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="<?php echo site_url("forget_password")?> ">password?</a></span>
        </div>
    </form>
</div>
