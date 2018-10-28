<div class="container py-5">
    <div class="text-center my-5">
        <h2 class="">Login</h2>
    </div>
    <div class="">
        <div class="mx-auto card rounded-0 my-5" style="max-width:400px;">
            <div class="card-body">
                <form action="<?php echo site_url("controllers/functions/c_do_login.php") ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password <a href="<?php echo site_url("forget_password")?> "><u>Forgot?</u></a></label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <?php if(isset($_SESSION['login_message'] )) { ?>
                    <div class="alert alert-warning">
                        <?php
                            echo $_SESSION['login_message'];
                            unset($_SESSION['login_message']);
                        ?>
                    </div>
                    <?php } ?>
                    <?php  unset($_SESSION['change_password']);
                        if(isset($_SESSION['fpassword_message'] )) { ?>
                    <div class="alert alert-warning">
                        <?php
                            echo $_SESSION['fpassword_message'];
                            unset($_SESSION['fpassword_message']);
                        ?>
                    </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-add-cart btn-block">Login</button>
                    <a href="<?= site_url('register') ?>" class="btn btn-link btn-block">Belum punya akun?</a>
                </form>
            </div>
        </div>
    </div>
</div>
