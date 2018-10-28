<div class="container py-5">
    <div class="text-center my-5">
        <h2 class="">Forgot Password</h2>
    </div>
    <div class="">
        <div class="mx-auto card rounded-0 my-5" style="max-width:400px;">
            <div class="card-body">
                <?php if(isset($_SESSION['fpassword_message'] )) { ?>
                    <div class="alert alert-warning">
                    <?php
                        echo $_SESSION['fpassword_message'];
                        unset($_SESSION['fpassword_message']);
                    ?>
                    </div>
                    <?php } if(isset($_SESSION['cpassword_message'] )) { ?>
                    <div class="alert alert-warning">
                    <?php
                        echo $_SESSION['cpassword_message'];
                        unset($_SESSION['cpassword_message']);
                    ?>
                    </div>
                <?php } ?>
                <?php
                if (!isset($_SESSION['change_password'])) {
                ?>
                <form action="<?php echo site_url("controllers/functions/c_do_forget_password.php") ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-add-cart btn-block">Check Availablelity</button>
                    </div>
                </form>
                <?php } else { ?>
                <form action="<?php echo site_url("controllers/functions/c_do_forget_password.php") ?>" method="post">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="kpassword" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button name="submitkpsw" type="submit" class="btn btn-add-cart btn-block">Ganti Password</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
